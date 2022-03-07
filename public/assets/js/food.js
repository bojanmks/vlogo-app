$(document).ready(() => {
    getFood();
    getCart();

    $('#allCategories').click(function(e) {
        e.preventDefault();

        $('.food-category').removeClass("active");
        $(this).addClass("active");

        getFood();
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

        getFood();
    });

    $('#tbName').on('input', () => {
        getFood();
    });

    $('#ddlSort').on('change', () => {
        getFood();
    });

    async function getFood(page = 1) {
        const restaurantId = $('#idRestaurant').val();
        const keyword = $('#tbName').val().trim();
        const sortOrder = $('#ddlSort').val();
        let categories = [];

        for(let el of $('.food-category.active'))
            categories.push($(el).data('id'));

        $('.loader').fadeIn('fast');
        const response = await ajaxCallback(base_url + "/restaurants/food", "POST", {
            id: restaurantId,
            keyword: keyword,
            sortOrder: sortOrder,
            categories: categories,
            page: page
        });
        $('.loader').fadeOut('fast');

        printFood(response);
    }

    function printFood(data) {
        if(data.views.length) {
            let html = "";

            for(let r of data.views)
                html += r;

            $('#foodWrapper').html(html);
        } else {
            $('#foodWrapper').html("<span class='no-results col-12 font-medium'>No food matches your search criteria.</span>");
        }
        updatePagination(data);
        enableAddingToOrder();
    }

    function updatePagination(data) {
        const currentPage = data.food.current_page;
        const lastPage = data.food.last_page;

        const disabledBack = currentPage === 1 ? 'disabled' : '';
        const disabledNext = currentPage === lastPage ? 'disabled' : '';

        let html = `<ul class='pagination font-small'><li class='page-item ${disabledBack}'><a href='#' class='page-link pagination-back'><i class='fas fa-caret-left'></i></a></li>`;

        for(let i = 0; i < lastPage; i++) {
            const activeClass = i + 1 === currentPage ? 'active' : '';
            html += `<li class="page-item ${activeClass}"><a href='#' class="page-link" data-page='${i + 1}'>${i + 1}</a></li>`;
        }

        html += `<li class='page-item ${disabledNext}'><a href='#' class='page-link pagination-next'><i class='fas fa-caret-right'></i></a></li></ul>`;

        $('#foodPagination').html(html);
        enablePagination();
    }

    function enablePagination() {
        $('.pagination a').click(function(e) {
            e.preventDefault();
        });

        $('.page-link').click(function() {
            const currentPage = $('.page-item.active .page-link').data('page');
            const page = $(this).data('page');

            if(page === currentPage)
                return;

            getFood(page);
        });

        $('.pagination-back').click(function() {
            const currentPage = $('.page-item.active .page-link').data('page');

            if(currentPage <= 1)
                return;

            getFood(currentPage - 1);
        });

        $('.pagination-next').click(function() {
            const currentPage = $('.page-item.active .page-link').data('page');
            const numberOfPages = $('.page-link').length;

            if(currentPage >= numberOfPages)
                return;

            getFood(currentPage + 1);
        });
    }

    function enableAddingToOrder() {
        // Adding to order
        $('.add-food').on('click', async function(e) {
            e.preventDefault();
            const id = $(this).data('id');

            const result = await ajaxCallback(base_url + '/cart/add', 'POST', {
                id: id
            });

            if(result)
                getCart();
        });
    }

    async function getCart() {
        const urlParts = window.location.href.split('/');
        const restaurantId = parseInt(urlParts[urlParts.length - 1]);

        const result = await ajaxCallback(base_url + "/cart/items", "POST", {
            restaurantId: restaurantId
        });

        printCart(result);
    }

    function printCart(data) {
        let html = '';
        let totalPrice = 0;

        if(data.length) {
            for(let el of data) {
                totalPrice += parseFloat(el.price) * parseInt(el.amount);
                html += `<li class="order-item font-small row d-flex align-items-center justify-content-between">
                        <span class="col-8">${el.name} - <span class="fw-bold">$${el.price}</span></span>
                        <span class="col-4 d-flex justify-content-end font-small">
                            <a href="#" data-id="${el.cart_id}" data-action="decrease" class="btn-amount btn-decrease color-primary"><i class="fas fa-minus"></i></a>
                            <span class="mx-1">${el.amount}</span>
                            <a href="#" data-id="${el.cart_id}" data-action="increase" class="btn-amount btn-increase color-primary"><i class="fas fa-plus"></i></a>
                            <a href="#" data-id="${el.cart_id}" data-action="remove" class="ms-3 btn-amount btn-remove"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </span>
                        </li>`;
            }

            html += `<li class="font-small d-flex align-items-center justify-content-between mt-2"><span>Total:</span><span class="fw-bold">$${totalPrice.toFixed(2)}</span></li>`;
        } else {
            html = `<li class="font-small text-center">Your order is empty</li>`;
        }

        $('#orderItems ul').html(html);

        enableChangingCart();
    }

    function enableChangingCart() {
        $('.btn-amount').click(async function(e) {
            e.preventDefault();

            const id = $(this).data('id');
            const action = $(this).data('action');

            const result = await ajaxCallback(base_url + '/cart/change', 'POST', {
                id: id,
                action: action
            })

            if(result)
                getCart();
        });
    }

    // form submition
    const addressPattern = /^[A-ZŠĐČĆŽ][a-zšđčćž]{2,}(\s[A-ZŠĐČĆŽa-zšđčćž][a-zšđčćž]{2,})*\s\d+[A-Z]?(\/\d+)*$/;

    function checkAddress() {
        validateField($('#address'), addressPattern);
    }

    $('#address').blur(checkAddress);

    $('#btnOrder').click(function() {
        const result = submitForm([checkAddress], 'orderForm');

        if(result)
            $(this).addClass('disabled');

        return result;
    });
});
