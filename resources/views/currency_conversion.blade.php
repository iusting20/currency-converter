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
        <div class="container">
            <div class="card">
                
                <div class="card-header">
                    <h1 style="font-family: 'Lobster', cursive; text-align: center;"> Currency Converter </h1>
                </div>

                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="convert-amount">Convert Amount</label>
                                    <input type="float" class="form-control" id="convert-amount" placeholder="enter amount...">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="convert-from"> Convert from: </label>
                                    <select multiple class="form-control" id="convert-from">
                                        <option> GBP </option>
                                        <option> USD </option>
                                        <option> EUR </option>
                                        <option> RON </option>
                                        <option> BBD </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="convert-to"> Convert to: </label>
                                    <select multiple class="form-control" id="convert-to">
                                        <option> GBP </option>
                                        <option> USD </option>
                                        <option> EUR </option>
                                        <option> RON </option>
                                        <option> BBD </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br />

                        <div class="row">
                            <div class="col" style="text-align: center;">
                                <div class="alert alert-warning" role="alert" style="text-align: center; opacity: 0; transition: 1s; font-size: 2em; height: 0px;" id="display-box">
                                    —
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" style="text-align: center;">
                                <button type="button" class="btn btn-success" id="submit-button" onclick="makeConversion()">Submit</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>


        <!-- jQuery + Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="{{ asset('js/currency.js') }}"></script>
    </body>
</html>
