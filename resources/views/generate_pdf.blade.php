<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column align-items-center mb-3">
            <h1 class="mb-3">Document Goods Receipt </h1>
            <h3>Finish Goods Polybag</h3>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="table">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody id="BOM">
                        <tr>

                            <td><select name="type" id="jo" class="form-select"
                                    data-hide-search="true" data-placeholder="Select Type">
                                    <option value="FG-001">FG-001</option>
                                </select></td>

                            <td><input type="text" id="nama-item" name="nama-item" class="form-control"
                                    value="Finish Goods Polybag"></td>

                            <td><input id="quantity" type="number" name="quantity"
                                    class="form-control" value="500"></td>

                            <td><input type="remarks" id="remarks" name="remarks" class="form-control" value="">
                            </td>
                        </tr>

                        <tr>

                            <td><select name="type" id="jo" class="form-select"
                                    data-hide-search="true" data-placeholder="Select Type">
                                    <option value=""></option>
                                    <option value="FG-001">FG-001</option>
                                </select></td>

                            <td><input type="text" id="nama-item" name="nama-item" class="form-control"
                                    value=""></td>

                            <td><input id="quantity" type="number" name=""
                                    class="form-control" value=""></td>

                            <td><input type="remarks" id="remarks" name="remarks" class="form-control" value="">
                            </td>
                        </tr>

                        <tr>

                            <td><select name="type" id="jo" class="form-select"
                                    data-hide-search="true" data-placeholder="Select Type">
                                    <option value=""></option>
                                    <option value="FG-001">FG-001</option>
                                </select></td>

                            <td><input type="text" id="nama-item" name="nama-item" class="form-control"
                                    value=""></td>

                            <td><input id="quantity" type="number" name=""
                                    class="form-control" value=""></td>

                            <td><input type="remarks" id="remarks" name="remarks" class="form-control" value="">
                            </td>
                        </tr>

                        <tr>

                            <td><select name="type" id="jo" class="form-select"
                                    data-hide-search="true" data-placeholder="Select Type">
                                    <option value=""></option>
                                    <option value="FG-001">FG-001</option>
                                </select></td>

                            <td><input type="text" id="nama-item" name="nama-item" class="form-control"
                                    value=""></td>

                            <td><input id="quantity" type="number" name=""
                                    class="form-control" value=""></td>

                            <td><input type="remarks" id="remarks" name="remarks" class="form-control"
                                    value=""></td>
                        </tr>


                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
