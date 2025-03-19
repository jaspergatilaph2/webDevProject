document.addEventListener("DOMContentLoaded", function () {
    let dropdownItems = document.querySelectorAll(".dropdown-item");
    let navbarToggler = document.querySelector(".navbar-toggler");
    let navbarCollapse = document.querySelector(".navbar-collapse");

    dropdownItems.forEach(item => {
        item.addEventListener("click", function () {
            // Close navbar when an item is clicked (on mobile)
            if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                navbarToggler.click();
            }
        });
    });
});