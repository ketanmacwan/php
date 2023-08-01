<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DROP DOWN LIST</title>
</head>
<body>
    <form method="post" action="add.php">
    <select name="select_country">
        <option>Select Country</option>
        <?php
        $cou_quer = mysqli_query($con,"SELECT * FROM country_master");
        while($row = mysqli_fetch_array($cou_quer)){
            ?>
            <option value="<?php echo $row['cou_name']; ?>"><?php echo $row['cou_name']; ?></option>
            <?php
        }
        ?>

        </select><br><br>
        
        <select name="select_state">
            <?php
            
            $sta_query = mysqli_query($con,"SELECT * FROM state_master");
            while($row2 = mysqli_fetch_assoc($sta_query)){
                ?>
                <option value="<?php echo $row2['name']; ?>"><?php echo $row2['name']; ?></option>
                <?php
            }
            
            ?>
        </select><br><br>

        <select name="select_city">
            <?php
            
            $city_query = mysqli_query($con,"SELECT * FROM city_master");
            while($row3 = mysqli_fetch_assoc($city_query)){
                ?>
                <option value="<?php echo $row3['name']; ?>"><?php echo $row3['name']; ?></option>
                <?php
            }
            
            ?>
        </select><br><br>

        <input type="submit" name="btn_submit"/>
    </form>
</body>
</html>