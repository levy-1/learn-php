<?php
//COMPLETE PHP FORM
//algorith
//1. create variables that will store received data
$username = $first_name =$last_name = $email = $password1 = $password2 = $gender ='';
//2.create variables that will store error message
$username_err = $first_name_err =$last_name_err = $email_err = $password1_err = $password2_err = $gender_err ='';
//3.check if the data is empty
//    3.1 check the request method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    3.2 clean the data
    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $password1 = safisha($_POST['pass1']);
    $password2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);
//    3.3 check if data is empty
//      if true assign error messages to respective error variables
      if(empty($username)){
          $username_err = "please fill in your username";
      }
    if(empty($first_name)){
        $first_name_err_err = "please fill in your first name";
    }
    if(empty($last_name)){
        $last_name_err = "please fill in your last name";
    }
    if(empty($email)){
        $email_err = "please fill in your email";
    }
    if(empty($password1)){
        $password1_err = "please fill in your password";
    }
    if(empty($password2)){
        $password2_err = "please fill in your confirm password";
    }
//   check if password 1 and password2 are matching
    if($password1 != $password2){
        $password1_err ="your passwords did not match";
    }
     if(empty($password2)) {
         $password2_err = "please elect your gender";
     }
     echo"DETAILS:";
//4.display the dat :SOON store data in database
function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" METHOD="post" enctype="multipart/form-data">
    <fieldset>
        <h3>Register here...</h3>
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <span class="error" style="color: orangered"><?php echo $username_err?></span><br>

        <label for="">firstname</label><br>
        <input type="text" name="firs_name"><br>
        <span class="error" style="color: orangered"><?php echo $first_name_err?></span><br>

        <label for="">lastname</label><br>
        <input type="text" name="last_name"><br>
        <span class="error" style="color: orangered"><?php echo $last_name_err?></span><br>

        <label for="">email</label><br><br>
        <input type="email" name="email">
        <span class="error" style="color: orangered"><?php echo $email_err?></span><br>

        <label for="">password</label><br>
        <input type="password" name="pass1"><br>
        <span class="error" style="color: orangered"><?php echo $password1_err?></span><br>

        <label for="">confirm password</label><br>
        <input type="password" name="pass2"><br><br>
        <span class="error" style="color: orangered"><?php echo $password1_err?></span>
        Gender:
        <input type="radio" name="gender"><br>
        <input type="radio" name="gender"><br>
        <input type="radio" name="gender"><br>
        <button type="submit">signup</button>
    </fieldset>
</form>
