{
    const $ = document.querySelector.bind(document);
    
    const img = $(".view_gift__modal__div--popupUpdate--loadAnh");
    const theInput = $(".view_gift__table--add_input-file");

    theInput.addEventListener('change', function(e)
    {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = function(e){
            img.src = e.target.result;
        }
        reader.readAsDataURL(file);
    })
}