<?php 
	
    session_start();
    $name = $_POST['text_name'];
    $email = $_POST['text_email'];
    $web = $_POST['text_web'];
    $comment = $_POST['text_comment'];
    $gender = $_POST['rdo_gender'];
    //var_dump($_POST);
    if(!$name || !$email || !$web || !$comment || !$gender)
    {
        $_SESSION['post_values'] = $_POST;
        $_SESSION['error'] = "all fields are required";
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