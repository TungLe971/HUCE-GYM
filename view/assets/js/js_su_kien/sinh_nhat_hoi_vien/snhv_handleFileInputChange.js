{
    const chooseFile = document.querySelector(".snhv__div__div_quatang__form--chooseimg");
    const showImg = document.querySelector(".snhv__div__div_quatang__form--showimg");

    function handleFileInputChange(){
        // Kiếm tra file không rỗng và có ít nhất một tệp
        if(chooseFile.files && chooseFile.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e){
                showImg.src = e.target.result;
                console.log(1);
            };
            reader.readAsDataURL(chooseFile.files[0])
        }
        
    }
}