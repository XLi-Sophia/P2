<?php
require 'helpers.php';
require 'Form.php';

use DWA\Form;

session_start();

$result = '* Fields are required.';
//$percentage = $gender = $check = $total = '';

$form = new Form($_GET);

$submitted = $form->isSubmitted();

$errors = $form->validate([
    'number1' => 'required|numeric',
    'number2' => 'required|numeric',
]);

//if form submitted is true, do validation
if ($submitted) {
    //if no errors
    if (!$form->hasErrors) {
        $gender = $form->get('gender');
        $num1 = $form->get('number1');
        $num2 = $form->get('number2');
        $checkbox = $form->has('percent');

        if (isset($gender)) {
            $gender = "<h4>The head of the household: $gender.</h4>";
        }

        //return int/float number value
        if (isset($num1) && isset($num2)) {
            $total = $num1 + $num2;
            $result = "<h4>Annual household income: $$total</h4>";
        }

        //if checkbox is selected, validate value for output
        if ($checkbox) {
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
            $percentage = '';
        }
    }
}

$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'gender' => $gender,
    'result' => $result,
    'percentage' => $percentage,
];
header('Location: index.php');
