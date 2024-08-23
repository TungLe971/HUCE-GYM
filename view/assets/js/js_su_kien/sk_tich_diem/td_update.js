{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.td__table_row--hienthi');
 
    // Biến lưu trữ trạng thái hiện tại của bảng
    var currentRow = null;
    
    // Đặt sự kiện click cho mỗi hàng
    for (var i = 0; i < rows.length; i++) {
      rows[i].onclick = function() {
        // Kiểm tra xem một hàng khác đã được chọn trước đó hay chưa
        if (currentRow != null) {
          // Nếu có, đặt lại màu nền của hàng đó
          currentRow.style.backgroundColor = "";
        }
        // Lấy giá trị của các ô trong hàng được kích hoạt
        var cells = this.getElementsByTagName("td");
    
        currentRow = this;
        this.style.backgroundColor = "#549dd4";
    
        // Tạo đối tượng XMLHttpRequest
        var xhttp = new XMLHttpRequest();
    
        // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Dữ liệu đã được gửi thành công!");
          }
        };
    
        // Chỉ định URL và phương thức HTTP
        var method = "POST";
             
        // Chỉ định các tham số để gửi dữ liệu
       
        
        var tdUpdate = $('.js-sua');
        tdUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cellid_gift = cells[0].innerHTML;
            var cellname = cells[1].innerHTML;
            var celldiem = cells[2].innerHTML;
            var celltime_start = cells[3].innerHTML;
            var cellso_luong = cells[4].innerHTML;
    
            var id_gift = "id_gift=" + cellid_gift;
            var name = "name=" + cellname;
            var diem = "diem=" + celldiem;  
            var time_start = "time_start=" + celltime_start;
            var so_luong = "so_luong=" + cellso_luong;
       
          url = "/da_web_nc/controller/controller_su_kien/sk_tich_diem/td_update.php";
          if(confirm("Bạn có chắc muốn sửa ID "+cellid_gift+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(id_gift+"&"+name+"&"+diem+"&"+time_start+"&"+so_luong);
          // window.location.href = "/da_web_nc/view/views_su_kien/sk_tich_diem/sk_tich_diem.php";

          }
          }
        }
      }
    }
    }
    }
    