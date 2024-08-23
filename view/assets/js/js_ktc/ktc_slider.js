{
    const $$ = document.querySelectorAll.bind(document);
    const $ = document.querySelector.bind(document);
    var ktc_sliders = $$(".ktc__div--slider");
    var index = 0;
    nextSlider();

    function nextSliderRight(){
        var ktc_sliders_right = $(".ktc__div--slider--right--arrow");
        ktc_sliders_right.onclick = function(e){      
            for (var i=0; i<ktc_sliders.length;i++)
            {
                ktc_sliders[i].style.display = "none";         
            }
            index++;
            if(index>ktc_sliders.length){
                index =1;
            }
            ktc_sliders[index-1].style.display = "block";

        }
    }

    function nextSliderLeft(){
        var ktc_sliders_left = $(".ktc__div--slider--left--arrow");
        ktc_sliders_left.onclick = function(e){      
            for (var i=0; i<ktc_sliders.length;i++)
            {
                ktc_sliders[i].style.display = "none";         
            }
            index--;
            if(index<=0){
                index =ktc_sliders.length;
            }
            ktc_sliders[index-1].style.display = "block";

        }
    }

    function nextSlider(){
        nextSliderRight();
        nextSliderLeft();
        // sẽ cho thằng trước ẩn đi để hiện thằng sau
        for (var i=0; i<ktc_sliders.length;i++)
        {
            ktc_sliders[i].style.display = "none";
        }
        // //  hiện thằng sau
        index++;
        if(index>ktc_sliders.length){
            index =1;
        }
        ktc_sliders[index-1].style.display = "block";
        // đệ quy lặp lại
        setTimeout(nextSlider, 3000);
    }


    }   