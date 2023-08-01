<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration form</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .heading{
            padding: 10px;
            text-align: center;
            font-size: 40px;
            background-color: whitesmoke;
        }
        form{
            margin: auto;
            width: fit-content;
            border: 2px solid black;
            padding: 10px;
            margin-top: 20px;
        }
        td{
            padding: 10px;
        }
    </style>

    <script>
        var fname;
        var dob;
        var email;
        var gender;
        var hobby;
        function validate(){
            fname = document.getElementById('fname');
            dob = document.reg_form.dob;
            gender = document.reg_form.gender;
            email = document.reg_form.email;
            hobby = document.reg_form.h;

            var pass = document.reg_form.pass;
            var repass = document.reg_form.repass;

            if(fname.value.length <= 0){
                alert("Name is Required");
                fname.focus();
                return false;
            }
            else{
                var str = fname.value;
                var regEx = /^[A-Za-z]+$/;

                if(str.match(regEx) == null){
                    alert("only alphabet is allowed");
                    return false;
                }
            }

            if(gender.value.length <= 0){
                alert("gender is required");
                gender.focus();
                return false;
            }

            if(email.value.length <= 0){
                alert("email is required");
                email.focus();
                return false;
            }
            else{
                email = email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.indexOf(".");
                if(atpos<4 || dotpos<atpos+3){
                    alert("invalid email");
                    return false;
                }
            }

            if(pass.value.length <= 0){
                alert("password is required");
                pass.focus();
                return false;
            }else{
                if(pass.value.length < 8){
                    alert("password must be of 8 character");
                    return false;
                }
            }
            if(repass.value.length <= 0){
                alert("re password is required");
                repass.focus();
                return false;
            }
            else{
                pass = pass.value;
                repass = repass.value;
                if(pass.localeCompare(repass) != 0){
                    alert("Password must be same");
                    return false;
                }
            }
            return true;
        }

        function form_validate(){
            if(validate()){
                alert("Form validate successfully..!");
                document.getElementById("data").innerHTML = fname.value+'<br>'+dob.value+'<br>'+gender.value+'<br>'+hobby.value+'<br>';
                return false;
            }
            else{
                alert("form not submited");
                return false;
            }
        }

    </script>
</head>
<body>
    <h1 class="heading">Registration Form</h1>
    <hr>
    <form method="" action="" name="reg_form" id="reg_form" onsubmit="return form_validate();">
        <table>
            <tr>
                <td colspan="2" align="center"><h3>Form validation</h3></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" id="fname" /></td>
            </tr>
            <tr>
                <td>Birth Date:</td>
                <td><input type="date" id="date" /></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>Male <input type="radio" value="male" id="gender" name="gender" />&nbsp;&nbsp;
                Female <input type="radio" id="gender" value="female" name="gender"/></td>
            </tr>
            <tr>
                <td>Hobby:</td>
                <td>
                    Reading <input type="checkbox" id="h"/>
                    Writing <input type="checkbox" id="h"/>
                    singing <input type="checkbox" id="h"/>
                    playing <input type="checkbox" id="h"/>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" name="email" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" id="pass" name="pass"/></td>
            </tr>
            <tr>
                <td>Re-type password</td>
                <td><input type="password" id="repass" name="repass" /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" />
                    <input type="reset" />
                </td>
            </tr>
        </table>
        <div id="data"></div>
    </form>
</body>
</html>