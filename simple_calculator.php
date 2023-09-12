<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
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
                <h2>Simple Calculator</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 m-auto text-center mt-4">
                <form action="" method="post">

                    <input class="mb-3" type="number" name="num1" placeholder="Enter First Number"> <br>
                    <input class="mb-3" type="number" name="num2" placeholder="Enter First Number"> <br>


                    <select name="operation" id="" class="mb-3">

                        <option value="add">Addition</option>
                        <option value="subtract">Subtraction</option>
                        <option value="multiply">Multiplication</option>
                        <option value="division">Division</option>

                    </select>

                    <button class="btn btn-primary mb-3">Calculate</button>
                </form>

            </div>
        </div>


        <div class="col-md-8 m-auto text-center">


            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;

                    case "subtract":
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;

                    case "multiply":
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;

                    case "division":

                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        } else {
                            echo "Cannot devide by Zero";
                        }

                        break;

                }
            }

            ?>

        </div>

    </div>






</body>

</html>