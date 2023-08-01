<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
</head>
<body>
    <h1>Customer Entry Form</h1>
    <form method="post" action="add_data.php">
        <table>
            <tr>
                <td>Customer Name:</td>
                <td><input type="text" name="txtName" /></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="txtAddress" rows="4" cols="26"></textarea></td>
            </tr>
            <tr>
                <td>Contact No:</td>
                <td><input type="number" name="txtCon" /></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="txtCity" /></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="txtCountry" /></td>
            </tr>
        </table><br>
            &nbsp;&nbsp;&nbsp;<button name="btn_submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button name="btn_reset" type="reset">Reset</button>
    </form>
</body>
</html>