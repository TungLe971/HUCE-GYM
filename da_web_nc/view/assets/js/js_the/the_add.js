const theThem = document.querySelectorAll('.js-them');
const theModal = document.querySelector('.the_modal-popup');
const theClose = document.querySelectorAll('.the_table-button_huy');
const theThemPupUp = document.querySelectorAll('.the_table-button_them');

function showAdd() {
    theModal.classList.add('the_modal-popup-open');
}

theThem[0].addEventListener('click', showAdd);

function close() {
    theModal.classList.remove('the_modal-popup-open');
}

theClose[0].addEventListener('click', close);

function themPupUp(e) {
    var isSuccess = true; // Thay đổi giá trị này dựa trên kết quả thêm
    if (isSuccess) {
        alert('Tạo thẻ thành công!');
        close();
    } else {
        alert('Tạo thẻ thất bại!');
    }
}

theThemPupUp[0].addEventListener('click', themPupUp);
