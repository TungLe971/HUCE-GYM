// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const nhanvien_Them = document.querySelectorAll('.js-add')
const nhanvien_Modal = document.querySelector('.nhanvien__modal-popup')
const nhanvien_Close = document.querySelectorAll('.nhanvien__table-btn-huy')
const nhanvien_ThemPopUp = document.querySelectorAll('.nhanvien__table-btn-them')
function showAdd() {
    nhanvien_Modal.classList.add('nhanvien__modal-popup-open')
}
nhanvien_Them[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    nhanvien_Modal.classList.remove('nhanvien__modal-popup-open')
}
nhanvien_Close[0].addEventListener('click',close)

function themPopUp(e) {
    nhanvien_Modal.classList.remove('nhanvien__modal-popup-open')
}
nhanvien_ThemPopUp[0].addEventListener('click',themPopUp)