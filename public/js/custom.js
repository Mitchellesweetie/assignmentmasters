document.addEventListener("DOMContentLoaded", function () {
    var yearEl = document.getElementById("footer-year");
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

    var path = window.location.pathname;
    document.querySelectorAll(".navbar .nav-link").forEach(function (link) {
        var href = link.getAttribute("href");
        if (href === path) {
            link.classList.add("active");
        }
    });
});
