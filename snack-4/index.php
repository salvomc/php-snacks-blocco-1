<?php

    $arrayNumbers = [];
    while (count($arrayNumbers) < 15) 
    {
        $number = rand(1, 100);
        if (!in_array($number, $arrayNumbers)) 
        {
            $arrayNumbers[] = $number;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>snack 4</title>
    </head>
    <body>
        <ul>
            <?php foreach($arrayNumbers as $number) 
            { ?>
                <li>
                    <?php echo $number;
                    ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>