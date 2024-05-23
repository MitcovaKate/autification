<?
$user=[
    'username' => 'Kate',
    'email'=> 'tr@mail.ru',
    'password'=>'123',
    'active'=> true,
    'rating'=> 5
]

function renderProfile($user){
return $template="<div>"."<h2>{P$user['username']}</h2>"."</div>";
}
?>
<?
$html=renderProfile($user)?>