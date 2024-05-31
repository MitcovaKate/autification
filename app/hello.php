<?
session_start();
if(isset($_SESSION['visited'])){
    print ("I know you!");
}
else{
    $_SESSION['visited']=true;
    print('WELCOME');
}
?>