<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../assets/images/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/slick.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../assets/font/qanelas/stylesheet.css" type="text/css">
    <title>Pay Form</title>
</head>

<body>
    <div class="container">
        <div class="delivery-details shadow px-md-5 p-4 my-5">
            <div class="titleBox text-center">
                <div class="cartTitle">
                    <h4 class="mb-0">Card Information</h4>
                </div>
            </div>
            <div class="pt-4 wizard">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">
                                Cardholder Name <span class="required">*</span>
                            </label>
                            <input type="text" placeholder="Enter Cardholder Name" class="form-control bg-light rounded-pill" id="name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="cardnumber">
                                Card Number <span class="required">*</span>
                            </label>
                            <input type="number" placeholder="Enter Card Number" class="form-control bg-light rounded-pill" id="cardnumber">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="vDate">
                                Expiry Date <span class="required">*</span>
                            </label>
                            <input type="date" placeholder="Enter Validity Date" class="form-control bg-light rounded-pill" id="vDate">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="cvv">
                                CVV <span class="required">*</span>
                            </label>
                            <input type="number" placeholder="Enter CVV Number" class="form-control bg-light rounded-pill" id="cvv">
                        </div>
                    </div>
                </div>
                <div class="form-group text-center mb-0 mt-3">
                    <button class="btn bg-brown rounded-pill border-0 px-5 text-white" type="button">Proceed</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>