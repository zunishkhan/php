<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zunish</title>
</head>
<body>
    <?php
    //   echo abs(-5.4);
   
    // // PHP program to illustrate gettype() function
    // $var1 = 3; // integer value
    // $var2 = 5.6; // double value
    // $var3 = "Abc3462"; // string value
    // echo gettype($var1) . "<br>";
    // echo gettype($var2). "<br>";
    // echo gettype($var3). "<br>";

   //     $var1=13;
   //    $var2="Hello";
   //    var_dump($var1);
   //    echo "<br>";
   //    var_dump($var2);

//    $names=array("David","Charlie","George","Peter");
//    echo "Names are: $names[0], $names[1], $names[2] and $names[3]";
   
//    function even_number(){
   
//      for( $i=0; $i<=10; $i++ ){
    
//       if( $i%2 == 0 ){
//      echo "<br>", $i;
//     }
//     }
//     }
//      even_number();

//   this multiplication funtion...
//    function numbers($num1, $num2, $num3)
//    {
//    $product = $num1 * $num2 * $num3;
//    echo "The product of all the numbers is: $product";
//     }
//    // Calling the function
//    // Passing three arguments
//     numbers(4, 3, 5);

//   this division funtion...
//     function numbers($num1, $num2, $num3)
//     {
//     $product = $num1 / $num2 / $num3;
//     echo "The product of all the numbers is: $product";
//      }
//     // Calling the function
//    // Passing three arguments
//      numbers(4, 3, 5);

// this plus funtion...
// function numbers($num1, $num2, $num3)
//      {
//      $product = $num1 + $num2 + $num3;
//      echo "The product of all the numbers is: $product";
//       }
//      // Calling the function
//     // Passing three arguments
//       numbers(4, 3, 5);

    //   this minus funtion..
    // function numbers($num1, $num2, $num3)
    //  {
    //  $product = $num1 - $num2 - $num3;
    //  echo "The product of all the numbers is: $product";
    //   }
    //  // Calling the function
    // // Passing three arguments
    //   numbers(4, 3, 5);

   
//   function value(int $Val_default = 100) {
//  echo "The value is : $Val_default <br>";
//  }
//   value(300);
//   value();
//   value(135);
//   value(150);

// this subtract funtion..
//  function sub_Numbers(int $a, int $b) {
//      $c = $a - $b;
//      return $c;
//      }
//     echo "25 - 10 = " . sub_Numbers(25,10) . "<br>";
//     echo "17 - 13 = " . sub_Numbers(17,13) . "<br>";
//     echo "15 - 14 = " . sub_Numbers(15,14);

// // this addition funtion..
//   function add_Numbers(int $a, int $b) {
//       $c = $a + $b;
//       return $c;
//       }
//      echo "25 + 10 = " . add_Numbers(25,10) . "<br>";
//      echo "17 + 13 = " . add_Numbers(17,13) . "<br>";
//      echo "15 + 14 = " . add_Numbers(15,14);


// // this multiplication funtion..    
//   function multiply_Numbers(int $a, int $b) {
//       $c = $a * $b;
//       return $c;
//       }
//      echo "25 * 10 = " . multiply_Numbers(25,10) . "<br>";
//      echo "17 * 13 = " . multiply_Numbers(17,13) . "<br>";
//      echo "15 * 14 = " . multiply_Numbers(15,14);

// // this division funtion..    
//  function divide_Numbers(int $a, int $b) {
//     $c = $a / $b;
//     return $c;
//     }
//    echo "25 / 10 = " . divide_Numbers(25,10) . "<br>";
//    echo "17 / 13 = " . divide_Numbers(17,13) . "<br>";
//    echo "15 / 14 = " . divide_Numbers(15,14);

// function AddNumbers(float $n1, float $n2) : float {
//     return $n1 + $n2;
//     }
//     echo AddNumbers(1.5, 7.2);

// function SumNumbers(float $x1, float $x2) : int {
//     return (int)($x1 + $x2);
//     }
//     echo SumNumbers(5.2, 7.2);

function add(&$value1) {
    $value1 += 10;
    }
    $num1 = 2;
    add($num1);
    echo $num1;

// function Test()
// {
// echo "Statement is displayed by a dynamic function call<br />";
// }
// $function_holder = "Test";
// $function_holder();

// function named_arguments($number = 11, $value1 = 5){
//     echo "Number: "; $number;
//     echo " ";
//     echo "Value: "; $value1;
// }
    
    
 
   
     ?>




</body>
</html>