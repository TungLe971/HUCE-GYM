// doi bang
var tableState = 1; // Bắt đầu với bảng đầu tiên
document.querySelector('.hoivien__search-btn').addEventListener('click', function() {
    if(tableState == 1) {
      document.querySelector('.hoivien__table-view').style.display = 'none';
      document.querySelector('.hoivien__table-health-view').style.display = 'table';
      tableState = 2;
    } else {
      document.querySelector('.hoivien__table-health-view').style.display = 'none';
      document.querySelector('.hoivien__table-view').style.display = 'table';
      tableState = 1;
    }
});
// tim kiem hoi vien
const hoivien_search_btn = document.querySelector('.hoivien__search-btn');
  hoivien_search_btn.addEventListener('click', function() {
  hoivien_search_btn.classList.toggle('active');
});
