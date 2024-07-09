<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<!--  #1.a  upperCase -->

<?php
$x = "Hello World!";
echo strtoupper($x);
?> 
<br>
<!--#1.b  LowerCase-->

<?php
$x = " LOWERCASE";
echo strtolower($x);
?> 

<br>


<!-- //#1.c  capitalize first letter -->


<?php
$y = 'first letter!';
echo ucfirst($y);// First Letter!
?>

<br>

<!-- //#1.d  capitalize first letter in each word -->


<?php
$y = 'first letter!';
echo ucwords($y);// First Letter!
?>
<!-- ===============================================================================-->

<!-- //# Q2  -->

<br> 
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y:m:d") . "<br>";

?>

<!-- ===============================================================================-->

<!-- //# Q3  -->
<br>
<?php

$input='I am a full stack developer at orange coding';
if(preg_match('/\b orange \b/', $input)) {
    echo ' word found!';
  }
  
?>
<!-- ===============================================================================-->
<br>
<!-- //# Q4  -->
<br>
<?php

$parts = parse_url('https://www.orange.com/index.php');
$filename = basename($parts["path"]); // this will return 'index.php'
echo $filename;

?>
<!-- ===============================================================================-->
<br>
<!-- //# Q5  -->
<?php


$string = "user@domain.com";

$explode = explode("@",$string);

array_pop($explode);

$newstring = join('@', $explode);

echo $newstring;


?>


<!-- ===============================================================================-->
<br>
<!-- //# Q6  -->

<?php
$rest = substr("orange", -3);    // returns "nge"
echo $rest;
?>


<!-- ===============================================================================-->
<br>
<!-- //# Q7  -->


<?php

function password_generate($chars) 
{
  
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  
  return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7)."\n";
?>



<!-- ===============================================================================-->
<br>
<!-- //# Q8  -->

<?php

$str = 'that new trainee is so genious.';

echo preg_replace('/that/', 'the', $str, 1)."\n"; 
?>

<!-- ===============================================================================-->
<br>
<!-- //# Q9  -->
<?php
$str1 = 'football';
$str2 = 'footboll';

$str_pos = strspn($str1 ^ $str2, "\0");

printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>

<!-- ===============================================================================-->
<br>
<!-- //# Q10  -->
<?php

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";


$arra1 = explode("<br>", $str);

var_dump($arra1);
?>


<!-- ===============================================================================-->
<br>
<!-- //# Q11 -->
<?php

$ch = 'a';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { 
 $next_ch = $next_ch[0];
}
echo $next_ch;

?>

<!-- ===============================================================================-->
<br>
<!-- //# Q12 -->

<?php
$original_string = 'The brown fox'; 
$string_to_insert ='quick'; 
$insert_pos = 4; 
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0); 
echo $new_string."\n"; 
?>


<!-- ===============================================================================-->
<br>
<!-- //# Q13 -->

<?php
$x = '000547023.24';

$str1 = ltrim($x, '0');

echo $str1."\n";
?>

<!-- ===============================================================================-->
<br>
<!-- //# Q14 -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';

echo str_replace("fox", " ", $my_str)."\n";
?>

<!-- ===============================================================================-->
<br>
<!-- //# Q15 -->

<?php
$my_str = 'The quick brown fox jumps over the lazy dog----';

echo rtrim($my_str, '-')."\n";
?>


<!-- ===============================================================================-->
<br>
<!-- //# Q16 -->
<?php

$title = ' /"1+2/3*2:5/2*4'; 
echo preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $title);

?>

<!-- ===============================================================================-->
<br>
<!-- //# Q17 -->
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';

echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

<!-- ===============================================================================-->
<br>
<!-- //# Q18 -->

<?php
$str1 = "2,543.12";

$x = str_replace( ',', '', $str1);

echo $x;
?>

<!-- ===============================================================================-->
<br>
<!-- //# Q19 -->

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)

 echo chr($x);

 echo "\n";
?>

<!-- ===================================== second tasks ==========================================-->
<br>
<!-- //# Q1 -->
<?php 
  
  function isLeapYear($year) { 
      if (($year % 4 == 0 && $year % 100 != 0)  
          || ($year % 400 == 0)) { 
          return true; 
      } else { 
          return false; 
      } 
  } 
    
  $year = 2024; 
    
  if (isLeapYear($year)) { 
      echo "Leap Year"; 
  } else { 
      echo "Not a Leap Year"; 
  } 
    
  ?>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q2 -->

<?php 

  function weatherCheck($temp) { 
    if (($temp <20)  
    ) { 
    return true; 
} else { 
    return false; 
} 
} 
    
  $temp = 21; 
    
  if (weatherCheck($temp)) { 
      echo "winter"; 
  } else { 
      echo "summer"; 
  } 
    
  ?>


<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q3 -->

<?php

$num1 = 2;
$num2 = 2;

if (($num1 !== $num2)  
) { 
    $sum = $num1 + $num2;

    echo "The sum of $num1 and $num2 is: $sum";

} else { 
$triple= $num1* $num2* $num2;
    echo "The triple of $num1 and $num2 is: $triple ";
} 

?>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q4 -->


<?php

$num1 = 15;
$num2 = 15;
$sum = $num1 + $num2;

if (($sum == 30)  
) { 

    echo " $sum";

} else { 

    echo "False ";
} 

?>


<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q5 -->


<?php

$num = 15;

if (($num > 0 && $num % 3==0)  
) { 

    echo " positive number, multiple of 3";

} else { 

    echo "  Negative number,  not multiple of 3";} 

?>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q6 -->

<?php

$num = 25;

if (($num >= 20 && $num <=50)  
) { 

    echo " True";

} else { 

    echo " False";} 

?>


<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q7 -->

<?php 
  

  
$number1 = 12; 
$number2 = 7; 
$number3 = 15; 
  
  
$maxNumber = max($number1, $number2, $number3); 
echo "The largest number among three is: $maxNumber\n"; 
  
?>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q8 -->


<?php 
  $units = 300;

  if($units <= 50) {
      $bill = $units * 2.5;
  } else if($units > 50 && $units <= 150) {
      $bill = $units * 5;
  } else if($units > 150 && $units <= 250) {
      $bill = $units * 6.2;
 
  } else if($units > 250) {
      $bill = $units * 7.5;
  }

  echo $bill;
?>



<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q9 -->

<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table >
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="       =       "></td>
    </tr>

</table>
</form>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q10 -->

<?php

$age = 25;

if (($age >=18)  
) { 

    echo " person is eligible to vote";

} else { 

    echo " person is not eligible to vote";} 

?>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q11 -->


<?php

$num = 10;

if (($num >=0)  
) { 

    echo " positive";

} else { 

    echo " Negative";} 

?>

<br>
<!----------------------------------------------------------------------------------->
<!-- //# Q12 -->

<?php

$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

$total = NULL;
$average = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 50 && $average < 70)
    $grade = "D";
else
    $grade = "F";


echo "The Average marks = " . $average . "\n";

echo "The Grade         = '" . $grade . "'\n";

?>

<!----------------------------------------------------------------------------------->


</body>
</html>
