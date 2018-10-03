<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Trains</title>
</head>
<body>

        <Form action="TwoTrains.php" method="POST">
        <p>Train A Speed<input type="text" name="trnsp1" method="POST"></p>
        <p>Train B Speed<input type="text" name="trnsp2" method="POST"></p>
        <p>Distance<input type="text" name="distan" method="POST"></p>
        <p style="text-align: center;"><input type="reset" value="Clear Form">&nbsp;&nbsp;</p>
        <p style="text-align: center;"><input type="submit" value="Send Form"></p>
        </Form>
    <?php
        $speedA = $_POST['trnsp1'];
        $speedB = $_POST['trnsp2'];
        $distanceA = $_POST['distan'];
        
        $distanceA = (($speedA / $speedB)* $distance) / (1 + ($speedA / $speedB));
        $distanceB = $distance - $distanceA;
        $timeA = $distanceA / $speedA;
        $timeA = $distanceB / $speedB;
    ?>
</body>
</html>