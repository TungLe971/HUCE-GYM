{// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// Thêm quà tặng
// var getKhungGift = $('.snhv__div--quatang');
var getNutThemGift = $('.js-them');
var getNutSua = $('.shnv__div__a-updateGift');
const showPopupGifts = $(".view_gift__modal--popup");
function showPopupGift(){
    showPopupGifts.classList.add("snhv__modal--popup--open");
}
getNutThemGift.addEventListener('click',showPopupGift);


// thao tac trong popup gift
var getHuyGiftPopup = $('.view_gift__table--button_huy');
function closePopupGift(){
    showPopupGifts.classList.remove("snhv__modal--popup--open");
}
getHuyGiftPopup.addEventListener('click',closePopupGift);

// Thao tac voi gui SMS
// const snhvGuiSMS = $(".js-guiSMS");
const snhvModalSMS = $(".snhv__modal--popup")
var snhvSendSMS = $('.js-guiSMS');
    snhvSendSMS.onclick = function(e){
    snhvModalSMS.classList.add('snhv__modal--popup--open'); 
}


// function showGuiSMS() {
//     snhvModalSMS.classList.add('snhv__modal--popup--open')
// }
// snhvGuiSMS.addEventListener('click',showGuiSMS);

const snhvClose = document.querySelectorAll('.snhv__table--button_huy')
const snhvThemPupUp = document.querySelectorAll('.snhv__table--button_gui')

// bắt sự kiện nút ở trong popup
function close() {
    snhvModalSMS.classList.remove('snhv__modal--popup--open')
}
snhvClose[0].addEventListener('click',close)

function guiPopUp(e) {
    snhvModalSMS.classList.remove('snhv__modal--popup--open')
}
snhvThemPupUp[0].addEventListener('click',guiPopUp)
}

