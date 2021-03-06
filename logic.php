<?php

//Declare arrays
$symbols = array('!','@','#','$','%','^','&','*');
$numbers = array('0','1','2','3','4','5','6','7','8','9');
$words = array();
$pwdArray = array();
$cleanArray = array();

/*Define function to read in CSV file with information about Chandra press releases
Searched for methods to read CSV file in php and used this:
http://www.codedevelopr.com/articles/reading-csv-files-into-php-array/ */
function readCSV($infile)
{
    $fileRead = fopen($infile, 'r');
    while (!feof($fileRead)) {
        $line[] = fgetcsv($fileRead, 1024);
    }
    fclose($fileRead);
    return $line;
}

$cxcData = readCSV('./cxc_sources.csv');
//note ignore 0th element as it's the header of the CSV
$entry = rand(1, count($cxcData)-2);
$data = array(
  'title' => $cxcData[$entry][7],
  'source' => $cxcData[$entry][8],
  'link' => $cxcData[$entry][10],
  'headline' => $cxcData[$entry][11],
  'image' => $cxcData[$entry][12]
);

/*
tried doing regex matching but wasn't getting consistent results
 (only want the first paragraph of a press release - plenty to work with there)
 looked into DOM type scraping and found this resource:
 http://blog.cnizz.com/2012/10/12/scrape-faster-with-php-domdocument-and-safely-with-tor/

Referenced this StackOverflow question on how to convert DOMElements into strings
http://stackoverflow.com/questions/8964674/php-domdocument-how-to-convert-node-value-to-string
 */
$content = @DOMDocument::loadHTML(file_get_contents($data['link']));
$grafList = $content->getElementsByTagName('p');
$i=0;
foreach ($grafList as $graf) {
    if ($i <= 1) {
        $words=preg_split('/\s+/', $content->saveHTML($graf));
        $i++;
    }
}

/*Clean the array to filter out any special characters as well
ignore any words with less than 4 characters */
foreach ($words as $word) {
    if (preg_match('/^[A-z]{4,100}+$/i', $word, $matches)) {
        array_push($cleanArray, $matches[0]);
    }
}

//Some sanity checks on the value entered for Number of Words (defaults to 4 if nothing entered)
if (isset($_GET['NumWords'])) {
    $numWords = $_GET['NumWords'];
} else {
    $numWords = 4;
}
if ($numWords < 4 || $numWords > 9) {
    $numWords=4;
}

/* Main loop to generate the password
   Check for capitalization option within this loop
   also, make sure all words are lowercase when caps checkbox isn't selected
*/
for ($i=0; $i <= $numWords-1; $i++) {
    if (isset($_GET['Capital'])) {
        array_push($pwdArray, strtoupper($cleanArray[rand(0, count($cleanArray)-1)]));
    } else {
        array_push($pwdArray, strtolower($cleanArray[rand(0, count($cleanArray)-1)]));
    }
}

/* Checks for adding Separators, Symbols and Numbers
   For Separator:
   If nothing set, default to dash, otherwise check for multiple characters
   and take the first, or just accept the single character provided by user.

   For Symbols and Numbers:
   If set, pop out the last string in the array and append
   symbol and/or number to that string and push it back in
*/
if (empty($_GET['Separator'])) {
    $sep = '-';
} elseif (strlen($_GET['Separator']) > 1) {
    $sep = substr($_GET['Separator'], 0, 1);
} else {
    $sep = $_GET['Separator'];
}
if (isset($_GET['Symbol'])) {
    $temp = array_pop($pwdArray) . $symbols[rand(0, 7)];
    array_push($pwdArray, $temp);
}
if (isset($_GET['Number'])) {
    $temp = array_pop($pwdArray) . $numbers[rand(0, 9)];
    array_push($pwdArray, $temp);
}
