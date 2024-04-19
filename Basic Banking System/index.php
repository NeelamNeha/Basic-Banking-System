<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>Online Banking System</title>
</head>

<body style="background-color: #0000FF; color: white;">

    <div id="container">
    <div style="position: absolute; left: 40%; top: 50%; transform: translate(-50%, -50%); text-align: center;">
        <p>
            <h1 style="font-size: 40px; font-family: Arial, sans-serif; margin-bottom: 20px; text-align:center;">Welcome to Our Banking System</h1>
        </p>
        <p style="font-size: 20px; font-family: Arial, sans-serif;">Our banking system provides various services to meet your financial needs.</p>
        <p style="font-size: 20px; font-family: Arial, sans-serif;">Whether you need to send money,</p>
        <p style="font-size: 20px; font-family: Arial, sans-serif;">make transactions, we've got you covered.</p>
        <p style="font-size: 20px; font-family: Arial, sans-serif;">With our user-friendly interface you can manage your finances with ease and peace of mind.</p>
    </div>
</div>

        <img src="statics/homepg.jpg" alt="Banking System Image" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); width: 300px; height: auto;">

        

    </div>

</body>

        <?php include 'spin.php'; ?>


        <style>
            .nav-link:hover {
                text-decoration: underline;
            }

            .mybtn {
                margin-bottom: 10px;
                box-shadow: 2px 2px 10px black;
                border-radius: 30px;
                background-color: white;
                font-weight: bold;
                color: black;
            }

            .mybtn:active {
                background-color: black;
                color: white;
            }

        </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
    style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black; color: white;">
    <div class="container-fluid">
        <a href="index.php"><img src="statics\homepg.jpg" alt=""
                style="height: 80px; margin-left:25px; margin-top:10px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <b>
            <ul class="navbar-nav ">
                <li class="nav-item nav-links" style="margin-left:15px;">
                    <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item" style="margin-left:15px; ">
                    <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                </li>
                <li class="nav-item" style="margin-left:15px;">
                    <a class="nav-link text-nowrap" href="customers.php">View All Customers</a>
                </li>
                <li class="nav-item" style="margin-left:15px;">
                    <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                </li>
            </ul>
        </b>
    </div>
</nav>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function () {

                $(".zoomin").animate({
                    width: '400px'
                }, '5000', 'linear');
                $(".zoomfont").animate({
                    fontSize: '71px'
                }, '5000', 'linear');
            });
        </script>

    </div>
</body>

</html>
