import './bootstrap';

let scrollContainer = document.querySelector(".imageGallery");
let rwnbtn = document.getElementById("rwnbtn");
let fwbtn = document.getElementById("fwbtn");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto"
});

fwbtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 1200;
})

rwnbtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= 1200;
})