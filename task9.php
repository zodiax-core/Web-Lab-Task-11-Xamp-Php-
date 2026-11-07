    <h2>Task 9: Operators</h3>

    <?php
        echo "PART 1: Arithmetic Operators<br>";
        $num1 = 15;
        $num2 = 4;

        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;
        $quotient = $num1 / $num2;
        $remainder = $num1 % $num2;

        echo "Number 1: $num1, Number 2: $num2<br>";
        echo "Sum (+): $sum<br>";
        echo "Difference (-): $difference<br>";
        echo "Product (*): $product<br>";
        echo "Quotient (/): $quotient<br>";
        echo "Remainder (%): $remainder<br><br>";


        echo "PART 2: Shorthand Operators <br>";
        $a = 10; 
        echo "Initial value: $a<br>";

        $a += 5; 
        echo "After += 5: $a<br>";

        $a -= 3; 
        echo "After -= 3: $a<br>";

        $a *= 2; 
        echo "After *= 2: $a<br>";

        $a /= 4; 
        echo "After /= 4: $a<br>";

        $a %= 4; 
        echo "After %= 4: $a<br>";

        $a .= " text appended"; 
        echo "After .= ' text appended': $a<br><br>";


        echo "PART 3: Logical Operators <br>";
        $checkNum = 25; 
        echo "Testing the number: $checkNum<br>";

        if ($checkNum >= 10 && $checkNum <= 50) {
            echo "Using &&: The number is between 10 and 50.<br>";
        } else {
            echo "Using &&: The number is NOT between 10 and 50.<br>";
        }

        if ($checkNum < 10 || $checkNum > 50) {
            echo "Using ||: The number is OUTSIDE the range of 10 and 50.<br>";
        } else {
            echo "Using ||: The number is INSIDE the range of 10 and 50.<br>";
        }

        if (!($checkNum >= 10 && $checkNum <= 50)) {
            echo "Using !: The number is OUTSIDE the range of 10 and 50.<br>";
        } else {
            echo "Using !: The number is INSIDE the range of 10 and 50.<br>";
        }
    ?>
