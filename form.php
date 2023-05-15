<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forumular</title>
</head>
<body>
    <h1>Formular</h1>
    <form method="POST" action="submit.php" class="form">
     <label for="">Name: </label>
     <input type="text" name="name">
     <label for="">Nachname: </label>
     <input type="text" name="nachname">
     <label for="">Geschlecht: </label>
     <select name="geschlecht" id="cars">
  <option value="male">Male</option>
  <option value="female">Female</option>
 
</select>
     <label for="">Alter: </label>
     <input type="number" name="alter">
 
     
     <input type="submit" value="Senden">

    </form>


</body>

<style>
    .form{
        display: grid;

    }
    .form *{
       margin-bottom: 4px;
        
    }
</style>
</html>


<?php
include("connect.php")


?>