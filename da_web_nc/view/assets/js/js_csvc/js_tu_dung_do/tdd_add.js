// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const tddThem = document.querySelectorAll('.js-them')
const tddModal = document.querySelector('.tdd__modal--popup')
const tddClose = document.querySelectorAll('.tdd__table--button_huy')
const tddThemPupUp = document.querySelectorAll('.tdd__table--button_them')
function showAdd() {
    tddModal.classList.add('tdd__modal--popup--open')
}
tddThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    tddModal.classList.remove('tdd__modal--popup--open')
}
tddClose[0].addEventListener('click',close)

function themPupUp(e) {
    tddModal.classList.remove('tdd__modal--popup--open')
}

tddThemPupUp[0].addEventListener('click',themPupUp)