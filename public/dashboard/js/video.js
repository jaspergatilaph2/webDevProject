document.addEventListener("DOMContentLoaded", function () {
    var videoModal = document.getElementById("videoModal");
    var modalVideo = document.getElementById("modalVideo");

    videoModal.addEventListener("hidden.bs.modal", function () {
        modalVideo.pause();
    });
});