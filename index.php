<?php
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Calculator</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="p2.css">
</head>
<body>

<div id='container'>

    <h1>Income Percentage Calculator</h1>
    <h4><b>*</b> Fields are required.</h4>
    <?php if ($hasErrors): ?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif ?>

    <!-- Calculator form -->
    <form method='GET' action='search.php'>
        <p>
            <label>Head of the Household :</label>
                <input type='radio' name='gender' value='female'>Female
                <input type='radio' name='gender' value='male'>Male
                <input type='radio' name='gender' value='other'>Other
        </p>
        <p>
            <label>Annual Household Income <b>*</b> :</label>
                <input name='number1' type='number' class='form-control' placeholder='Number Value Only' required>
        </p>
        <p>
            <label>Addition Household Income <b>*</b> :</label>
                <input name='number2' type='number' class='form-control' placeholder='Number Value Only' required>
        </p>
        <p>
            <label>National Income Percentage :</label>
                <input type='checkbox' name='percent' value='checked'>

        </p>
        <p>
            <input name='submit' type='submit' class='btn btn-primary'>
        </p>

        <div id='result'>
            <?php if (!$hasErrors) ?>
            <div class='alert alert-primary' role='alert'>
                <?= $gender ?>
                <?= $result ?>
                <?= $percentage ?>
            </div>
        </div>

    </form>
</div>

</body>
</html>
