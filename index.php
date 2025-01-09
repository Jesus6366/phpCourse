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

    // //// VARIABLES
    // // strings
    // $name = "Jesus";
    // $food = "pizza";
    // $email = "fake@gmail.com";

    // // numbers int
    // $age = 21;
    // $users = 2;
    // $quantity = 4;

    // // numbers floats
    // $gpa = 2.5;
    // $price = 4.99;
    // $tax_rate = 5.1;


    // // booleans 
    // $employed = true;
    // $online = false;
    // $for_sale = true;

    // $total = null;

    // echo "You have ordered {$quantity} x {$food}<br>";

    // $total = $quantity * $price;
    // echo "Your total is: \${$total}";



    ?>

 <?php

    // // Arithmetic operators 
    // // + - * / ** %

    // $x = 10;
    // $y = 2;
    // $z = null;

    // $z = $x + $y;
    // // echo $z;



    // // Incremen/ Decrement operators 
    // //++,--

    // $counter = 0;
    // $counter++;
    // $counter += 2;
    // // echo $counter;

    // $counter--;
    // // echo $counter;


    // // Operator precedence 
    // // ()
    // // **
    // // * / %
    // // + - 

    // $total = 1 + 2 - 3 * 4 / 5 ** 6;
    // echo $total;

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <form action="index.php" method="post">
         <label>Username: </label><br>
         <input type="text" name="username"><br>
         <label>Password: </label><br>
         <input type="password" name="password"><br>
         <input type="submit" value="Log in">
     </form>

 </html>

 <?php

    // $_GET and $_POST global special variables 

    echo "{$_POST["username"]}<br>";
    echo "{$_POST["password"]}<br>";




    ?>