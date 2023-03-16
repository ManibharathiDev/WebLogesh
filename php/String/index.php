<?php
    //Encryption

    // Set the password
$password = 'mypassword';

// Get the hash, letting the salt be automatically generated; not recommended
$hash = crypt($password,"test");
//echo $hash;
$userinput = "mypassword";

if(hash_equals($hash, crypt($userinput,"test")))
{
    echo "Verified";
}
echo $hash;

//Explode
echo "<br/>";
$myName = "My Name is Raja";
$myResult = explode(" ",$myName);

$myPositiveLimitResult = explode(" ",$myName,2);
$myNegativeLimitResult = explode(" ",$myName,-1);
print_r($myPositiveLimitResult);

//Implode

$array = ['lastname', 'email', 'phone'];
$impResult = implode("|",$array);
echo "<br/>";
echo $impResult;

echo "<br/>";
$joinResult = join("|",$array);
echo $joinResult;

//Currency Format
echo "<br/>";

$number = 1234.56;

// english notation (default)
$english_format_number = number_format($number);
echo $english_format_number;

$number = 1234.5678;
echo "<br/>";
// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', '');
echo $english_format_number;
// 1234.57

echo "<br/>";
$string = '$HelloWorld';
if(str_contains($string,"Worlds"))
{
    echo "Available";
}

if (str_ends_with($string, '$')) {
    echo "All strings end with the empty string";
}

if(str_starts_with($string,'$')){
    echo "All strings starts with the empty string";
}

echo "<br/>";
$myName = "MANIBHARATHI";
echo substr($myName,1,4);

echo "<br/>";
$myData = "KUMAR";
echo strlen($myData);
echo "<br>";
echo $myData[0];

//String Reverse
echo "<br/>";
$revString = "SUGANYA";
echo strrev($revString);

//String To Lower
echo "<br/>";
$lString = 'SUGANYA';
echo strtolower($lString);
echo "<br/>";
$uString = 'sUGanya';
echo strtoupper($uString);

echo "<br/>";
$str = 'QTree Tech';
$str = base64_encode($str); 
echo $str;

echo "<br/>";

echo base64_decode($str);
?>