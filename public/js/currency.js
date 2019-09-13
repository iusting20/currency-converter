function makeConversion()  {

    if( $('#convert-amount').val() == ""  ||  $('#convert-from').val()[0] == undefined   ||  $('#convert-to').val()[0] == undefined  ||  $('#conversion-site').val()[0] == undefined)    {
        alert( "Fill in all fields, please !" )
    }
    else if( $('#convert-from').val()[0] == $('#convert-to').val()[0] )  {
        alert( "Initial and target currencies cannot be the same !" )
    }
    else   {
        $.ajax({
            url: "https://justinsrv.xyz/_DEV_SPACE/currency-converter/public/api/currency?from=" + $('#convert-from').val()[0] + "&to=" + $('#convert-to').val()[0] + "&amount=" + $('#convert-amount').val() + '&site=' + $('#conversion-site').val()[0],
            method : 'GET'
        })
        .done( function( data ) {
            $('#display-box').css('height', '75px')
            $('#display-box').css('opacity', '1')

            if( $('#conversion-site').val()[0] == "floatrates"  ||  null)
                $('#display-box').text( $('#convert-amount').val() + ' ' + $('#convert-from').val()[0] + ' = ' + data + ' ' + $('#convert-to').val()[0])
            else if ($('#conversion-site').val()[0] == "fxexchangerate")
                $('#display-box').text( data )
        })
    }
}


$( document ).ready(function() {
    $('#convert-amount').keypress(function (event) {
        if (event.keyCode === 10 || event.keyCode === 13) {
            event.preventDefault();
            $('#submit-button').click()
        }
    });


    $('#conversion-site').change( function() {
        if( $('#conversion-site').children("option:selected").val() == 'floatrates' )   {
            $('#convert-amount').prop("disabled", false)
        }
        else if( $('#conversion-site').children("option:selected").val() == 'fxexchangerate' )  {
            $('#convert-amount').val('1')
            $('#convert-amount').prop("disabled", true)
        }
    } )
})
