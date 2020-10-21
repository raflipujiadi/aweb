var pages = document.getElementsByClassName('onepage');
for (var i = 0; i < pages.length; i++) {
    pages[i].style.height = window.innerHeight + "px";
}
document.body.style.height = (window.innerHeight + 15) * pages.length + "px";