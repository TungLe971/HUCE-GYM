{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var inputGoiTap = $(".the_table-add_input22");
    var inputSoLuong = $(".the_table-add_input222");
    var inputThanhTien = $(".the_table-add_input2222");

    console.log(inputGoiTap);
    function getValue(){
        console.log(inputGoiTap.value);
        
    }
    function getValue1(){
        console.log(inputSoLuong.value);
        thanhtien = Number(inputGoiTap.value) * Number(inputSoLuong.value);
            
        inputThanhTien.value = thanhtien;
    }

}