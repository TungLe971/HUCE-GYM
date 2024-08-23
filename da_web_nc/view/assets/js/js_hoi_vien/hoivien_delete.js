{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const hang = $$(".hoivien__table-view-content--delete");
    const tieuDe = $(".hoivien__table-title--delete");
    const tieuDe2 = $(".hoivien__table-title--delete2");
    const buttonXoa = $(".js-del");
    dem=0;
    function showXoa(){
        dem=dem+1;
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
        if(dem%2!=0){
            for(var i = 0 ; i<hang.length;i++)
            {
                hang[i].style.display="table-cell";
            }
            tieuDe2.style.display="table-cell";
        }
        else{
            for(var i = 0 ; i<hang.length;i++)
            {
                hang[i].style.display="none";
            }
            tieuDe2.style.display="none";
        }
    }
    buttonXoa.addEventListener("click",showXoa);
}