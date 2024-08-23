{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var rows = $$('.a');
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
      var cells = this.getElementsByTagName("th");
   
      
   
      currentRow = this;
      this.style.backgroundColor = "#f2f2f2";
  
      // Tạo đối tượng XMLHttpRequest
      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log("Dữ liệu đã được gửi thành công!");
        }
      };
  
      // Chỉ định URL và phương thức HTTP
      
  
      // Chỉ định các tham số để gửi dữ liệu
      
     

      var InfoUpdate = $('.js-update');
        InfoUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var method = "POST";
            var value = cells[0].innerHTML;
            var params = "value=" + value;
           url = "../../controller/controller_notice/InfoUpdate.php"; 
          if(confirm("Bạn có chắc muốn sửa ID "+value+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(params);
          window.location.href = "http://localhost/da_web_nc/view/views_ktc/dang_nhap.php";
          alert("Vui lòng đăng nhập lại");
          
          }
          location.reload(true);
          }
        }
      }

    }
}
}