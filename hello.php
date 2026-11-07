<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Task 2: Mixing HTML and PHP</h3>
    <h4>This is Heading</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Dolores, sit totam! Suscipit laudantium minima, excepturi tenetur 
        sint ducimus optio, recusandae, commodi doloremque atque ex enim 
        similique neque. Corrupti, eaque enim.</p>

    <?php
        echo "My first PHP script";  
    ?>

    </br>
    <?php
        echo "Name : Tayyab Asif <br>";
        echo "Roll-Number : 70173531 <br>";
        echo "Course : Web Engenerring <br>";
    ?>


    <h2>Task 3: Comments</h3>
  
    <?php
       
       
        /* This 
        is doule line comment and more */
        #This is Comment too
        $x = 5 /* + 15 */ + 5; //Expected Output will be 10
        echo $x;
    ?>

    <h2>Task 4: Case sensitivity</h3>
  
    <?php
       $color = "red";
       echo "The color is $color";  
       ECHO "The color is $COLOR";
       EchO "The color is $cOlOr";
    ?>

    <h2>Task 5: Variables and naming rules</h3>
  
    <?php
       $name = "Tayyab Asif";
       $age =  85;
       $city = "Lahore";
       $cgpa = 9.5;

       echo "My name is $name"." And my age is $age"." And my city is $city"." And my cgpa is $cgpa <br>";
       echo "My Name is $1name <br>";
       echo "My Name is $_name <br>";
       echo "My Name is $my-name <br>";
       echo "My Name is $myName <br>";
       echo "My Name is $my_name <br>";
    ?>



    <h2>Task 6: Variable scope</h3>
  
    <?php
        $x = 5;

        function Func(){
            global $x;
            $y = 8;
            echo "This is Value of X : $x";
        }

        Func();
        echo "This is Value of Y : $y";
    ?>




    <h2>Task 7: $GLOBALS array</h3>
  
    <?php
        $x = 5;
        $y = 10;

        function AnotherFucn(){
            echo "This is Sum of X and Y : ". $GLOBALS['x'] + $GLOBALS['y'];
        }

        AnotherFucn();

    ?>


    <h2>Task 8: The static keyword</h3>
  
    <?php
        function Counter(){
            // This keeps its value between function calls
            static $x = 0;
            $x = $x + 1;
            echo "$x<br>";
        }

        // You must call the function to see the output
        Counter(); 
        Counter(); 
        Counter(); 
        Counter();
        Counter();
    ?>


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


    <h2>Task 10: Operators</h3>
    <?php
        echo "1: "; var_dump(5 == "5"); echo "<br>";
        echo "2: "; var_dump(5 === "5"); echo "<br>";
        echo "3: "; var_dump(10 == 10.0); echo "<br>";
        echo "4: "; var_dump(10 === 10.0); echo "<br>";
        echo "5: "; var_dump(0 == false); echo "<br>";
        echo "6: "; var_dump(0 === false); echo "<br>";
        echo "7: "; var_dump("" == false); echo "<br>";
        echo "8: "; var_dump("0" == false); echo "<br>";
        echo "9: "; var_dump("hello" == true); echo "<br>";
        echo "10: "; var_dump(1 == true); echo "<br>";
    ?>



</body>
</html>

