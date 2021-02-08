// Banner RGPD
const buttonDismiss = document.getElementById("dismiss");
const buttonAccept = document.getElementById("accept");
const bannerRGPD = document.getElementById("bannerRGPD");

buttonDismiss.addEventListener("click", function (e) {
    bannerRGPD.classList.add("hidden");
    localStorage.setItem("show", "false");
});

buttonAccept.addEventListener("click", function (e) {
    bannerRGPD.classList.add("hidden");
    localStorage.setItem("show", "false");
});

window.onload = function () {
    let show = localStorage.getItem("show");
    if (show === "false") {
        bannerRGPD.className = "hidden";
    }
};
