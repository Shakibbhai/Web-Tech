<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $food="pizza";
    echo 'i love to eat ' . $food.'<br>';

    $x="1";
    $y=20;

    echo $x.$y.'<br>';
    echo ($x-$y).'<br>';
    print $x+$y.'<br>';
    print ($x+$y).'<br>';

    print $food.'<br>';
    $foods =print('Drinks');

    echo $foods.'<br>';
    
    $people=array('apple','banana','plum');
    echo ($people);
    var_dump($people);
    echo '<br>';
    

    class phone {
        var $model;

        function phonemodel($number){
            global $model;
            $model=$number;

            echo "this is $model <br>";
        }
    }

    $apple =new phone;
    $apple->phonemodel('iphone ');

    $realme =new phone;
    $realme->phonemodel('realme 10 + pro ');

    
    $i=0;
    for(++$i;++$i ;++$i ){
        print $i;
        if($i==4){
            break;
        }
    }

    $names = array("Sam", "Bob", "Jack");
echo $names[0] . " is the brother of " . $names[1] . " and " . $names[1] . "." . $brother.'<br>';


$a = "clue";
$a .= "get";
echo $a;
echo "<br>";
echo "$a<br>";

$team = "arsenal";
switch ($team) {
    case "manu":
        echo "I love man u";
    case "arsenal":
        echo "I love arsenal";
    case "manc":
        echo "I love manc";
}
echo "<br>";
define('a','15');
echo(a);echo "<br>";
var_dump(a);
define('cars',['BMW','Toyota','Mazda']);
echo (cars[1]);
echo "<br>";


function name(){
    $z=20;
    echo($z);
    echo (cars[1]);
}
echo "<br>";
$p=2;
$q=3;
echo $p % $q;
echo "<br>";
echo $p = $q;
echo "<br>";
echo $p ** $q;
echo "<br>";

$x=50;
$y='50';

var_dump($x==$y);//etate konomot e equal hoilei hbe
echo "<br>";
var_dump($x===$y);//etate datatype o equal howa lgbe
echo "<br>";
var_dump($x!==$y);
echo "<br>";
var_dump($x!=$y);
echo "<br>";
var_dump($x <> $y);// uporer ta same <> = !=
  
  $date=date('H');

  if($date>2){
    echo 'Good Morning'.$date;
  }else {
    echo 'Good boy'; 
  }

  switch('green'){
    case 'red':
        echo 'apple is red';
        break;
    case 'green':
            echo 'apple is green';
            break;
    default:
             echo 'no fruit';
  }


  $x=1;
  while($x<=5){
    echo "the number is $x <br>";
    $x++;
  }

  do{
    echo "the number is $x <br>";
    $x++;
  }while($x<=5);


  echo "today is ".date("d-m-y")."<br>";
  
  date_default_timezone_set("Asia/Dhaka");

  $dd=true;
  $gg=false;//etar jnno faka dekhai
  echo"u have ordered $dd<br>";
  echo"u have ordered $gg<br>";

  //Operator Precedence
  //()
  // **
  // * / %
  // + -

  ?>
</body>
</html>