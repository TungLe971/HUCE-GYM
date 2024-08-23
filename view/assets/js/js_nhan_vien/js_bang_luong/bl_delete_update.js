{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.bl__table_row--hienthi');
    
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
        var cellID = cells[0].innerHTML;
    
        currentRow = this;
        this.style.backgroundColor = "yellow";
    
        // Tạo đối tượng XMLHttpRequest
        var xhttp = new XMLHttpRequest();
    
        // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Dữ liệu đã được gửi thành công!");
          }
        };
    
        // Chỉ định URL và phương thức HTTP
        var url = "../controller/controller_nhan_vien/bang_luong/bl_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var blID = "blID=" + cellID;
       
        // Bắt sự kiện xóa
        var blXoa = $('.js-xoa');
        blXoa.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(blID);
          // Refresh lại trang
          location.reload(true)
        }
        }
        var blUpdate = $('.js-sua');
        blUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var celltime_start = cells[2].innerHTML;
            var cellso_cong = cells[3].innerHTML;
            var cellluong_tren_cong = cells[4].innerHTML;
            var cellluong = cells[5].innerHTML;
            var celltrang_thai = cells[6].innerHTML;
  
            var bltime_start = "bltime_start=" + celltime_start;
            var blso_cong = "blso_cong=" + cellso_cong;
            var blluong_tren_cong = "blluong_tren_cong=" + cellluong_tren_cong;
            var blluong = "blluong=" + cellluong;
            var bltrang_thai = "bltrang_thai=" + celltrang_thai;
       
          url = "../controller/controller_nhan_vien/bang_luong/bl_update.php";
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(blID+"&"+bltime_start+"&"+blso_cong+"&"+blluong_tren_cong+"&"+blluong+"&"+bltrang_thai);
          location.reload(true)
          }
          }
        }
      }
    }
    }
    }
    