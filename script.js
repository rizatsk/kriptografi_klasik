$(document).ready(function() {
    $('#alert-input').hide();
    setTimeout(function(){ 
        $('#preloader').hide(); 
    }, 1000);
});

function typeEksekusi(btnType,type){
    const btnRemoveClass = type == 'enkripsi' ? '#btnTypeDekripsi' : '#btnTypeEnkripsi';
    $(btnRemoveClass).removeClass('btn-activerz');
    $(btnType).addClass('btn-activerz');
    $('#typeInput').val(type);
    $('.btn-eksekusi').html(`${type}`);
    $('#labelInput').html(`Masukan yang ingin di ${type}`);
    $('#labelReturn').html(`Hasil ${type}`);
    $('#input_user').val('');
    $('#return_enkripsiOrDekripsi').val('');
}

$('#btnTypeDekripsi').click(function() {
    typeEksekusi('#btnTypeDekripsi', 'dekripsi');
});

$('#btnTypeEnkripsi').click(function() {
    typeEksekusi('#btnTypeEnkripsi', 'enkripsi');
});

$('#btn-eksekusi').click(function(e) {
    e.preventDefault();
    $('#return_enkripsiOrDekripsi').val('');
    $('#preloader').show();
    if ($('#input_user').val() == '') {
        $('#preloader').hide();
        $('#alert-input').show();
        $('#body-alert').html(`Mohon untuk mengisi ${$('#typeInput').val()}`);
        return false;
    };
    $.ajax({
        url: 'function.php',
        type: 'POST',
        dataType: 'JSON',
        data: $('#form-input-user').serialize(),
        success: function(result) {
            $('#preloader').hide();
            $('#alert-input').hide();
            $('#input-user').hide();
            $('#return_enkripsiOrDekripsi').val(`${result.data}`);
        }
    })
});

$('#buttonCopy').click(function(){
    $('#return_enkripsiOrDekripsi').prop('disabled', false);
    $('#return_enkripsiOrDekripsi').select();
    document.execCommand("copy");
    $('#return_enkripsiOrDekripsi').prop('disabled', true);
    $('#copied').html('Copied');
    setTimeout(function(){
        $('#copied').html('Copy');
    },2000)
});