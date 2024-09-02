$(document).ready(function() {
    // Fetch car listings via AJAX
    $.ajax({
        url: 'get_cars.php',
        method: 'GET',
        success: function(response) {
            $('#car-listings').html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });

    // Menu buttons
    var menuButtons = [
        { label: "Shop New", url: "#" },
        { label: "Shop Used", url: "#" },
        { label: "Special Offers", url: "#" },
        { label: "More", url: "#" },
        { label: "About Us", url: "#" }
    ];

    var $menu = $('.navbar-nav');
    menuButtons.forEach(function(button) {
        var $listItem = $('<li class="nav-item"></li>');
        var $button = $('<a class="nav-link" href="' + button.url + '">' + button.label + '</a>');
        $listItem.append($button);
        $menu.append($listItem);
    });
});