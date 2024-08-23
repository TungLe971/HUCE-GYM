{// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// Thêm quà tặng
// var getKhungGift = $('.td__div--quatang');
var getNutThemGift = $('.js-them');
var getNutSua = $('.td__div__a-updateGift');
const showPopupGifts = $(".view_gift__modal--popup");
function showPopupGift(){
    showPopupGifts.classList.add("td__modal--popup--open");
}
getNutThemGift.addEventListener('click',showPopupGift);


// thao tac trong popup gift
var getHuyGiftPopup = $('.view_gift__table--button_huy');
function closePopupGift(){
    showPopupGifts.classList.remove("td__modal--popup--open");
}
getHuyGiftPopup.addEventListener('click',closePopupGift);

}