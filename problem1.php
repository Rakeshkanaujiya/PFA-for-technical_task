

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="server"  placeholder="Enter number of servers" required>
        <input type="submit" name="sub">
    </form>
</body>
<?php
  
  

    if(isset($_POST['sub']))
    {
        $server = $_POST['server'];
        echo "Server : ".$server."<br>";
        for($a=1; $a<=5; $a++)
        {
            $z=rand(1, 100);
            echo $z."% ";
        }
    
        $last = $z % 100;
        echo "<br>".$last."%<br>";
    
        if($last<=50){
           echo "Number of running server is ".$server/2;
        }
        else{
            echo "Number of running server is ". 2*$server+1;
        }
    }
?>
</html>