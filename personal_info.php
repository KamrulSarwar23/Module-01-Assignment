<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

</body>

</html>




<?php

$name = "Kamrul Hasan";
$age = 28;
$country = "Bangladesh";
$introduction = "Hello, I'm Kamrul Hasan. I live in chittagong. My ambition is i want to be a best laravel developer. In this journey i already learned many things. I hope after completing this i will be a best developer. Actually i came here for become a best developer not for getting certificate. Thanks a lot team Ostad";

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto">

            <?php
            echo "<h1>My Personal Information</h1>";
            echo "<p><b> Name:</b> $name</p>";
            echo "<p><b>Age:</b> $age</p>";
            echo "<p><b>Country:</b> $country</p>";
            echo "<b>Brief Introduction:</b> $introduction";
            ?>
        </div>
    </div>
</div>