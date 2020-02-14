<?php
//In development we often need to store data collected from users of our systems
//My sql is the database base system used for both big and small businesses and it uses the sql(STRUCTURED QUERY LANGUAGE) to
//interact with data
//A db is made up of related tables
//
//before using the database you have to connect to it by providing the following info
//    :1.hostname
//     2.username
//     3.password
//     4.database name
//
//php has helper function that will make database interactions easy

//>CONNECTING TO THE DATABASE
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';
//to connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
$connection = mysqli_connect($hostname,$username,$password,$password);
//check connection
if($connection == false){
    echo"connection not successful";
//    stop connection if unsuccessful
    die("ERROR: ".mysqli_connect_error());
}
//Inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'ronny','ron','levy','ron74@gmail.com','pass1234','male')";
if(mysqli_query($connection,$sql)){
    echo "DATA Inserted successfully";
}else{
    echo"DATA NOT INSERTED ".mysqli_error($connection);
}
//create a database










?>
