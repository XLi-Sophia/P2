<?php
$result = '* Fields are required.';
$percentage = $gender = $check = $total = '';

if (isset($_POST['submit'])) {
    // validate radio button
    //https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete
    if (isset($_POST['gender'])) {
        if ($_POST['gender'] == 'female') {
            $check = 'checked';
        }
        if ($_POST['gender'] == 'male') {
            $check = 'checked';
        }
        if ($_POST['gender'] == 'other') {
            $check = 'checked';
        }
        $gender = "<h4>The head of the household: {$_POST['gender']}.</h4>";
        $check = '';
        unset($_POST['gender']);
    }

    //  validate input is number
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $total = $_POST['number1'] + $_POST['number2'];
        $result = "<h4>Your annual household income is $$total</h4>";
    } else {
        $result = '<h4>Numeric values are required</h4>';
    }

    // validate checkbox
    if (isset($_POST['percent'])) {
        if ($_POST['percent'] == 'yes') {
            if (is_numeric($total)) {
                if ($total < 1) {
                    $percentage = "<h4>Highly suggest for you to find a job now!</h4>";
                }
                if (in_array($total, range(1, 14999))) {
                    $percentage = "<h4>Your are in the 10.7% annual household income under $15,000 in U.S.</h4>";
                }
                if (in_array($total, range(15000, 24999))) {
                    $percentage = "<h4>Your are in the 9.6% of annual household income between $15,000 to $25,000 in U.S.</h4>";
                }
                if (in_array($total, range(25000, 34999))) {
                    $percentage = "<h4>Your are in the 8.2% annual household income between $25,000 to $35,000 in U.S.</h4>";
                }
                if (in_array($total, range(35000, 49999))) {
                    $percentage = "<h4>Your are in the 12.3% annual household income between $35,000 to $50,000 in U.S.</h4>";
                }
                if (in_array($total, range(50000, 74999))) {
                    $percentage = "<h4>Your are in the 16.5% annual household income between $50,000 to $75,000 in U.S.</h4>";
                }
                if (in_array($total, range(75000, 99999))) {
                    $percentage = "<h4>Your are in the 12.5% annual household income between $75,000 to $100,000 in U.S.</h4>";
                }
                if (in_array($total, range(100000, 149999))) {
                    $percentage = "<h4>Your are in the 14.5% annual household income between $100,000 to $150,000 in U.S.</h4>";
                }
                if (in_array($total, range(150000, 199999))) {
                    $percentage = "<h4>Your are in the 7% annual household income between $150,000 to $200,000 in U.S.</h4>";
                }
                if ($total > 200000) {
                    $percentage = "<h4>Your are in the 7.7% annual household income above $200,000 in U.S.</h4>";
                }
            } else {
                $percentage = "<h4>Check your input and try again.</h4>";
            }
        }
        unset($_POST['percent']);
    }
}