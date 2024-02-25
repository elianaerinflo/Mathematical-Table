<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITY 8.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

        // VARIABLES

        $number = $_POST["number"];     //input the number variable
        $nummax = $_POST["maxNumber"];  //input the maximum value of the variable

        // ARITHMETIC OPERATION THAT IS USED

        $sum;       // $x + $y  
        $diff;      // $x - $y
        $product;    // $x * $y
        $quotient;   // $x / $y

    ?>

    <?php
        echo "<center>";

        echo "<h2> Number: " .$number. "</h1>";
        echo "<h2> Max Number: " .$nummax. "</h1><br>";

        echo "</center>";
    ?>

    <!-- ADDITIONAL -->

    <?php

    echo "<div class='table1'>";

        echo "<pre class='operation-name'>ADDITION TABLE</pre>";

            echo "<table border='auto'>";

                for ($x = 1; $x <= $nummax; $x++) {

                    $sum = $number + $x;

                    echo "<tr>";
                    echo "<td>" . $number . "</td>";
                    echo "<td> + </td>";
                    echo "<td>" . $x ."</td>";
                    echo "<td> = </td>";
                    echo "<td>" . $number + $x . "</td>";
                    
                    echo "</tr>";
                }  

            echo "</table>";
    echo "</div>";  

    ?>


    <!-- SUBTRACTION -->
    
    <?php

    echo "<div class='table2'>";

        echo "<pre class='operation-name'>SUBTRACTION TABLE</pre>";

            echo "<table border='auto'>";

                for ($x = 1; $x <= $nummax; $x++) {

                    $sum = $number - $x;

                    echo "<tr>";
                    echo "<td>" . $number . "</td>";
                    echo "<td> - </td>";
                    echo "<td>" . $x ."</td>";
                    echo "<td> = </td>";
                    echo "<td>" . $number - $x . "</td>";
                    
                    echo "</tr>";

                }
            echo "</table>";
    echo "</div>";  
    ?>

    <!-- MULTIPLICATION-->
    
    <?php

    echo "<div class='table3'>";

        echo "<pre class='operation-name'>MULTIPLICATION TABLE</pre>";

            echo "<table border='1'>";

                for ($x = 1; $x <= $nummax; $x++) {

                $product = $number * $x;

                echo "<tr>";
                echo "<td>" .$number. "</td>";
                echo "<td> x </td>";
                echo "<td>" . $x ."</td>";
                echo "<td> = </td>"; 
                echo "<td>" .$number * $x. "</td>";
                
                echo "</tr>";

                }
            echo "</table>";
    echo "</div>";
    ?>

    <!-- DIVISION -->

    <?php

    echo "<div class='table4'>";

        echo "<pre class='operation-name'>DIVISION TABLE</pre>";

            echo "<table border='1'>";

                for ($x = 1; $x <= $nummax; $x++) {

                    $quotient = $number / $x;

                    echo "<tr>";
                    echo "<td>" .$number. "</td>";
                    echo "<td> ÷ </td>";
                    echo "<td>" . $x ."</td>";
                    echo "<td> = </td>"; 
                    echo "<td>" .$number / $x. "</td>";
                        
                    echo "</tr>";
                }

            echo "</table>";
    echo "</div>";
    ?>

    <div class="footer">
    <a href="index.php">
        <center>
            <div class="btn-home" color="#D61C4E">Try a Different Number</div>
        </center>
    </a>
    </div>

</body>
</html>