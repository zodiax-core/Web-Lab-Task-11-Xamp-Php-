    <h2>Task 7: $GLOBALS array</h3>
  
    <?php
        $x = 5;
        $y = 10;

        function AnotherFucn(){
            echo "This is Sum of X and Y : ". $GLOBALS['x'] + $GLOBALS['y'];
        }

        AnotherFucn();

    ?>
