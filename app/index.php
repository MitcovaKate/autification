<?
require_once 'auth.php';
// register('test', 't@mail.ru', '12334');
// search($user);
if(!empty($_POST)){
//0a user enters data -> form
//0b get form data into variables
$username = $_POST['username'];
$password =$_POST['password'] ;;
// 1. authentice
$user = authenticate($username, $password);
//2 login the user into the sistem
if ($user){
login($user);
print("Welcome,{$username}!");
} else {
    print ("Wrong data!");
}
}
if(isset($_GET['logout'])){
    logout();
}

?><?
if(!if_loged_in()){ ?>
  <form action="index.php" method="POST">  
  <input type="text" name="username"><br/>
  <input type="password" name="password"><br/>
  <button>ENTER</button>
</form>
<?} else {?>

<h2>HEY USER</h2>
<a href="index.php?logout">LOGOUT</a>
<? } ?>


       