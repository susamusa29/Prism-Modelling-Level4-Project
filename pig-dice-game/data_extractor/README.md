### Prerequisites
If there is no PHP interperer installed, run the following command in the terminal, assuming the OS is Ubuntu:
```shell
sudo apt install php7.4-cli
```


### Script, which splits the first file in columns

To run the script, type the following command in the terminal:
```shell
php split_file.php
```

Parses the `score100.csv` file and creates a new `split_100.csv`, file.

The `score100.csv` file contains rows like '0:(1,0,0,0,0,0),0 throw1', which when parsed are going to result in an array with two columns:

- 0:(1,0,0,0,0,0)
- 0 throw1

The `split_100.csv` file will contain structured data with the following columns:

- **turn** - turn number
- **score1** - total score of the first player
- **score2** - total score of the second player
- **turn_score_1** - the score of the first player this turn
- **turn_score_2** - the score of the second player this turn
- **throw** - should the player throw the dice or not (could be `yes` or `no`)

### Script, which extracts meaningful data from the second file
To run the script, type the following command in the terminal:
```shell
php extract_data.php
```

Parses the `split_100.csv` file and creates a new `parsed_100.csv`, file. 
It will extract the maximum turn scores of the fist player, where he should stop throwing the dice.

For each of those scores, the `parsed_100.csv` file will contain a row, with the following columns: 

- **number** - row number from the `split_100.csv` file (for easier reference)
- **score1** - total score of the first player
- **score2** - total score of the second player
- **diff** - the difference between the scores of the players
- **win** - is the current throw is a winning throw for the first player (if it is, it will contain **1**)
- **turn_score_1** - the score of the first player this turn

