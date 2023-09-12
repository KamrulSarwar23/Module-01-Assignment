<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
                <h3>Temperature Converter</h3>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 m-auto text-center mt-5">
                <form action="" method="post">

                    <input class="mb-3" type="number" name="temperature" placeholder="Enter Temperature" required>
                    <br>


                    <select name="conversion_direction" id="" class="mb-3">

                        <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                        <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>

                    </select>

                    <button class="btn btn-primary mb-3">Result</button>
                </form>

            </div>
        </div>


        <div class="col-md-8 m-auto text-center">



            <?php

            $result = "";
            $input_temperature = "";
            $conversion_direction = "";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $input_temperature = $_POST["temperature"];
                $conversion_direction = $_POST["conversion_direction"];


                if ($conversion_direction == "celsius_to_fahrenheit") {
                    $result = ($input_temperature * 9 / 5) + 32;
                } elseif ($conversion_direction == "fahrenheit_to_celsius") {
                    $result = ($input_temperature - 32) * 5 / 9;
                }
            }

            if ($result !== "") {
                $from_unit = ($conversion_direction == "celsius_to_fahrenheit") ? "Celsius" : "Fahrenheit";
                $to_unit = ($conversion_direction == "celsius_to_fahrenheit") ? "Fahrenheit" : "Celsius";
                echo "<p>$input_temperature $from_unit is $result $to_unit.</p>";
            }
            ?>



        </div>
    </div>

</body>

</html>