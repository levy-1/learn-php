



<?php
//PHP $_POST is a PHP super global variable which is used to collet form data after submitting an html form with method="POST"
//$_POST is also widely used to pass variables.
//receive form data using POST request/$_POST[] superglobal
//rcive data
//declare variables to store sent data
$name = '';
$email ='';

//check the request method: GET or POST: use$_SERVER()
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//      if method is post,grab data using the $_POST superglobal
    $name = safisha($_POST('jina');
    $email = $_POST('arafa');
//      if name is empty
        if(empty($name)){
        }
            $error = true;
            echo "<p style='color: red'>please fill in your name</p>";
        }
        if(empty($email)) {
            $email = true;
            echo "<p style='color: red'>please fill in your email</p>";
        }else{
            $name = safisha($name);
            $email = safisha($email);

        }
//print the data
//  if (!$error){
//      echo "<p style='color: green'>your name is $name and email is $email</p><br>";
//  }


///validating/cleaning data
//1.To remove unanted space use: trim()
//2.To remove backslashes use stripslashes()
//<!--create a function to clean data-->

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>




<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'])?>" method="post">
    <h3>fill form...</h3>
    <input type="text" name="jina" placeholder="Enter name..." required>
    <input type="email" name="arafa" placeholder="Enter email..." required><br>
    <button type="submit">send</button>
<!--    action:location that data will be sent to in the server,value:lesson9.php-->
<!--    method: request method tobe used to end data to the server-->
<!--    name: is te key for a value entered in the form:-->
<!--    this will result to an associative array of this format-->
    <?php
    $_POST = array("jina"=>"john","arafa"=>"john@gmail.com")
    ?>
</form>
<!--$_GET:USED TO COLLECT DATA FROMAFORM JUST  LIKE$_POST-->
<!--      COLLECT DATA SENT VIA URL-->
<?php
//grabbing data sent by superglobal get()
$the_name = $_GET['name'];
$the_age = $_GET['age'];
$the_country = $_GET['country'];
echo "Your details: Name : $the_name, Age: $the_age, country: $the_country<br>"
?>
<a href="lesson9.php?name=levy&age=21&country=kenya">send details</a>