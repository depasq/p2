<?php
// Plan is to scrape text data from Chandra press release pages but for now test with these
$words = array('monkey', 'bar', 'apple', 'pizza', 'pole', 'board', 'pedal', 'guitar', 'computer', 'laptop', 'shift');
$symbols = array('!','@','#','$','%','^','&','*');
$numbers = array('0','1','2','3','4','5','6','7','8','9');
$pwdArray = array();

//Some sanity checks on the value entered for Number of Words (defaults to 4 if nothing entered)
if (isset($_GET['NumWords'])){
  $numWords = $_GET['NumWords'];
} else { $numWords = 4;
}
if ($numWords < 4 || $numWords > 9)
  $numWords=4;

/* Main loop to generate the password
   Check for capitalization within this loop to catch it early
*/
for ($i=0; $i <= $numWords-1; $i++){
    if (isset($_GET['Capital'])){
        array_push($pwdArray, strtoupper($words[rand(0,count($words)-1)]));
    } else { array_push($pwdArray, $words[rand(0,count($words)-1)]);
    }
}

/* Checks for adding Symbols and Numbers
   If set, pop out the last string in the array and append
   symbol and/or number to that string and push it back in
*/
if (isset($_GET['Symbol'])){
    $temp = array_pop($pwdArray) . $symbols[rand(0,7)];
    array_push($pwdArray, $temp);
}
if (isset($_GET['Number'])){
    $temp = array_pop($pwdArray) . $numbers[rand(0,9)];
    array_push($pwdArray, $temp);
}
