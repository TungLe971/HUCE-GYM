const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const suaButton = $('.js-sua');
suaButton.addEventListener('click', suaCard);

function suaCard() {
  // Hiển thị thông báo xác nhận
  const confirmed = confirm("Bạn chắc chắn muốn sửa không?");
  if (!confirmed) {
    return; // Không thực hiện sửa nếu người dùng không xác nhận
  }

  const cardId = $('[name="input_the_card_id"]').value;
  const idHV = $('[name="input_the_id_hv"]').value;
  const idNV = $('[name="input_the_id_nv"]').value;
  const typesRoom=[];
  for(var i=1;i<=6;i++)
  { 
    typesRoom.push($('.vehicle'+i));

  }

  const packages = $('[name="input1"]').value;
  const quantity = $('[name="input2"]').value;
  const timeStart = $('[name="input3"]').value;
  const timeEnd = $('[name="input4"]').value;
  const totalMoney = $('[name="input5"]').value;
  let status = $('[name="input6"]').value;

  // Kiểm tra giá trị của trường status
  if (status === 'Không hoạt động') {
    status = 0;
  } else if (status === 'Đang hoạt động') {
    status = 1;
  }

  const data = new FormData();
  data.append('card_id', cardId);
  data.append('id_hv', idHV);
  data.append('id_nv', idNV);
  for (let type of typesRoom) {
    if(type.checked){
        data.append('types_room', type.value);
    }
  }
  data.append('packages', packages);
  data.append('quantity', quantity);
  data.append('time_start', timeStart);
  data.append('time_end', timeEnd);
  data.append('total_money', totalMoney);
  data.append('status', status);

  // Gửi request AJAX để cập nhật thông tin người dùng
  const xhthe = new XMLHttpRequest();
  xhthe.open('POST', '/da_web_nc/controller/controller_the/the_sua.php', true);
  xhthe.onreadystatechange = function () {
    if (xhthe.readyState === XMLHttpRequest.DONE && xhthe.status === 200) {
      // Xử lý phản hồi từ server
      console.log(xhthe.responseText);
    }
  };
  xhthe.send(data);
  window.location.href="http://localhost/da_web_nc/view/views_the/the.php?";

}
