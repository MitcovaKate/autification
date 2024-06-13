<?
require_once 'auth.php';
register('test', 't@mail.ru', '12334');
// search($user);

//0a user enters data -> form
//0b get form data into variables
$username = 'dr.dre';
$password = '345';
// 1 authentice
$user = authenticate($username, $password);
//2 login the user into the sistem
if ($user){
login($username);
print("Welcome,{$usrname}!");
} else {
    print ("Wrong data!");
}
?>


       