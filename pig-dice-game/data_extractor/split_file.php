<?php
//open the current file with reading permissions
$handle = fopen('score100.csv', 'r');

//initialize the new file and open it with writing permissions
file_put_contents('split_100.csv', '');
$handle2 = fopen('split_100.csv', 'w');

//initialize an array, holding the CSV headers and place them in the new file
$headers = ['turn', 'score1', 'score2', 'turn_score_1', 'turn_score_2', 'throw'];
fputcsv($handle2, $headers);

//read the data in the existing file, row by row
while (($data = fgetcsv($handle)) !== false) {
    //split the string in the first column by colon (:)
    $cleanedData = explode(':', $data[0]);

    //get the second array element and remove the brackets (first and last character)
    $cleanedData = substr($cleanedData[1], 1, -1);

    //split the data by comma (,)
    $cleanedData = explode(',', $cleanedData);

    //use the string in the second column to determine should the player throw the dice or not
    $cleanedData[5] = stristr($data[1], 'notthrow1') ? 'no' : 'yes';

    //add a record with the cleaned and separated data in the new file
    fputcsv($handle2, $cleanedData);
}

//close the file handles and exit
fclose($handle);
fclose($handle2);
exit('Finished'.PHP_EOL);

