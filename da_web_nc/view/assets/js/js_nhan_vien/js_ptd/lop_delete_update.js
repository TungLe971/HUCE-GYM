{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.lop_table_row-hienthi');
    
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
        var url = "/da_web_nc/controller/controller_nhan_vien/phuong_thuc_day/lop_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var lopID = "lopID=" + cellID;
       
        // Bắt sự kiện xóa
        var lopXoa = $('.js-xoa');
        lopXoa.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(lopID);
          // Refresh lại trang
          // window.location.href = "/da_web_nc/view/views_nhan_vien/nv_ptd/lop.php";
        }
        }
        var lopUpdate = $('.js-sua');
        lopUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cell_types_room = cells[1].innerHTML;
            var cell_ten_lop = cells[2].innerHTML;
            var cell_packages = cells[3].innerHTML;
            var cell_thoi_luong = cells[4].innerHTML;
            var cell_ngay_hoat_dong = cells[5].innerHTML;
            var cell_so_luong_hv = cells[6].innerHTML;
            var cell_name = cells[7].innerHTML;
            var cell_id_nv = cells[8].innerHTML;
            var cell_doanh_thu = cells[9].innerHTML;
            
            var lop_types_room = "types_room=" + cell_types_room;
            var lop_ten_lop = "ten_lop=" + cell_ten_lop;
            var lop_packages = "packages=" + cell_packages;
            var lop_thoi_luong = "thoi_luong=" + cell_thoi_luong;
            var lop_ngay_hoat_dong = "ngay_hoat_dong=" + cell_ngay_hoat_dong;
            var lop_so_luong_hv = "so_luong_hv=" + cell_so_luong_hv;
            var lop_name = "name=" + cell_name;
            var lop_id_nv = "id_nv=" + cell_id_nv;
            var lop_doanh_thu = "doanh_thu=" + cell_doanh_thu;

       
          url = "/da_web_nc/controller/controller_nhan_vien/phuong_thuc_day/lop_update.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(lopID+"&"+lop_types_room+"&"+lop_ten_lop+"&"+lop_packages+"&"+lop_thoi_luong+"&"+lop_ngay_hoat_dong+"&"+lop_so_luong_hv+"&"+lop_name+"&"+lop_id_nv+"&"+lop_doanh_thu);
          // window.location.href = "/da_web_nc/view/views_nhan_vien/nv_ptd/lop.php";
          }
          }
        }
      }
    }
    }
    }
    