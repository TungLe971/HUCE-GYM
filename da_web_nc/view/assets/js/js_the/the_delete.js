  {const $ = document.querySelector.bind(document);
  const $$ = document.querySelectorAll.bind(document);

  // Lấy tất cả các hàng trong bảng
  var rows = $$('.the_table_row-hienthi');

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
      var xhthe = new XMLHttpRequest();

      // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
      xhthe.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log("Dữ liệu đã được gửi thành công!");
          // Xóa hàng vừa chọn khỏi bảng dữ liệu
          currentRow.remove();
        }
      };

      // Chỉ định URL và phương thức HTTP
      var url = "/da_web_nc/controller/controller_the/the_delete.php";
      var method = "POST";

      // Chỉ định các tham số để gửi dữ liệu
      var card_id = "card_id=" + cellID;

      // Bắt sự kiện xóa
      var theXoa = $('.js-xoa');
      theXoa.onclick = function(e){
        e.preventDefault();
      //e.stopPropagation(); //Ngừng sự kiện click lan tỏa đến các thẻ cha
        if(confirm("Bạn có chắc muốn xóa Card ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhthe.open(method, url, true);
          xhthe.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhthe.send(card_id);
          // window.location.href="http://localhost/da_web_nc/view/views_the/the.php?";
          // location.reload();


        }
      } 

      var hien_thi = "hien_thi=" + cellID;
      var theChiTiet = $('.js-chi_tiet');
      
      theChiTiet.onclick = function(e){
      window.location.href="http://localhost/da_web_nc/view/views_the/the.php?"+hien_thi;
        
      }
    }
  }
  }