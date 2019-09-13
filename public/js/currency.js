function makeConversion()  {

    if( $('#convert-amount').val() == ""  ||  $('#convert-from').val()[0] == undefined   ||  $('#convert-to').val()[0] == undefined)    {
        alert( "Fill in all fields, please !" )
    }
    else if( $('#convert-from').val()[0] == $('#convert-to').val()[0] )  {
        alert( "Initial and target currencies cannot be the same !" )
    }
    else   {
        $.ajax({
            url: "https://justinsrv.xyz/_DEV_SPACE/currency-converter/public/api/currency?from=" + $('#convert-from').val()[0] + "&to=" + $('#convert-to').val()[0] + "&amount=" + $('#convert-amount').val(),
            method : 'GET'
        })
        .done( function( data ) {
            $('#display-box').css('height', '75px')
            $('#display-box').css('opacity', '1')
            $('#display-box').text( $('#convert-amount').val() + ' ' + $('#convert-from').val()[0] + ' = ' + data + ' ' + $('#convert-to').val()[0])
        })
    }
}

$('#convert-amount').keypress(function (event) {
    if (event.keyCode === 10 || event.keyCode === 13) {
        event.preventDefault();
        $('#submit-button').click()
    }
});