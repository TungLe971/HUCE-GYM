{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const giftForm = $(".snhv__form--gift");
    function clickGiftFormDelete(){
        giftForm.getAttribute("action","../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_delete_gift.php");
    }
    function clickGiftFormUpdate(){
        giftForm.getAttribute("action","../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_delete_gift.php");
    }
}