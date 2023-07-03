<?php

    $results = [
                    [
                        'homeTeam' => 'Atlanta Hawks',
                        'awayTeam' => 'Charlotte Hornets',
                        'homePoints' => '89',
                        'awayPoints' => '99',
                    ],
                    [
                        'homeTeam' => 'Miami Heat',
                        'awayTeam' => 'Orlando Magic',
                        'homePoints' => '101',
                        'awayPoints' => '104',
                    ],
                    [
                        'homeTeam' => 'Washington Wizards',
                        'awayTeam' => 'Boston Celtics',
                        'homePoints' => '92',
                        'awayPoints' => '100',
                    ],
                    [
                        'homeTeam' => 'Brooklyn Nets',
                        'awayTeam' => 'New York Knicks',
                        'homePoints' => '106',
                        'awayPoints' => '107',
                    ],
                    [
                        'homeTeam' => 'Philadelphia 76ERS',
                        'awayTeam' => 'Toronto Raptors',
                        'homePoints' => '92',
                        'awayPoints' => '93',
                    ],
                    [
                        'homeTeam' => 'Chicago Bulls',
                        'awayTeam' => 'Cleveland Cavaliers',
                        'homePoints' => '89',
                        'awayPoints' => '101',
                    ],
                    [
                        'homeTeam' => 'Detroit Pistons',
                        'awayTeam' => 'Indiana Pacers',
                        'homePoints' => '90',
                        'awayPoints' => '83',
                    ],
                    [
                        'homeTeam' => 'Los Angeles Lakers',
                        'awayTeam' => 'Milwaukee Bucks',
                        'homePoints' => '130',
                        'awayPoints' => '99',
                    ],
                ];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>snack 1</title>
    </head>
    <body>
        <h1>NBA TODAY</h1>
            <?php foreach($results as $match) 
            {?>
                <p><?php echo $match['homeTeam'].' - '.$match['awayTeam'].' | '.$match['homePoints'].' - '.$match['awayPoints']?></p>
            <?php }?>
    </body>
</html>
    