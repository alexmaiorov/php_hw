var modal = document.querySelector('.modal');
var btnClose = document.querySelector('btn-close');
function getInModal(img){
    console.log(img.src)
    modal.style.display = "block";
    document.querySelector('.modal-img').src = img.src;
}
function closeModal(){
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}