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
