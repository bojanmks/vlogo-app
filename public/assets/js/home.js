$(document).ready(() => {
    $(window).scroll(setHeaderShadow);

    setHeaderShadow();

    function setHeaderShadow() {
        if($(window).scrollTop() > $("#header .container").outerHeight()) {
            $("#header").addClass("shadow");
        } else {
            $("#header").removeClass("shadow");
        }
    }

    // search
    $(window).click(function() {
        searchResultsList.slideUp('fast');
        //searchResultsList.html('');
    });

    $('#homepageForm').click(function(e) {
        e.stopPropagation();
    });

    const searchField = $('#tbSearch');

    searchField.focus(function() {
        getResults();
    });

    searchField.on('input', function() {
        getResults();
    });

    async function getResults() {
        const keyword = $('#tbSearch').val();

        if(keyword === '') {
            searchResultsList.html('<li class="p-3">Start typing...</li>');
            searchResultsList.slideDown('fast');
            return;
        }

        const restaurants = await ajaxCallback(base_url + "/restaurants/search", 'POST', {
            keyword: keyword
        });

        printResults(restaurants, keyword);
    }

    const searchResultsList = $('#searchResults ul');
    searchResultsList.hide();

    function printResults(results, keyword) {
        let html = '';

        if(results.data.length) {
            for(let r of results.data) {
                html += `<li><a class="d-block p-2 search-result" href="${base_url + "/restaurants/" + r.id}">${r.name}</a></li>`;
            }

            if(results.total - results.to)
                html += `<li><a class="d-block p-2" href="${base_url + "/restaurants?keyword=" + keyword}">And ${results.total - results.to} More...</a></li>`;
        } else {
            html = '<li class="p-3">No matches</li>';
        }

        searchResultsList.html(html);
        searchResultsList.slideDown('fast');
    }
});
