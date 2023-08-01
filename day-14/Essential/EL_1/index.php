<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Link -->
    <link type="text/css" rel="stylesheet" href="bootstrap 4 CDN/css/bootstrap.min.css" />
    <script type="text/javascript" src="bootstrap 4 CDN/js/bootstrap.min.js"></script>
    <title>INDEX PAGE</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .page_body{
            width: 100%;
            height: 100vh;
            display: flex;
        }
        .block1{
            width: 35%;
            height: 100vh;
            padding: 100px;
        }
        #block2{
            width: 65%;
            height: 100vh;
            padding: 100px;
        }
    </style>
    <script>

            

        

        function check_form(e){

            var fname = document.getElementById('txtFname').value;
            var lname = document.getElementById('txtLname').value;
            var age = document.getElementById('txtAge').value;
            var address = document.getElementById('txtAddress').value;
            
            //alert(fname+"\n"+lname+"\n"+age+"\n"+address);

            if(fname == "" || lname == "" || age == "" || address == ""){
                alert("Plzz fill the details");
            }
            else{
                send_resquest();
            }

            
        }

        function send_resquest(){

            var fname = document.getElementById('txtFname').value;
            var lname = document.getElementById('txtLname').value;
            var age = document.getElementById('txtAge').value;
            var address = document.getElementById('txtAddress').value;

var XMLHttp = new XMLHttpRequest();
XMLHttp.onreadystatechange = function(){
    if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
        document.getElementById('block2').innerHTML = XMLHttp.responseText;
    }
    else{
        document.getElementById('block2').innerHTML = "ERROR: resposing to the client machine";
    }
}
XMLHttp.open("GET","insert.php?fname="+fname+"&lname="+lname+"&age="+age+"&address="+address, false);
XMLHttp.send();

}
    </script>
</head>
<body>
    <div class="page_body">

        <div class="block1">
                <strong>First Name:</strong>
                <input type="text" id="txtFname" class="form-control" required /><br>
                <strong>Last Name:</strong>
                <input type="text" id="txtLname" class="form-control" required /><br>
                <strong>Age:</strong>
                <input type="number" id="txtAge" class="form-control" required /><br>
                <strong>Address:</strong>
                <input type="text" id="txtAddress" class="form-control" required /><br>
                <center><button class="btn btn-primary" onclick="check_form();">SAVE</button></center>
        </div>

        <div id="block2">
            <table class="table">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
                <?php
                
                $select_data = mysqli_query($con,"SELECT * FROM table1");
                while($row = mysqli_fetch_assoc($select_data)){
                    ?>

                <tr>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>

                    <?php
                }
                
                ?>
                
            </table>
        </div>

    </div>
</body>
</html>