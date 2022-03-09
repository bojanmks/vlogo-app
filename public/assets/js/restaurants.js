$(document).ready(() => {
    getRestaurants();

    $('#allCategories').click(function(e) {
        e.preventDefault();

        $('.food-category').removeClass("active");
        $(this).addClass("active");

        getRestaurants();
    });

    $('.food-category').click(function(e) {
        e.preventDefault();

        $('#allCategories').removeClass("active");
        if($(this).hasClass('active')) {
            $(this).removeClass('active')

            if(!$('.food-category.active').length) {
                $('#allCategories').addClass("active");
            }
        } else {
            $(this).addClass("active");
        }

        getRestaurants();
    });

    $('#tbName').on('input', () => {
        getRestaurants();
    });

    $('#ddlSort').on('change', () => {
        getRestaurants();
    });

    async function getRestaurants(page = 1) {
        const keyword = $('#tbName').val().trim();
        const sortOrder = $('#ddlSort').val();
        let categories = [];

        for(let el of $('.food-category.active'))
            categories.push($(el).data('id'));

        $('.restaurantDiv').removeClass('shadow');

        $('.loader').fadeIn('fast');
        const response =  await ajaxCallback(base_url + "/restaurants/filter", "POST", {
            keyword: keyword,
            sortOrder: sortOrder,
            categories: categories,
            page: page
        });
        $('.loader').fadeOut('fast');

        printRestaurants(response);
    }

    function printRestaurants(data) {
        if(data.views.length) {
            let html = "";

            for(let r of data.views)
                html += r;

            $('#restaurantsWrapper').html(html);
        } else {
            $('#restaurantsWrapper').html("<span class='no-results col-12 font-medium'>No restaurants match your search criteria.</span>");
        }
        updatePagination(data);
    }

    function updatePagination(data) {
        const currentPage = data.restaurants.current_page;
        const lastPage = data.restaurants.last_page;

        const disabledBack = currentPage === 1 ? 'disabled' : '';
        const disabledNext = currentPage === lastPage ? 'disabled' : '';

        let html = `<ul class='pagination font-small'><li class='page-item ${disabledBack}'><a href='#' class='page-link pagination-back'><i class='fas fa-caret-left'></i></a></li>`;

        for(let i = 0; i < lastPage; i++) {
            const activeClass = i + 1 === currentPage ? 'active' : '';
            html += `<li class="page-item ${activeClass}"><a href='#' class="page-link number-link" data-page='${i + 1}'>${i + 1}</a></li>`;
        }

        html += `<li class='page-item ${disabledNext}'><a href='#' class='page-link pagination-next'><i class='fas fa-caret-right'></i></a></li></ul>`;

        $('#restaurantsPagination').html(html);
        enablePagination();
    }

    function enablePagination() {
        $('.pagination a').click(function(e) {
            e.preventDefault();
        });

        $('.page-link.number-link').click(function() {
            const currentPage = $('.page-item.active .page-link').data('page');
            const page = $(this).data('page');

            if(page === currentPage)
                return;

            getRestaurants(page);
        });

        $('.pagination-back').click(function() {
            const currentPage = $('.page-item.active .page-link').data('page');

            if(currentPage <= 1)
                return;

            getRestaurants(currentPage - 1);
        });

        $('.pagination-next').click(function() {
            const currentPage = $('.page-item.active .page-link').data('page');
            const numberOfPages = $('.page-link').length - 2;

            if(currentPage >= numberOfPages)
                return;

            getRestaurants(parseInt(currentPage) + 1);
        });
    }
});
