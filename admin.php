<?php
    $a=$_REQUEST['username'];
    $b=$_REQUEST['password'];
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"chesterfield");
    $query="select username,password from Admin where (username='$a')";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($result);

    if(($row['username']==$a)and($row['password']==$b)){
    $welcome="<center><h1>Welcome, Admin<h1></center>";
    echo $welcome;
    // include ".html";
    }
    else{
        echo "Wrong password! Try again!";
    }
?>