{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelector.bind(document);

    const selectOptionSortNuoc = $(".nuoc__select--sort");
    const selectOptionChieuNuoc = $(".nuoc__select--tang"); 

    function fUrlSelectOptionSortNuoc(e){
        window.location.href="http://localhost/da_web_nc/view/views_nuoc_va_thuc_pham/views_nuoc/nuoc.php?sort="+selectOptionSortNuoc.value+"&chieu="+selectOptionChieuNuoc.value;
        e.preventDefault();
        e.preventDefault();
    }

}