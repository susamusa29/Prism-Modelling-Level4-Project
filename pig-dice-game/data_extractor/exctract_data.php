<?php
//open the current file with reading permissions
$handle = fopen('split_100.csv', 'r');

//initialize the new file and open it with writing permissions
file_put_contents('parsed_100.csv', '');
$handle2 = fopen('parsed_100.csv', 'w');

//initialize an array, holding the CSV headers and place them in the new file
$headers = ['number', 'score1', 'score2', 'diff', 'win', 'turn_score_1'];
fputcsv($handle2, $headers);

//initialize a variable, which will store the score of the 2nd player, outside the loop
$score2 = null;

//read the data in the existing file, row by row
$i = 0;
while (($data = fgetcsv($handle)) !== FALSE) {
    $i++;
    //skip the header row
    if ($i === 1) {
        continue;
    }

    //skip all records, when the player has to throw the dice
    if ($data[5] === 'yes') {
        continue;
    }

    //if the data for this score is already available, skip the record
    if ($score2 == $data[2]) {
        continue;
    }

    $score1 = $data[1];
    $score2 = $data[2];
    $turnScore1 = $data[3];
    //the difference between the scores of the two players
    $diff = $score2 - $score1;
    //is this a winning throw for the first player
    $win = ($turnScore1 + $score1) >= 100;

    $row = [
        $i,
        $score1,
        $score2,
        $diff,
        $win,
        $turnScore1,
    ];

    //add a record with the scores in the new file
    fputcsv($handle2, $row);
}

//close the file handles and exit
fclose($handle);
fclose($handle2);
exit('Finished'.PHP_EOL);

