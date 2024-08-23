{const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
 
// Lấy tất cả các hàng trong bảng
var rows = $$('.nuoc__table_row--hienthi');

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
    var url = "../controller/controller_nuoc_va_tp/nuoc_delete.php";
    var method = "POST";

    // Chỉ định các tham số để gửi dữ liệu
    var params = "nuocID=" + cellID;
   
    // Bắt sự kiện xóa
    var nuocXoa = $('.js-xoa');
    nuocXoa.onclick = function(e){
    if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
      // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
      xhttp.open(method, url, true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(params);
      // Refresh lại trang
      //location.reload(true)
      window.location="/da_web_nc/view/nuoc.php";
    }
    }
    var nuocUpdate = $('.js-sua');
    nuocUpdate.onclick = function(e){
    currentRow.setAttribute('contenteditable','');
    alert('Mời bạn tiến hành chỉnh sửa!');
    currentRow.onkeyup=function(e){
      if(e.which===27){
        this.setAttribute('contenteditable',' ')
        var cellTen = cells[1].innerHTML;
        var cellLoai = cells[2].innerHTML;
        var cellGiaBan = cells[3].innerHTML;
        var cellGiaNhap = cells[4].innerHTML;
        var cellSoLuongNhap = cells[5].innerHTML;
        var cellSoLuongTon = cells[6].innerHTML;
        var cellNhaCungCap = cells[7].innerHTML;
        var cellNgayNhap = cells[8].innerHTML;
        var cellNgayHetHan = cells[9].innerHTML;
        var cellTongTien = cells[10].innerHTML;

        var nuocTen = "nuocTen=" + cellTen;
        var nuocLoai = "nuocLoai=" + cellLoai;
        var nuocGiaBan = "nuocGiaBan=" + cellGiaBan;
        var nuocGiaNhap = "nuocGiaNhap=" + cellGiaNhap;
        var nuocSoLuongNhap = "nuocSoLuongNhap=" + cellSoLuongNhap;
        var nuocSoLuongTon = "nuocSoLuongTon=" + cellSoLuongTon;
        var nuocNhaCungCap = "nuocNhaCungCap=" + cellNhaCungCap;
        var nuocNgayNhap = "nuocNgayNhap=" + cellNgayNhap;
        var nuocNgayHetHan = "nuocNgayHetHan=" + cellNgayHetHan;
        var nuocTongTien = "nuocTongTien=" + cellTongTien;
   
      url = "../controller/controller_nuoc_va_tp/nuoc_update.php" 
      if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
      //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
      xhttp.open(method, url, true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(params+"&"+nuocTen+"&"+nuocLoai+"&"+nuocGiaBan+"&"+nuocGiaNhap
      +"&"+nuocSoLuongNhap+"&"+nuocSoLuongTon+"&"+nuocNhaCungCap
      +"&"+nuocNgayNhap+"&"+nuocNgayHetHan+"&"+nuocTongTien);
     
      }
      }
    }
  }
}
}
}
