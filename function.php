<?php require "db.php";

function noLogin()
{
  session_start();
  if(isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true'){
      $_SESSION['login'] = true;
    }
  }
  if(isset($_SESSION['login'])){
    if($_SESSION['login']){
      header('Location: home/');
    }
  }
}


function needLogin()
{
  session_start();
  if(isset($_SESSION['login'])){
    if(!$_SESSION['login']){
      header('Location: /');
    }
  }else{
    header('Location: /');
  }
}


function userExist($username)
{
    global $db;
    $query = "SELECT username FROM user WHERE username='$username'";
    $result = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        return true;
    }
    return false;
}

function validateUser($exist, $password)
{
    global $db;
    $query = "SELECT username FROM user WHERE password='$password'";
    $result = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    if ($result && $exist) {
        return true;
    }
    return false;
}

?>
