<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajax validation form</title>
    <script src="script.js"></script>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .form_body{
            width: 100%;
            height: 100vh;
        }
        .form_box{
            width: 400px;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: whitesmoke;
        }
        .form_box h1{
            background-color: lightblue;
            padding-bottom: 20px;
            padding-top: 20px;
            text-align: center;
        }
        td{
            padding: 10px;
        }
        #txtSubmit{
            width: 100px;
            padding: 4px 20px 2px 20px;
            background-color: lightblue;
            border: none;
        }
    </style>


</head>
<body>
    <div class="form_body">
        <div class="form_box">
            <h1>Fill Your Information!</h1>
            <form method="post" action="newpage.php" name="myform" id="myform">
                <table width="100%">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" id="txtUser" name="txtUser" onblur="validate('username', this.value);" /></td>
                        <td><div id="username"></div></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" id="txtPass" name="txtPass" onblur="validate('password', this.value);" /></td>
                        <td><div id="password"></div></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="txtEmail" name="txtEmail" onblur="validate('email', this.value);" /></td>
                        <td><div id="email"></div></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td><input type="web" id="txtWeb" name="txtWeb" onblur="validate('website', this.value);" /></td>
                        <td><div id="website"></div></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" onclick="checkform();" id="txtSubmit" name="txtSubmit"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>