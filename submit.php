<script> window.location.replace("http://boxstudio.hasansakalli.com/")</script>

<?php

$myServer= "";
$db_user= "";
$db_password="";
$db_name="";

$dbConnect= mysqli_connect($myServer, $db_user, $db_password, $db_name);

if(!$dbConnect)

{die ("Connection failed".mysqli_connect_error());

}

if(isset ($_POST ["firstname"], $_POST ["lastname"], $_POST ["email"], $_POST ["messages"])) {
    $newURL = "index.html";
    $firstname=$_POST ["firstname"];
    $lastname=$_POST ["lastname"];
    $email=$_POST ["email"];
    $messages=$_POST ["messages"];

    $dataAdd= "INSERT INTO boxstudio (firstname, lastname, email, messages) VALUES
    ('".$firstname."', '".$lastname."','".$email."','".$messages."')";

    if($dbConnect->query($dataAdd)===true)

    {
       echo "<script> alert('Message successful...')</script>" ;
     
        $dbConnect->close();
      
      
    }else{
        echo "<script> alert('Message failed')</script>" ;
       
    }
        
}



?>




