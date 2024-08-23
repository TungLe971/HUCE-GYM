{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const giftForm = $(".td__form--gift");
    function clickGiftFormDelete(){
        giftForm.getAttribute("action","../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php");
    }
    function clickGiftFormUpdate(){
        giftForm.getAttribute("action","../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php");
    }
}