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
