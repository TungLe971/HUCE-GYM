// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const blThem = document.querySelectorAll('.js-them')
const blModal = document.querySelector('.bl__modal--popup')
const blClose = document.querySelectorAll('.bl__table--button_huy')
const blThemPupUp = document.querySelectorAll('.bl__table--button_them')
function showAdd() {
    blModal.classList.add('bl__modal--popup--open')
}
blThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    blModal.classList.remove('bl__modal--popup--open')
}
blClose[0].addEventListener('click',close)

function themPupUp(e) {
    blModal.classList.remove('bl__modal--popup--open')
}

blThemPupUp[0].addEventListener('click',themPupUp)