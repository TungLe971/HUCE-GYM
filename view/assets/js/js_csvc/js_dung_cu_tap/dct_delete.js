{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const hang = $$(".dct__table_td--hienthi-td-xoa");
    const tieuDe = $(".dct__table_row--tieuDe_Xoa");
    const buttonXoa = $(".js-xoa");
    var dem = 0;
    function showXoa(){
        dem = dem + 1;
        if(dem%2!=0){
        for(var i = 0 ; i<hang.length;i++)
        {
            hang[i].style.display="table-cell";
        }
        tieuDe.style.display="table-cell";
    }
    else{
        for(var i = 0 ; i<hang.length;i++)
        {
            hang[i].style.display="none";
        }
        tieuDe.style.display="none";
    }
        
    }
    buttonXoa.addEventListener("click",showXoa);
}