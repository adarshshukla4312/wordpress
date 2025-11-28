document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');
    const body = document.body;

    if (menuToggle && mainNavigation) {
        menuToggle.addEventListener('click', function () {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            mainNavigation.classList.toggle('toggled');
            body.classList.toggle('menu-open');
        });
    }

    // Search Toggle (Simple visibility toggle for now)
    const searchToggle = document.getElementById('search-toggle');
    const searchDropdown = document.querySelector('.search-dropdown');

    if (searchToggle && searchDropdown) {
        searchToggle.addEventListener('click', function (e) {
            e.preventDefault();
            searchDropdown.classList.toggle('active');
            if (searchDropdown.classList.contains('active')) {
                const input = searchDropdown.querySelector('input');
                if (input) setTimeout(() => input.focus(), 100);
            }
        });

        const searchClose = document.getElementById('search-close');
        if (searchClose) {
            searchClose.addEventListener('click', function (e) {
                e.preventDefault();
                searchDropdown.classList.remove('active');
            });
        }

        // Close when clicking outside
        document.addEventListener('click', function (e) {
            if (!searchToggle.contains(e.target) && !searchDropdown.contains(e.target)) {
                searchDropdown.classList.remove('active');
            }
        });
    }
});
