let zoulou_classes = document.querySelectorAll(".zoulou");
zoulou_classes.forEach(function (zoulou){
    zoulou.style.fontWeight = "bold";
});

let divs_caches = document.querySelectorAll("[hidden]");
divs_caches.forEach(function (element) {
    element.removeAttribute("hidden");
});
let divs_timides = document.querySelectorAll(".timide");
for (let i = 0; i < divs_timides.length; i++) {
    divs_caches.style.display = "none";
}