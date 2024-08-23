{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.hoivien__table-view--data');
    
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
        var url = "../controller/controller_hoi_vien/hoivien_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var params = "hoivienID=" + cellID;
       
        // Bắt sự kiện xóa
        var hoivien_Del = $('.js-del');
        hoivien_Del.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(params);
          // Refresh lại trang
          location.reload(true)
        }
        }
        var hoivien_Update = $('.js-ud');
        hoivien_Update.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if (cells.length === 10){
            if(e.which===27){
              this.setAttribute('contenteditable',' ')
              var cell_ten = cells[1].innerHTML;
              var cell_ngay_sinh = cells[2].innerHTML;
              var cell_gioi_tinh = cells[3].innerHTML;
              var cell_tuoi = cells[4].innerHTML;
              var cell_sdt = cells[5].innerHTML;
              var cell_email = cells[6].innerHTML;
              var cell_cmnd = cells[7].innerHTML;
              var cell_bien_xe = cells[8].innerHTML;
              var cell_diem_tich_luy = cells[9].innerHTML;
        
              var hoivien_ten = "hoivien_ten=" + cell_ten;
              var hoivien_ngay_sinh = "hoivien_ngay_sinh=" + cell_ngay_sinh;
              var hoivien_gioi_tinh = "hoivien_gioi_tinh=" + cell_gioi_tinh;
              var hoivien_tuoi = "hoivien_tuoi=" + cell_tuoi;
              var hoivien_sdt = "hoivien_sdt=" + cell_sdt;
              var hoivien_email = "hoivien_email=" + cell_email;
              var hoivien_cmnd = "hoivien_cmnd=" + cell_cmnd;
              var hoivien_bien_xe = "hoivien_bien_xe=" + cell_bien_xe;
              var hoivien_diem_tich_luy = "hoivien_diem_tich_luy=" + cell_diem_tich_luy;
            
            url = "../controller/controller_hoi_vien/hoivien_update.php" 
            if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
            //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
            xhttp.open(method, url, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(params+"&"+hoivien_ten+"&"+hoivien_ngay_sinh+"&"+hoivien_gioi_tinh+"&"+hoivien_tuoi
            +"&"+hoivien_sdt+"&"+hoivien_email+"&"+hoivien_cmnd+"&"+hoivien_bien_xe
            +"&"+hoivien_diem_tich_luy);
            }
            }
          }
          else if (cells.length === 6){
            if(e.which===27){
              this.setAttribute('contenteditable',' ')
              var cell_ten = cells[1].innerHTML;
              var cell_chieu_cao = cells[2].innerHTML;
              var cell_can_nang = cells[3].innerHTML;
              var cell_phan_tram_mo = cells[4].innerHTML;
              var cell_ngay_cap_nhat = cells[5].innerHTML;

      
              var hoivien_ten = "hoivien_ten=" + cell_ten;
              var hoivien_chieu_cao = "hoivien_chieu_cao=" + cell_chieu_cao;
              var hoivien_can_nang = "hoivien_can_nang=" + cell_can_nang;
              var hoivien_phan_tram_mo = "hoivien_phan_tram_mo=" + cell_phan_tram_mo;
              var hoivien_ngay_cap_nhat = "hoivien_ngay_cap_nhat=" + cell_ngay_cap_nhat;
  
            url = "../controller/controller_hoi_vien/hoivien_update.php" 
            if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
            //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
            xhttp.open(method, url, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(params+"&"+hoivien_ten+"&"+hoivien_chieu_cao
            +"&"+hoivien_can_nang+"&"+hoivien_phan_tram_mo+"&"+hoivien_ngay_cap_nhat);
            }
            }
          }
        }
      }
    }
    }
}
    