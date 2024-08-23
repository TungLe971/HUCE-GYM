{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.tdd__table_row--hienthi');
    
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
        var url = "../controller/controller_csvc/tdd_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var tddID = "tddID=" + cellID;
       
        // Bắt sự kiện xóa
        var tddXoa = $('.js-xoa');
        tddXoa.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(tddID);
          // Refresh lại trang
          
        }
        }
        var tddUpdate = $('.js-sua');
        tddUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cell_so_tu = cells[1].innerHTML;
            var cell_loai_tu = cells[2].innerHTML;
            var cell_trang_thai = cells[3].innerHTML;
            var cell_id_hv = cells[5].innerHTML;
            var cell_time_start = cells[6].innerHTML;
            var cell_time_end = cells[7].innerHTML;
            var cell_ghi_chu = cells[8].innerHTML;
    
            var tdd_so_tu = "tdd_so_tu=" + cell_so_tu;
            var tdd_loai_tu = "tdd_loai_tu=" + cell_loai_tu;
            var tdd_trang_thai = "tdd_trang_thai=" + cell_trang_thai;
            var tdd_id_hv = "tdd_id_hv=" + cell_id_hv;
            var tdd_time_start = "tdd_time_start=" + cell_time_start;
            var tdd_time_end = "tdd_time_end=" + cell_time_end;
            var tdd_ghi_chu = "tdd_ghi_chu=" + cell_ghi_chu;
       
          url = "../controller/controller_csvc/tdd_update.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(tddID+"&"+tdd_so_tu+"&"+tdd_loai_tu+"&"+tdd_trang_thai+"&"+tdd_id_hv+"&"+tdd_time_start+"&"+tdd_time_end
          +"&"+tdd_ghi_chu);
          location.reload(true);
          }
          }
        }
      }
    }
    }
    }
    