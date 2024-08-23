{
    const $ = document.querySelector.bind(document);
    let cong1 = $(".ktc_goi_tap_i1--goi_tap--menu");
    let cong2 = $(".ktc_goi_tap_i2--goi_tap--menu");
    let cong3 = $(".ktc_goi_tap_i3--goi_tap--menu");
    let content1 = $(".ktc_goi_tap__div--goi_tap--content__js1");
    let content2 = $(".ktc_goi_tap__div--goi_tap--content__js2");
    let content3 = $(".ktc_goi_tap__div--goi_tap--content__js3");
    
    var dem = 0 ;
    cong1.onclick = function(e){   
        dem++;  
        if(dem%2!=0)
        {
            content1.style.display = "block";
            content2.style.display = "none";
            content3.style.display = "none";
            e.target.classList.remove("fa-plus");
            e.target.classList.add("fa-minus");
            cong2.classList.add("fa-plus");
            cong3.classList.add("fa-plus");
        }
        else{
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "none";
            e.target.classList.add("fa-plus");
            e.target.classList.remove("fa-minus");
            cong2.classList.add("fa-plus");
            cong3.classList.add("fa-plus");

        }
    }

    var dem2 = 0;
    cong2.onclick = function(e){   
        dem2++;  
        if(dem2%2!=0)
        {
            content1.style.display = "none";
            content2.style.display = "block";
            content3.style.display = "none";
            e.target.classList.remove("fa-plus");
            e.target.classList.add("fa-minus");
            cong1.classList.add("fa-plus");
            cong3.classList.add("fa-plus");
        }
        else{
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "none";
            e.target.classList.add("fa-plus");
            e.target.classList.remove("fa-minus");
            cong1.classList.add("fa-plus");
            cong3.classList.add("fa-plus");

        }
        
    }

    var dem3 = 0;
    cong3.onclick = function(e){   
        dem3++;  
        if(dem3%2!=0)
        {
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "block";
            e.target.classList.remove("fa-plus");
            e.target.classList.add("fa-minus");            
            cong2.classList.add("fa-plus");
            cong1.classList.add("fa-plus");

        }
        else{
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "none";
            e.target.classList.add("fa-plus");
            e.target.classList.remove("fa-minus");
            cong2.classList.add("fa-plus");
            cong1.classList.add("fa-plus");

        }       
        
        
    }
}