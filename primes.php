
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Primes</title>

    </head>
    <body>

        <p id="line">Prime numbers less than 100: </p>

    </body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: lilit
 * Date: 7/9/17
 * Time: 8:44 PM
 */
function checkPrime() {
    for ($i = 2; $i < 100; $i++) {
        $primeTrue = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j === 0) {
                $primeTrue = false;
            }
        }
            echo $i.' ';
    }
}
checkPrime();
?>
