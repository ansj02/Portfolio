<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "1111"){
    	echo("<script>location.href='http://webproject-imols.run.goorm.io/webproject/home.html';</script>"); 
    } else {
        echo "404 not found";
    }
  ?>
</body>
</html>