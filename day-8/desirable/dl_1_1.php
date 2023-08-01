<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies program</title>
</head>
<body>
    <form method="post" action="dl_1_2.php">
        <select name="select_details">
            <option value="Monitor">Monitor</option>
            <option value="cpu">CPU</option>
            <option value="keyboard">Keyboard</option>
            <option value="mouse">Mouse</option>
            <option value="GamePad">GamePad</option>
        </select><br><br>
        <input type="checkbox" name="chkdetails"/>Show full details<br><br>
        <input type="submit" value="View Information" name="btn_submit"/>
    </form>
</body>
</html>