<?php
// extract data from current session
session_start();

$hasErrors = false;
$gender = $percentage = $result = '';

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $gender = $results['gender'];
    $result = $results['result'];
    $percentage = $results['percentage'];

    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
}
session_unset();