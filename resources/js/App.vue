<template>
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
                                    <input type="number" class="form-control" id="convert-amount" placeholder="enter amount...">
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
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="convert-to"> Using Conversion Rate Site: </label>
                                    <select multiple class="form-control" id="conversion-site">
                                        <option value="floatrates"> Floatrates.com </option>
                                        <option value="fxexchangerate"> FXexchangerate.com </option>
                                    </select>
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
</template>