<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1">

    </head>
    <body>
    <?php
    $filteredMonth = "April";
    $OriginalDate = ("2021-02-12");
    $dateP = date_create($OriginalDate);
    $dateP = date_format($dateP,"M");
    echo $OriginalDate. "<br>";
    echo $dateP. "<br>";
    if($dateP === $filteredMonth){
      echo "true";
    }
    else {
      echo "false";
    }
    echo time();
    ?>
    </body>
</html>