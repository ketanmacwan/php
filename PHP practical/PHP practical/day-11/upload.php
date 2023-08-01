<?php

    if(isset($_POST['btn_upload'])){

        $file_name = $_FILES['fup_file']['name'];
        $file_tmp = $_FILES['fup_file']['tmp_name'];

        $file_loc = "images/" . $file_name;
        $upload = move_uploaded_file($file_tmp,$file_loc);

        if($upload){
            echo "File uploaded successfully...!";
        }
        else{
            echo "Failed to upload the file...!";
        }


    }

?>
<a href="images/<?php echo $file_name; ?>" download="<?php echo $file_name; ?>">Download file</a>