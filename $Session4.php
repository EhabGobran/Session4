<?php

// ternary operator
  $is_user_logged_in=false;

 if($is_user_logged_in == true ) {
     echo "<button> Logout </button>";
 } else {
     echo "<button> Login </button>";
 }

 $is_user_logged_in = true;
 $role_of_user = 'normal user';

$status = $is_user_logged_in == true ? '<button> Logout </button>' : '<button> Login </button>';





 $status = $is_user_logged_in == true ?
       ($role_of_user != 'admin' ?
               '<button>logout</button>' :
               '<button>logout</button><button>dashboard</button>')
       : '<button> Login </button>';

 // null coalescing ??
 // falsy values   false , 0 -0  0.0  -0.0  null  []  '0'   ''        ?:

 $path = 0;
 $url = $path ?: '/';

 echo $url ;

 echo $status;

 $x = 5;
 echo $x++; // post increment  first return $x  after that increment 1
 echo $x;

 $y = 10;
 echo ++$y; // pre increment
 echo $y;

 $j = null;
 echo ++$j;
 echo $j;

 $t = 'karin';
 echo ++$t;

// logical operator  ( and  &   && ) al must be true ( or |  || ) one true  ( xor ) one true but not both

 $book = true;
 $laptop = true;

 ($book || $laptop);

 $x = true;
 $y = false;
 $z = true;

// var_dump( $x && !$y || $z && false);

// 1  0000 0001

 var_dump(~6 ^ 3);
 $x = 6 ;//0000 0011
 $y = 1 ;
// // >>  shift right
 var_dump($x >> $y) ;//3

 $x = 6 ;//0011 0000
 $y = 3 ;
 var_dump($x << $y);

 $x = ['aa' => 'a' ,'bb' => 'b' ,'cc' => 'c'];
 $y = ['a' => 'd' , 'b' => 'e' ,'c' => 'f', 'gg' => 'g', 'hh' => 'h'];

 var_dump($x + $y);

 $x = [ 0 => '1' , 'b' => 2];
 $y = ['0' => '1' , 'b' => 2];

 var_dump($x <> $y);
 $x = ['a' => '1' , 'b' => 2];
 $y = ['a' => 1 , 'b' => '2'];

 var_dump($x === $y);
$databaseName = 'Souq' ;
 if($databaseName == 'Souq' && 'ahmed' === 'ahmed' || true == false) {
     echo "ahmed";
 }

 if($databaseName == 'Souq' && 'ahmed' === 'ahmed1' || true == false) {
     echo "from true";
 } else {
     echo 'from else';
 }


$finalResult = 89 ;

 if($finalResult >= 90) {
     echo '<h1> A </h1>';
 } elseif($finalResult < 90 && $finalResult >= 80) {
     echo '<h1> B </h1>';
 } elseif($finalResult < 80 && $finalResult >= 50) {
     echo '<h1> C </h1>';
 } else {
     echo '<h1> F </h1>';
 }
?>
 <?php if($finalResult >= 90): ?>
   <h1 class='' id=''> Is A+ </h1>  
 <?php elseif($finalResult < 90 && $finalResult >= 80): ?> 
   <h1> Is B+ </h1>
 <?php elseif($finalResult < 80 && $finalResult >= 50): ?>
   <h1> Is C+ </h1>
 <?php else : ?>
   <h1> Is F </h1> 
 <?php endif ?>



 while($x < 10) {
     echo '<h1> my  number is ' . $x . '</h1>';
     $x++;
 }


 <?php while($x < 10): ?>

   <div class="card" style="width: 18rem;">
   <img src="..." class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Card title  <h5> $x </h5> 
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="#" class="btn btn-primary">Go somewhere</a>
   </div>
 </div>
 <?php $x++ ?>
 <?php endwhile ?>
<?php
 $x = 1 ;
 $y = 5 ;


 for($i = 0 ; $i < 5 ; $i++) {
     echo "<h1> num is $i </h1>";
 }




 do {
     echo 'num is' . $x . ' , ';
     $x++;
 } while($x > 10);


 while($x !== $y) {
     if($x == 3) {
       continue;
        $x++;
     }
     echo $x;
     $x++;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php for($i = 0 , print $i ; $i <= 5 ; $i++): ?>

  <h1> ahmed sayed <?= $i ?> </h1>

<?php endfor ?>
</body>
</html>