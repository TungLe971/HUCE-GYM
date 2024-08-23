{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var inputGoiTap = $(".lop_table-add_input22");
    var inputSiSoLop = $(".lop_table-add_input222");
    var inputThanhTien = $(".lop_table-add_input2222");
    
    console.log(inputGoiTap);
    function getValue(){
        console.log(inputGoiTap.value);
    }

    function getValue1(){
        console.log(inputSiSoLop.value);
        thanhtien = Number(inputGoiTap.value) * Number(inputSiSoLop.value);
            
        inputThanhTien.value = thanhtien;
    }

}
