<?php
# concatenation
$word1 = "for";
$word2 = "ever";

$number1 = 12;
$number2 = 57;

//string-to string concatenation
echo $word1 . $word2 . "<br>";

//string-to-number concatenation (become a new string)
echo $word1 . $number1 . "<br>";

//number-to-string concatenation (become a new string)
echo $number1 . $word1 . "<br>";

//number to number concatenation (a new string)
echo $number1 . $number2 . "<br>";

#quotes
$ans = 'I\'m fine.<br>';
echo "$ans";
echo "<br>";
echo '$ans';
echo "<br>";

echo 'I said \"hi!\" to you. <br>';
echo "I said \"hi!\" to you.<br>";

$age = 29;
$city = "Anaheim";
$state = 'CA';

echo "age is $age, city is $city, state is $state <br>";
echo 'age is $age, city is $city, state is $state <br>';

$ans = 'I\'m fine.';

echo 'she said, \"how are you?\" to him. He answered, \"$ans\" to her.';
echo "<br>";
echo "she said, \"how are you?\" to him. He answered, \"$ans\" to her.";
echo "<br>";

$tab = "&nbsp; &nbsp; &nbsp; &nbsp;";
echo "there is a \t$tab here.";

?>