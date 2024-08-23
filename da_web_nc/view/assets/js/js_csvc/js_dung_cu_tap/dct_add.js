{// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const dctThem = document.querySelectorAll('.js-them')
const dctModal = document.querySelector('.dct__modal--popup')
const dctClose = document.querySelectorAll('.dct__table--button_huy')
const dctThemPupUp = document.querySelectorAll('.dct__table--button_them')


function showAdd() {
    dctModal.classList.add('dct__modal--popup--open')
}
dctThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    dctModal.classList.remove('dct__modal--popup--open')
}
dctClose[0].addEventListener('click',close)

function themPupUp(e) {
    dctModal.classList.remove('dct__modal--popup--open')
}

dctThemPupUp[0].addEventListener('click',themPupUp)

}