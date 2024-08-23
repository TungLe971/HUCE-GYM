// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const nuocThem = document.querySelectorAll('.js-them')
const nuocModal = document.querySelector('.nuoc__modal--popup')
const nuocClose = document.querySelectorAll('.nuoc__table--button_huy')
const nuocThemPupUp = document.querySelectorAll('.nuoc__table--button_them')

function showAdd() {
    nuocModal.classList.add('nuoc__modal--popup--open')
}
nuocThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    nuocModal.classList.remove('nuoc__modal--popup--open')
}
nuocClose[0].addEventListener('click',close)

function themPupUp(e) {
    nuocModal.classList.remove('nuoc__modal--popup--open')
}

nuocThemPupUp[0].addEventListener('click',themPupUp)