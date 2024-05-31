<?
function register($username,$email,$password){
   if(search($username)){
    print('ERROR:username is not free');
   }
   else{
    $user=[
        $username,
        $email,
        $password,
        true,
        0.0
    ];
    $fp=fopen('users.csv', 'a');
    fputcsv($fp, $user);
    fclose($fp);
}
}
//hw2   other way
// function register2($username, $email, $password) {
//     $error = search($username) ? 'ERROR: Username is not available' : false;

//     if (!$error) {
//         $user = [
//             'username' => $username,
//             'email' => $email,
//             'password' => $hashedPassword,
//             'active' => true,
//             'rating' => 0.0,
//         ];

//         $fp = fopen('users.csv', 'a');
//         fputcsv($fp, $user);
//         fclose($fp);

//         print('successful!'); 
//     } else {
//         print($error);
//     }
// }
//

function unregister($username){

}

function authenticate($username,$password){
    $fp=fopen('users.csv', 'r');
    while(true){
        $user=fgetcsv($fp);
    if($user === false || $user[0] === $username && $user[2] === $password)
    break;
    }
    fclose($fp);
    return $user;
}     


function login($username){


}

function logout($username){

}


// helpers
function search($username){
    $fp=fopen('users.csv', 'r');
    while(true){
        $user=fgetcsv($fp);
    if($user === false || $user[0] === $username)
    break;
    }
    fclose($fp);
    return $user;
}
?>