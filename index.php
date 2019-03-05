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
    <form method='post' action='search.php'>
        <p>
            <label>
                Head of the Household :
                <input type='radio'
                       name='gender'
                       value='female' <?= (!isset($gender) or $gender == 'female') ? 'checked' : '' ?>>Female
                <input type='radio'
                       name='gender'
                       value='male' <?= (!isset($gender) or $gender == 'male') ? 'checked' : '' ?>>Male
                <input type='radio'
                       name='gender'
                       value='other' <?= (!isset($gender) or $gender == 'other') ? 'checked' : '' ?>>Other
            </label>
        </p>
        <p>
            <label>
                Annual Household Income <b>*</b> :
                <input name='number1' type='number' class='form-control' placeholder='Number Value Only' required>
            </label>
        </p>
        <p>
            <label>
                Addition Household Income <b>*</b> :
                <input name='number2' type='number' class='form-control' placeholder='Number Value Only' required>
            </label>
        </p>
        <p>
            <label>
                Percentage of Household Income : <input type='checkbox' name='percent' value='checked'>
            </label>
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