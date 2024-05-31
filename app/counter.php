<?
session_start();
if(!isset($_SESSION['visited'])){
     $_SESSION['visited']=true; 
    $views=1;
    echo '<img src="https://cs8.pikabu.ru/post_img/2018/01/28/6/1517128224143180831.jpg" alt="Image">';
}
else{
  
    $views = $_SESSION['visited'] + 1; 
    $_SESSION['visited'] = $views;
   if($views <=3 ) {
    echo '<img src="https://cs8.pikabu.ru/post_img/2018/01/28/6/1517128224143180831.jpg" alt="Image">';
  }
}
echo "<h1>You visited {$views} times this page </h1>"

?>