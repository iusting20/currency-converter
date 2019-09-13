<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Currency Conversion</title>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CUSTOM FONT -->
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    </head>

    <body style="padding-top: 2em; background-color: #170321;">



        <!-- VUE APP MOUNTS HERE -->
        <div id="app"></div>

        


        <!-- jQuery + Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="{{ asset('js/currency.js') }}"></script>

        <!-- THIS IS HARDCODED (BECAUSE WE DON'T HAVE DOMAIN NAME FOR THIS APP  =>  src={{ mix('js/app.js') }} DOESN'T RETURN PROPER FILE -->
        <script src="https://justinsrv.xyz/_DEV_SPACE/currency-converter/public/js/app.js"></script>
    </body>
</html>
