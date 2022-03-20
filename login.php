<?php require "function.php"; session_start();

if(isset($_SESSION['login'])){
  if($_SESSION['login']){
    header('Location: home');
  }
}

$err;

if (isset($_POST["username"])) {
  if (validateUser(userExist($_POST["username"]), $_POST["password"])){
    if(isset($_POST['remember'])){
      if($_POST['remember'] == 'on'){
        setcookie("login","true",time()+(60*2));
      }
    }
    $_SESSION['login'] = true;
    header('Location: home');
  }else{
    $_SESSION['login'] = false;
    $err = "username+or+password+wrong";
    header("Location: error.php?err=$err");
  }
}else{
  $err = "something went";
  header("Location: error.php?err=$err");
}

?>
