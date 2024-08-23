{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.dct__table_row--hienthi');
    
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
        var url = "../controller/controller_csvc/dct_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var dctID = "dctID=" + cellID;
       
        // Bắt sự kiện xóa
        var dctXoa = $('.js-xoa');
        dctXoa.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(dctID);
          // Refresh lại trang
          location.reload(true)
        }
        }
        var dctUpdate = $('.js-sua');
        dctUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cellTen = cells[1].innerHTML;
            var cellSoLuong = cells[2].innerHTML;
            var cellNhaCungCap = cells[3].innerHTML;
            var cellNgayNhap = cells[4].innerHTML;
            var cellGiaNhap = cells[5].innerHTML;
            var cellBaoTri = cells[6].innerHTML;
            var cellBaoHanh = cells[7].innerHTML;
            var cellChiPhiBaoTri = cells[8].innerHTML;
            var cellGhiChu = cells[9].innerHTML;
    
            var dctTen = "dctTen=" + cellTen;
            var dctSoLuong = "dctSoLuong=" + cellSoLuong;
            var dctNhaCungCap = "dctNhaCungCap=" + cellNhaCungCap;
            var dctNgayNhap = "dctNgayNhap=" + cellNgayNhap;
            var dctGiaNhap = "dctGiaNhap=" + cellGiaNhap;
            var dctBaoTri = "dctBaoTri=" + cellBaoTri;
            var dctBaoHanh = "dctBaoHanh=" + cellBaoHanh;
            var dctChiPhiBaoTri = "dctChiPhiBaoTri=" + cellChiPhiBaoTri;
            var dctGhiChu = "dctGhiChu=" + cellGhiChu;
       
          url = "../controller/controller_csvc/dct_update.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(dctID+"&"+dctTen+"&"+dctSoLuong+"&"+dctNhaCungCap+"&"+dctNgayNhap+"&"+dctGiaNhap+"&"+dctBaoTri+"&"+dctBaoHanh+"&"+dctChiPhiBaoTri
          +"&"+dctGhiChu);
          location.reload(true)
          }
          }
        }
      }
    }
    }
    }
    