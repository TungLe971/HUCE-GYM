// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const hoivien_Them = document.querySelectorAll('.js-add')
const hoivien_Modal = document.querySelector('.hoivien__modal-popup')
const hoivien_Close = document.querySelectorAll('.hoivien__table-btn-huy')
const hoivien_ThemPopUp = document.querySelectorAll('.hoivien__table-btn-them')
function showAdd() {
    hoivien_Modal.classList.add('hoivien__modal-popup-open')
}
hoivien_Them[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    hoivien_Modal.classList.remove('hoivien__modal-popup-open')
}
hoivien_Close[0].addEventListener('click',close)

function themPopUp(e) {
    hoivien_Modal.classList.remove('hoivien__modal-popup-open')
}
hoivien_ThemPopUp[0].addEventListener('click',themPopUp)