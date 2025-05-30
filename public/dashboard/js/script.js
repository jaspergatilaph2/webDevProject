let lastScrollTop = 0;
const navbar = document.getElementById("mainNav");

window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.classList.add("hidden");
    } else {
        // Scrolling up
        navbar.classList.remove("hidden");
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For mobile or negative scrolling
});