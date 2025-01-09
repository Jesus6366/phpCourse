 <?php

    // echo "I like pizza <br>";
    // echo "Its really good";

    // this is a comment
    /*this 
is 
a multiline comment 
*/

    ?>

 <!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <button>order a pizza</button>
</body>

</html> -->

 <?php

    //// VARIABLES
    // strings
    $name = "Jesus";
    $food = "pizza";
    $email = "fake@gmail.com";

    // numbers int
    $age = 21;
    $users = 2;
    $quantity = 3;

    // numbers floats
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;


    // booleans 
    $employed = true;
    $online = false;
    $for_sale = true;


    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "your email is {$email} <br>";
    echo "You are {$age} years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items <br> ";

    echo "Your gpa is: {$gpa} <br>";
    echo "Your pizza is \${$price} <br>";
    echo "the sales tax rate is: {$tax_rate} <br>";

    echo "Online status: {$online}<br>"


    ?>