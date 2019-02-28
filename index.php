<?php
require 'calculator_logic.php';
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

    <h1>National Household Percentage Income Calculator</h1>
    <div id='result'>
        <?= $gender ?>
        <?= $percentage ?>
        <?= $result ?>
    </div>

    <!-- Calculator form -->
    <form method='post' action='index.php'>
        <p>
            <label>
                Head of the Household :
                <input type='radio' name='gender' value='female' <?= $check ?>>Female
                <input type='radio' name='gender' value='male' <?= $check ?>>Male
                <input type='radio' name='gender' value='other' <?= $check ?>>Other
            </label>
        </p>
        <p>
            <label>
                Annual Household Income * : <input name='number1'
                                                   type='text'
                                                   class='form-control'
                                                   placeholder='Number Value Only'
                                                   required>
            </label>
        </p>
        <p>
            <label>
                Addition Household Income * : <input name='number2'
                                                     type='text'
                                                     class='form-control'
                                                     placeholder='Number Value Only'
                                                     required>
            </label>
        </p>
        <p>
            <label>
                Percentage of Household Income : <input type='checkbox' name='percent' value='yes'>
            </label>
        </p>
        <p>
            <input name='submit' type='submit' value='Calculate' class='btn btn-primary'/>
        </p>
    </form>

</div>

</body>
</html>