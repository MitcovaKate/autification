
<?
$userJ  =[
    'username' => 'Kate',
    'email'=> 'tr@mail.ru',
    'password'=>'123',
    'active'=> true,
    'rating'=> 5
] 

?>

 <?
      function save_user($userJ){
file_put_contents("./user.json ",json_encode($userJ));
      } 

//function load_user(){
  // return  json_decode(file_get_contents("./data/userJ.json"),true);  
  //  }


      ?>
<?
function render($userJ){
   return     $template="<div>"."<h2>{$userJ['username']}</h2>"."</div>";
  
    }
?>
<?
save_user($userJ);
?>