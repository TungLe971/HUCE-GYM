{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.snhv__table_row--hienthi');
 
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
        var method = "POST";
             
        // Chỉ định các tham số để gửi dữ liệu
       
        
        var snhvUpdate = $('.js-sua');
        snhvUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cellid_hv = cells[0].innerHTML;
            var cellname_hv = cells[1].innerHTML;
            var celldiem_tich_luy = cells[2].innerHTML;
            var celllngay_sinh = cells[3].innerHTML;
            var cellid_gift = cells[4].innerHTML;
            var celltrang_thai = cells[5].innerHTML;
    
            var snhvid_hv = "snhvid_hv=" + cellid_hv;
            var snhvname_hv = "snhvname_hv=" + cellname_hv;
            var snhvdiem_tich_luy = "snhvdiem_tich_luy=" + celldiem_tich_luy;
            var snhvngay_sinh = "snhvlngay_sinh=" + celllngay_sinh;
            var snhvid_gift = "snhvid_gift=" + cellid_gift;
            var snhvtrang_thai = "snhvtrang_thai=" + celltrang_thai;
       
          url = "/da_web_nc/controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_update.php";
          if(confirm("Bạn có chắc muốn sửa ID "+cellid_hv+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(snhvid_hv+"&"+snhvname_hv+"&"+snhvdiem_tich_luy+"&"+snhvngay_sinh+"&"+snhvid_gift+"&"+snhvtrang_thai);
          window.location.href = "/da_web_nc/view/views_su_kien/sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php?page=1";
          location.reload();
          }
          }
        }
      }
    }
    }
    }
    