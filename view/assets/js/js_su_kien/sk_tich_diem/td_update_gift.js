{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    var buttonSuaGift = $$(".button_sua_gift");
    for(const value of buttonSuaGift){
        value.onclick = function(e){
            const allowUpdateGift = $$(".td__div__input--gift");
            alert("Mời bạn tiến hành chỉnh sửa!");
            for(var i=0; i<allowUpdateGift.length;i++)
            {
                allowUpdateGift[i].removeAttribute("disabled");
            };
            value.onkeyup=function(e){
                console.log(e.which)
                if(e.which===27)
                {
                    const buttonSuaGiftName = $(".td__div__input--gift--name"+e.target.value);
                    const buttonSuaGiftDiem = $(".td__div__input--gift--diem"+e.target.value);
                    const buttonSuaGiftTimeStart = $(".td__div__input--gift--time_start"+e.target.value);
                    const buttonSuaGiftSoLuong = $(".td__div__input--gift--so_luong"+e.target.value);
                    var base_name_gift = buttonSuaGiftName.value;   
                    var base_diem_gift = buttonSuaGiftDiem.value;
                    var base_time_start_gift = buttonSuaGiftTimeStart.value;
                    var base_so_luong_gift = buttonSuaGiftSoLuong.value;
                    var base_id_gift = e.target.value;
                    
                    var id_gift = "id_gift="+base_id_gift;
                    var name_gift = "name="+base_name_gift;
                    var diem_gift = "diem="+base_diem_gift;
                    var time_start_gift = "diem="+base_time_start_gift;
                    var so_luong_gift = "so_luong="+base_so_luong_gift;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function(){
                        if(this.readyState==4 && this.status == 200){
                            console.log("Dữ liệu được gửi thành công!");
                        }
                    };
                
                    var method = "POST";
                    var url = "../../controller/controller_su_kien/sk_tich_diem/td_update.php";
                     
                    if(confirm("Bạn có chắc muốn sửa ID "+base_id_gift+" không?"))
                    {
                
                        xhttp.open(method, url, true);
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.send(id_gift+"&"+name_gift+"&"+diem_gift+"&"+time_start_gift+"&"+so_luong_gift);
                        window.location.href = "/da_web_nc/view/views_su_kien/sk_tich_diem/sk_tich_diem.php";
                
                    }
                    else{
                        for(var i=0; i<allowUpdateGift.length;i++)
                        {
                            allowUpdateGift[i].setAttribute("disabled");
                        };
                    }
                }


        }
        }
    } 
}