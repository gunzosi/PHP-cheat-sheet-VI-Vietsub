<?php

    // String 
    $name = "gumazosi";
    $food = "pizza";
    $email = "fake@gmail.com";

    // Integer
    $age = 21;
    $users = 2;
    $quantity = 3;

    // Float 
    $gpa = 4.99;
    $price = 4.99;
    $tax_rate = 5.1;

    //Boolean
    $employed = true;
    $online = true;
    // False : 0 (dont show) \\ True : 1 
    $for_sale = true;


    // Single point
    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";
    echo "Yout are {$age} years old<br>";
    echo "There are {$users} online<br>";
    echo "You would like to buy {$quantity} items <br>";
    echo "Your gpa is: {$gpa} <br>";
    echo "Your pizza is \${$price} <br>";
    echo "The sales tax rate is: {$tax_rate}% <br>";
    echo "Online status: {$online} <br>";


    // 
    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;

    echo "All total is {$total}<br>";

   //   ss2

   echo "Session 2:";
   echo "<br>";
   echo "<br>";

   // Arioithemtic opreators
   // + - * / ** %
   $x = 10;
   $y = 2;
   $z = null;

   //$z = $x + $y;
   //$z = $x - $y;
   // $z = $x * $y;
   // $z = $x ** $y;
   $z = $x % $y;
   echo $z ;

   echo "<br>Session 2:<br>";
   echo "a++/a--";
   echo "<br>";


   $counter = 0;
//    $counter--;
//    echo $counter;

   $counter++;
   echo $counter;

?>

