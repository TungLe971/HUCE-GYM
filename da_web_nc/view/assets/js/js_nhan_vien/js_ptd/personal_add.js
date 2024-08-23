// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const personalThem = document.querySelectorAll('.js-them')
const personalModal = document.querySelector('.personal_modal-popup')
const personalClose = document.querySelectorAll('.personal_table-button_huy')
const personalThemPupUp = document.querySelectorAll('.personal_table-button_them')
function showAdd() {
    personalModal.classList.add('personal_modal-popup-open')
}
personalThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    personalModal.classList.remove('personal_modal-popup-open')
}
personalClose[0].addEventListener('click',close)

function themPupUp(e) {
    personalModal.classList.remove('personal_modal-popup-open')
}

personalThemPupUp[0].addEventListener('click',themPupUp)