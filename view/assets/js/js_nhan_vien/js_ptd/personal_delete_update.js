{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.personal_table_row-hienthi');
    
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
        var url = "/da_web_nc/controller/controller_nhan_vien/phuong_thuc_day/personal_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var personalID = "personalID=" + cellID;
       
        // Bắt sự kiện xóa
        var personalXoa = $('.js-xoa');
        personalXoa.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(personalID);
          // Refresh lại trang
          // window.location.href = "/da_web_nc/view/views_nhan_vien/nv_ptd/personal.php";
        }
      }
      
        var personalUpdate = $('.js-sua');
        personalUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cell_name_hv = cells[1].innerHTML;
            var cell_id_hv = cells[2].innerHTML;
            var cell_thoi_luong = cells[3].innerHTML;
            var cell_so_buoi = cells[4].innerHTML;
            var cell_id_nv = cells[6].innerHTML;
            var cell_doanh_thu = cells[7].innerHTML;
    
            var personal_name_hv = "personal_name_hv=" + cell_name_hv;
            var personal_id_hv = "personal_id_hv=" + cell_id_hv;
            var personal_thoi_luong = "personal_thoi_luong=" + cell_thoi_luong;
            var personal_so_buoi = "personal_so_buoi=" + cell_so_buoi;
            var personal_id_nv = "personal_id_nv=" + cell_id_nv;
            var personal_doanh_thu = "personal_doanh_thu=" + cell_doanh_thu;
       
          url = "/da_web_nc/controller/controller_nhan_vien/phuong_thuc_day/personal_update.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(personalID+"&"+personal_name_hv+"&"+personal_id_hv+"&"+personal_thoi_luong+"&"+personal_so_buoi+"&"+personal_id_nv+"&"+personal_doanh_thu);
          // window.location.href = "/da_web_nc/view/views_nhan_vien/nv_ptd/personal.php";
          }
          }
        }
      }
    }
    }
    }
    