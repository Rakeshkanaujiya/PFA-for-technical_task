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
    <table border="1px solid black" cellspacing="0px">
        <tr>
            <th>Bread:</th>
            <td><input type="number" name="bread" placeholder="Number of breads" required></td>
        </tr>
        <tr>
            <th>Vada:</th>
            <td><input type="number" name="vada" placeholder="Number of Vada" required></td>
        </tr>
        <tr>
            <th>Samosa:</th>
            <td><input type="number" name="samosa" placeholder="Number of Samosa" required></td>
        </tr>
        <tr>
            <th>Vadapaw:</th>
            <td><input type="number" name="vp" value="" placeholder="10 Rs." required readonly>Fix rate</td>

        </tr>
        <tr>
            <th>Samosapaw:</th>
            <td><input type="number" name="sp" value="" placeholder="15 Rs." required readonly>Fix rate</td>
            
        </tr>
        <tr="2">
            <td colspan="2" align="center"><input type="submit" name="sub"></td>
        </tr>
        <tr="2">
            <td colspan="2" align="center">    <?php

                if(isset($_POST['sub'])){
                    $b=$_POST['bread'];
                    $v=$_POST['vada'];
                    $s=$_POST['samosa'];
                    $bv=10;
                    $bs=15;
                    $vp= $v*$bv;
                    $sp= $s*$bs;
                    $total=$vp+$sp;
                    $total;
                    $used_b = $v+$s;
                    $waste = $b-$used_b;
                    $lost_a = $waste*2.5;
                    $lost_a;
                    $profit = $total - $lost_a;
                    echo "Maximum Profit possible is ".$profit." Rs.";

                } ?></td>
        </tr>
    </table>
        
    </form>

</body>
</html>