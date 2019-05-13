<?php function validateNumber($number) {
    $numbersOnly = ereg_replace( "[0-9]", "", $number );
    $amountOfDigits = strlen($numbersOnly);
    if ( $amountOfDigits == 7 or $amountOfDigits == 10) {
        echo $numbersOnly;
    }
    else {
        echo "Invalid Phone Number";
    }
}
?>