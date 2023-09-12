<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
                <h1>Grade Calculator</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 m-auto text-center mt-5">
                <form action="" method="post">

                    <input class="mb-3" type="number" name="test1" placeholder="test1"> <br>
                    <input class="mb-3" type="number" name="test2" placeholder="test2"> <br>
                    <input class="mb-3" type="number" name="test3" placeholder="test3"> <br>



                    <button class="btn btn-primary mb-3">Calculate</button>
                </form>

            </div>
        </div>


        <div class="col-md-8 m-auto text-center">


            <?php

            $test1 = "";
            $test2 = "";
            $test3 = "";
            $average = "";
            $grade = "";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $test1 = $_POST["test1"];
                $test2 = $_POST["test2"];
                $test3 = $_POST["test3"];

                $average = ($test1 + $test2 + $test3) / 3;


                if ($average >= 90) {
                    $grade = "A";
                } elseif ($average >= 80) {
                    $grade = "B";
                } elseif ($average >= 70) {
                    $grade = "C";
                } elseif ($average >= 60) {
                    $grade = "D";
                } else {
                    $grade = "F";
                }

                if ($average !== "") {
                    echo "<h6>Average Score: $average</h6>";
                    echo "<h6>Grade: $grade</h6>";
                }
            }

            ?>

        </div>

    </div>

</body>

</html>