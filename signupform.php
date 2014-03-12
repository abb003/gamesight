<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>signupform</title>
</head>

<body>

<?php
$error=FALSE;
 
if(!empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    if (!preg_match("/^[A-Za-z]{1,25}$/", $username)) {
        $error=TRUE;
        $messages['username']="Error - Invalid username"; 
    }
} else {
    $username="";
    $error=TRUE;
    $messages['username']="Error - Invalid Username";
}
 
if(!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
    if (!preg_match("/^[A-Za-z]{1,25}[@]$/", $email)) {
        $error=TRUE;
        $messages['email']="Error - Invalid Email"; 
    }
} else {
    $error=TRUE;
    $messages['email']="Error - Invalid Email";
}
 
if(!empty($_REQUEST['sex'])) {
    $sex = $_REQUEST['sex'];
    if (!preg_match("/^(male|female)$/", $sex)) {
        $error=TRUE;
        $messages['sex']="Error - Invalid Sex"; 
    }
} else {
    $error=TRUE;
    $messages['sex']="Error - No sex selected";
}
 
    }
 }
}
 
if($error==TRUE) {
    include("signup.php");
} else {
    include("default.php");
}
?>



</body>

</html>
