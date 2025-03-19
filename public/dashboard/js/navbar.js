document.addEventListener("DOMContentLoaded", function () {
    let dropdowns = document.querySelectorAll(".dropdown-toggle");

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener("click", function (event) {
            if (window.innerWidth < 992) { 
                event.preventDefault(); // Prevent default Bootstrap behavior
                let menu = this.nextElementSibling;
                let isOpen = menu.classList.contains("show");

                // Close other open dropdowns
                document.querySelectorAll(".dropdown-menu").forEach(el => el.classList.remove("show"));

                // Toggle dropdown menu
                if (!isOpen) {
                    menu.classList.add("show");
                }
            }
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown-menu").forEach(el => el.classList.remove("show"));
        }
    });
})