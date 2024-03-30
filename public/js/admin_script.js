$('.toggle').on('click', function(){
    if($(this).val() == 1){
        $(this).val(0);
    }else{
        $(this).val(1);
    }
});

$('.image-input').on('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    
    reader.onload = function(e) {
        $('.preview-svg').hide();
        $('.preview-image').show();
        $('.previewImage').attr('src', e.target.result).show();
    };
    
    reader.readAsDataURL(file);
});