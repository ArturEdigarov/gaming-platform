const images = document.querySelectorAll('.portfolio-image');
const controlls = document.querySelectorAll('.portfolio-control');
let imageIndex = 0;
function showImage(index) {
    images[imageIndex].classList.remove('active');
    images[index].classList.add('active');
    imageIndex = index;
}

controlls.forEach((e) => {
         
})