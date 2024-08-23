{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    
    var inputThoiLuong = $(".personal_table-add_input22");
    var inputDoanhThu = $(".personal_table-add_input222");
    
    function calculateRevenue() {
      var thoi_luong = inputThoiLuong.value;
      var doanh_thu = thoi_luong * 50000;
      inputDoanhThu.value = doanh_thu;
    }
    
    inputThoiLuong.addEventListener("input", calculateRevenue);
    
}
