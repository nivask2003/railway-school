document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.querySelector(".navbar-toggler");
    const icon = toggler.querySelector("i");
    const menu = document.getElementById("navbarSupportedContent");

    menu.addEventListener("show.bs.collapse", function () {
        icon.classList.remove("bi-list");
        icon.classList.add("bi-x-lg");
    });

    menu.addEventListener("hide.bs.collapse", function () {
        icon.classList.remove("bi-x-lg");
        icon.classList.add("bi-list");
    });
});


function showImage(imageSrc){
    document.getElementById('popupGalleryImage').src = imageSrc;
}