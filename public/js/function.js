$(document).on('submit', '.formHubungiKami', function (e) {
    e.preventDefault();

    $.ajax({
        type: "post",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: "json",
        beforeSend: function() {
            $('.btnHubungikami').prop('disabled', true);
            $('.btnHubungikami').html('<i class="fa fa-spin fa-spinner"></i> Processing');
        },
        complete: function() {
            $('.btnHubungikami').prop('disabled', false);
            $('.btnHubungikami').html('Kirim');
        },
        success: function(response) {
            if (response.error){
                if (response.error.input_name){
                    $('#input_name').addClass('is-invalid');
                    $('.errorInputName').html(response.error.input_name);
                }
                else
                {
                    $('#input_name').removeClass('is-invalid');
                    $('.errorInputName').html('');
                }

                if (response.error.input_mail){
                    $('#input_mail').addClass('is-invalid');
                    $('.errorInputMail').html(response.error.input_mail);
                }
                else
                {
                    $('#input_mail').removeClass('is-invalid');
                    $('.errorInputMail').html('');
                }

                if (response.error.input_msg){
                    $('#input_msg').addClass('is-invalid');
                    $('.errorInputMsg').html(response.error.input_msg);
                }
                else
                {
                    $('#input_msg').removeClass('is-invalid');
                    $('.errorInputMsg').html('');
                }
            }
            else
            {
                Swal.fire(
                    'Pemberitahuan',
                    response.success.data,
                    'success',
                ).then(function() {
                    $('#input_name').val('');
                    $('#input_mail').val('');
                    $('#input_msg').val('');
                    window.location = response.success.link;
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
    });
});