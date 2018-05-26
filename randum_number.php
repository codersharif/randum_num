<?php 

/*echo (rand()."<br>");
echo (rand()."<br>");
echo (rand(10,100)."<br>");
//

echo getrandmax()."<br>";

//mt_rand()
echo "mt_rand function <br>";

echo (mt_rand()."<br>");
echo (mt_rand()."<br>");
echo (mt_rand(10,100)."<br>");

echo mt_getrandmax()."<br>";

// abs()....absulate (positive)

echo (abs(6.7)."<br>");
echo (abs(-6.7)."<br>");
echo (abs(3)."<br>");
echo (abs(-3)."<br>");


/*function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

echo randomString();*/

/*//::::::::::::::::::::::::::::generate random string......
echo "<br>";

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

echo "<br>";

  function randomstring($length=10){
     $chr='0123456789fkgiufkgsyutncbfyrthgfkrabcdefghigkhtkugfdfkjghkgh';
     $chrlenght=strlen($chr);
     $randomstring= '';
     for($i=0;$i<$length;$i++){
     	$randomstring.=$chr[rand(0,$chrlenght -1)];

     }
     return $randomstring;
  }

  echo randomstring();
  echo "<br>";*/
  //::::::::::::::::::::::swaping

  function swap(&$a, &$b) {
    $a = $a ^ $b;
    $b = $a ^ $b;
    $a = $a ^ $b;
}

$a = "One - 1";
$b = "Two - 2";

echo $a . $b."<br>"; // One - 1Two - 2



echo "<br>";
echo $a . $b; // Two - 2One - 1
 ?>