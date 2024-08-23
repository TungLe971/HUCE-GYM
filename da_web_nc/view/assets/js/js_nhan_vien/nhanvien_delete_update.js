{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.nhanvien__table-view--data');
    
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
        this.style.backgroundColor = "#6996e3";
    
        // Tạo đối tượng XMLHttpRequest
        var xhttp = new XMLHttpRequest();
    
        // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Dữ liệu đã được gửi thành công!");
          }
        };
    
        // Chỉ định URL và phương thức HTTP
        var url = "../controller/controller_nhan_vien/NhanVienDelete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var params = "nhanvienID=" + cellID;
       
        // Bắt sự kiện xóa
        var nhanvien_Del = $('.js-del');
        nhanvien_Del.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(params);
          // Refresh lại trang
          location.reload(true)
        }
        }
        var nhanvien_Update = $('.js-update');
        nhanvien_Update.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cell_ten = cells[1].innerHTML;
            var cell_gioi_tinh = cells[2].innerHTML;
            var cell_tuoi = cells[3].innerHTML;
            var cell_sdt = cells[4].innerHTML;
            var cell_cmnd = cells[5].innerHTML;
            var cell_bien_so_xe = cells[6].innerHTML;
            var cell_dia_chi = cells[7].innerHTML;
            var cell_chuc_vu = cells[8].innerHTML;
            var cell_gmail = cells[9].innerHTML;

            
    
            var nhanvien_ten = "nhanvien_ten=" + cell_ten;
            var nhanvien_gioi_tinh = "nhanvien_gioi_tinh=" + cell_gioi_tinh;
            var nhanvien_tuoi = "nhanvien_tuoi=" + cell_tuoi;
            var nhanvien_sdt = "nhanvien_sdt=" + cell_sdt;
            var nhanvien_cmnd = "nhanvien_cmnd=" + cell_cmnd;
            var nhanvien_bien_so_xe = "nhanvien_bien_so_xe=" + cell_bien_so_xe;
            var nhanvien_dia_chi = "nhanvien_dia_chi=" + cell_dia_chi;
            var nhanvien_chuc_vu = "nhanvien_chuc_vu=" + cell_chuc_vu;
            var nhanvien_gmail = "nhanvien_gmail=" + cell_gmail;

            

          url = "../controller/controller_nhan_vien/NhanVienUpdate.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(params+"&"+nhanvien_ten+"&"+nhanvien_gioi_tinh+"&"+nhanvien_tuoi
          +"&"+nhanvien_sdt+"&"+nhanvien_cmnd+"&"+nhanvien_bien_so_xe+"&"+nhanvien_dia_chi+"&"+nhanvien_chuc_vu
          +"&"+nhanvien_gmail);
          }
          }
        }
      }
    }
    }
}
    