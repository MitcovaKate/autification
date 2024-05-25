
<?
$user  =[
    'username' => 'Kate',
    'email'=> 'tr@mail.ru',
    'password'=>'123',
    'active'=> true,
    'rating'=> 5
] 

?>

 <?
      function save_user($user){
file_put_contents("./user.json ",json_encode($user));
      } 

//function load_user(){
  // return  json_decode(file_get_contents("./data/user.json"),true);  
  //  }


      ?>
<?
function render($user){
   return     $template="<div>"."<h2>{$user['username']}</h2>"."</div>";
  
    }
?>
<?
save_user($user);
?>