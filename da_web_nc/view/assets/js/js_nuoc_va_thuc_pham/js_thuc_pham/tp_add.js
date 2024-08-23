// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const tpThem = document.querySelectorAll('.js-them')
const tpModal = document.querySelector('.tp__modal--popup')
const tpClose = document.querySelectorAll('.tp__table--button_huy')
const tpThemPupUp = document.querySelectorAll('.tp__table--button_them')

function showAdd() {
    tpModal.classList.add('tp__modal--popup--open')
}
tpThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút hủy ở trong popup
function close() {
    tpModal.classList.remove('tp__modal--popup--open')
}
tpClose[0].addEventListener('click',close)

function themPupUp() {
    tpModal.classList.remove('tp__modal--popup--open')
}

tpThemPupUp[0].addEventListener('click',themPupUp)