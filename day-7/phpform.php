<?php 
	

    $name = $_POST['text_name'];
    $email = $_POST['text_email'];
    $web = $_POST['text_web'];
    $comment = $_POST['text_comment'];
    $gender = $_POST['rdo_gender'];

    if(!$name || !$email || !$gender)
    {
    	header("location:day7 q2.php");
   	}
    else
    {
    echo "Name: ".$name."<br>";
    echo "Email: ".$email."<br>";
    echo "Website: ".$web."<br>";
    echo "Comment: ".$comment."<br>";
    echo "Gender: ".$gender;
    }

?>