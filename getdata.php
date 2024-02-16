<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
<style>
    body{
        width: 100%;
        height: auto;
        background-image: url(img/b1.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
      padding-top:1%;
     
    }
    .d1{
        display: flex;
        justify-content:center;
    }
    table{
       color:white;
        border: 1px solid black;
        border-collapse: collapse;
        border:white;

    }
    h1{
        color:white;
        text-align: center;
    }
    td{
        padding: 15px;
    }
 b{
    color:black;
 }
</style>

</head>
<body>

<h1 class="">User Information</h1>

<div class="d1">

<?php


// echo "<pre>";
// print_r($_POST);

// fill handling
 
 if(isset($_POST['Register'])){
    extract($_POST);

$myfile =fopen("test.txt","a");

fwrite($myfile,"
<tr > <td> <b >  Full Name </b> </td> <td> <b>  Email </b> </td> <td> <b>Mobile number </b> </td> <td><b> Password</b> </td>  <td><b> Confirm Password</b></td>  </tr>

<tr> <td>  $Full_name </td> <td> $email </td>  <td> $Confirm_password </td> <td> $number </td> <td> $password </td> </tr> \n ");


fclose($myfile);

}
$myfile=fopen("test.txt","r");

$res=fread($myfile,filesize("test.txt"));
echo '<table class="t1  " border="1">';

echo $res;

echo '</table>';

fclose($myfile);

?>



</div>
    
</body>
</html>












