{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var inputSoCong = $(".bl__table--add_input22");
    var inputLuongTrenCong = $(".bl__table--add_input222");
    var inputLuong = $(".bl__table--add_input2222");

    console.log(inputSoCong);
    console.log(inputLuongTrenCong);

    console.log(inputLuong);

    function getValue(){
        console.log(inputSoCong.value);
        
    }
    function getValue1(){
        console.log(inputLuongTrenCong.value);
        const luong = Number(inputSoCong.value) * Number(inputLuongTrenCong.value);
            
        inputLuong.value = luong;
    }

}