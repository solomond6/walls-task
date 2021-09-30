<?php 

//seven display representation
$representations = [
    '0'=> ['###', '# #', '# #', '# #', '###'],
    '1'=> ['  #', '  #', '  #', '  #', '  #'],
    '2'=> ['###', '  #', '###', '#  ', '###'],
    '3'=> ['###', '  #', '###', '  #', '###'],
    '4'=> ['# #', '# #', '###', '  #', '  #'],
    '5'=> ['###', '#  ', '###', '  #', '###'],
    '6'=> ['###', '#  ', '###', '# #', '###'],
    '7'=> ['###', '  #', '  #', '  #', '  #'],
    '8'=> ['###', '# #', '###', '# #', '###'],
    '9'=> ['###', '# #', '###', '  #', '###'],
    '.'=> ['   ', '   ', '   ', '   ', '  #'],
];



$timeRepresentation = [];

//get all the time from 00:00 to 23:59 and add to the timeRepresentation array
for($hour = 0; $hour < 24; $hour++){
    $timetoprint = date('G:i',mktime($hour,0,0,1,1,2011));
    array_push($timeRepresentation, $timetoprint);
    for($minute = 0; $minute < 60; $minute++){
        $timetoprintm = date('G:i',mktime($hour,$minute,0,1,1,2011));
        array_push($timeRepresentation, $timetoprintm);
    }
}


$hashlengthArr = [];

//loop through the timeRepresentation array
foreach ($timeRepresentation as $tkey => $tvalue) {

    //replace all collon in the value
    $replaceCollon = str_replace(":", "", $tvalue);

    //split the string in letters
    $splitTimeString = str_split($replaceCollo);
    
    $hasharray = [];
    
    //loop through the split string, get the seven display representation and push the value into an empty hash array
    foreach ($splitTimeString as $key => $value) {
        array_push($hasharray, str_replace(" ", "", join(" ", $representations[$value])));
    }
    
    //check the length of the time string represenattion and add to the empty array with key 
    $hashlength = strlen(join("",$hasharray));
    $hashlengthArr[$tvalue] = $hashlength;
}

//get the maximum value in the array with the key
$maxVal = max($hashlengthArr);
$maxKey = array_search($maxVal, $hashlengthArr);

echo 'Most amount of power is used by the clock at:' . $maxKey 

?> 