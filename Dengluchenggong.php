<?php
    $name = $_POST["name"];
    $password = $_POST["password"];
    mysql_connect("localhost:3306","root","");  
    mysql_select_db("xianghanlilian");  

    $sql = "select * from namepassword  where (name = \"$name\")";
    $result = mysql_query($sql);
    $tmp = mysql_fetch_array($result);
    $tname = $tmp[0];
    $tpassword = $tmp[1];
    if ($result != false && $password == $tpassword) {
       echo   "<script>alert('successful login');</script>";
       setcookie("test-name",$name);
    }
    else
    {  
        echo "<script>alert('no such a user');</script>"; 
        history.go(-1); 
    }
?>  
