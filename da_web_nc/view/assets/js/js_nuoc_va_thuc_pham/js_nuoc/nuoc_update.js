{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const hang = $$(".nuoc__table_td--hienthi-td-update");
    const tieuDe = $(".nuoc__table_row--tieuDe_update");
    const buttonupdate = $(".js-sua");

    dem=0;
    function showupdate(){
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
        
    }
    buttonupdate.addEventListener("click",showupdate);
}