   // document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
    const lopThem = document.querySelectorAll('.js-them')
    const lopModal = document.querySelector('.lop_modal-popup')
    const lopClose = document.querySelectorAll('.lop_table-button_huy')
    const lopThemPupUp = document.querySelectorAll('.lop_table-button_them')
    function showAdd() {
        lopModal.classList.add('lop_modal-popup-open')
    }
    lopThem[0].addEventListener('click',showAdd)

    // bắt sự kiện nút ở trong popup
    function close() {
        lopModal.classList.remove('lop_modal-popup-open')
    }
    lopClose[0].addEventListener('click',close)

    function themPupUp(e) {
        lopModal.classList.remove('lop_modal-popup-open')
    }

    lopThemPupUp[0].addEventListener('click',themPupUp)