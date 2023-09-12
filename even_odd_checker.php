<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            width: 600px;
            box-shadow: 1px 1px 8px 0 rgb(194, 192, 192);
            padding: 20px;
        }

        input {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            outline: none;
            border: 2px solid gray;
        }

        select {
            width: 200px;
            padding: 5px;
            border-radius: 5px;
            outline: none;
            border: none;
            box-shadow: 1px 1px 8px 0 rgb(156, 154, 154);
        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 m-auto text-center ">
                <h2>Even Odd Checker</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 m-auto text-center mt-5">
                <form action="" method="post">

                    <input class="mb-3" type="number" name="number" placeholder="Enter Number"> <br>


                    <button class="btn btn-primary mb-3">Check</button>
                </form>

            </div>
        </div>


        <div class="col-md-8 m-auto text-center">


            <?php

            $number = "";
            $result = "";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST["number"];

                if ($number % 2 == 0) {
                    $result = "Even Number";
                } else {
                    $result = "Odd Number";
                }

                if ($result !== "") {
                    echo "<h6>The number $number is $result.</h6>";
                }
            }

            ?>

        </div>

    </div>


</body>

</html>