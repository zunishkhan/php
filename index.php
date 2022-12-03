<?php
  
//   // Cast float to int
//   $x = 23465.768;
//   $int_cast = (int)$x;
//   echo $int_cast;
  
//   echo "<br>";
  
//   // Cast string to int
//   $x = "23465.768";
//   $int_cast = (int)$x;
//   echo $int_cast;
//   
// echo(pi());
//    echo(min(0, 150, 50, 30, 20, -8, -200));


//    echo(max(0, 150, 50, 30, 20, -8, -200));

// echo(abs(-6.7));

// echo"<br>";
// echo(sqrt(64));

// echo(rand(10, 100));

// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;


// $x = 6;

// function test(){
 
//  echo"<p>variable x inside function is: $x </p>";

 
// }
// test();
//  function static_variable(){

//   static $x = 10;
//   $y = 20;

//   $x++;

//   $y++;
  
//   echo "static: " .$x . "</br>";
//   echo "non_static: " .$y . "</br>";



//  }

// function add(){
//     $num1 = 10;
//     $num2 = 20;
//     $result = $num1+$num2;
//     return $result;

// }
//       echo("The answer to your addition is : " . add());

// function minus(){
//      $num1 = 25;
//     $num2 = 20;
//     $result = $num1-$num2;
//      return $result;

//  }
//         echo("The answer to your substraction is : " . minus());



// function multiply(){
//      $num1 = 25;
//     $num2 = 20;
//     $result = $num1*$num2;
//      return $result;

// }
//        echo("The answer to your multiplication is : " . multiply());

//  function divide(){
//       $num1 = 5;
//     $num2 = 20;
//     $result = $num1/$num2;
//      return $result;

//  }
//         echo("The answer to your division is : " . divide());

// function subtract($num1,$num2){

//     $res = $num1-$num2;
//     return $res;
// }

// echo("the answer to your subtraction is:" . subtract(43,23));

// $x1 = 1024;
// var_dump(is_int($x1));
// echo "The given num $x1 is in integer </br>";

// $x2 = 99.84;
// var_dump(is_int($x2));

// echo "The given num $x2 is in not integer </br>";

$x1 = 40;
$y1 = 10;
function mytest(){
    global $x1 , $y1;
    $y1 = $x1*$y1;
}
mytest();
echo $y1;


?>