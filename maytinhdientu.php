<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" media="screen" />
</head>

<body>
    <?php 
      $n1 = "";
      $n2 ="";
      $caculate ="";
        if (isset($_POST["number1"])&& isset($_POST["number2"]) && isset ($_POST["caculate"])) {
        $n1 =$_POST["number1"];
        $n2 =$_POST["number2"];
        $caculate =$_POST["caculate"];
        $flag = true;
        if (is_numeric($n1) && is_numeric($n2)) {
            switch ($caculate) {
                case "+":
                    $result = $n1+$n2;
                    break;
               case "-":
                    $result = $n1-$n2;
                    break;
               case "*":
               case "x":    
                   $result = $n1*$n2;
                    break;
               case "/":
               case ":":   
                $result = $n1/$n2;
               break;
               case "%":
                   $result = $n1%$n2;
                  break;        
                
                default:
                $result = $n1+$n2;
                $caculate = "+";
                    break;
            }
        }else{
            echo $result = "Khong Thuc Hien Duoc" ;
            $flag =false;
        }
         
        }
    ?>
    <div class="content">
        <h1> Mo Phong May Tinh Dien Tu</h1>
        <form action="#" method="post" name="main-form">
            <div class="row">
                <span>So Thu Nhat</span>
                <input type="text" name="number1" value="<?php echo $n1;?>" />
            </div>
            <div class="row">
                <span>Phep Toan</span>
                <input type="text" name="caculate"  value="<?php echo $caculate;?>"/>
            </div>
            <div class="row">
                <span>So Thu 2</span>
                <input type="text" name="number2"  value="<?php echo $n2;?>" />
            </div>
            <div class="row">
                <input type="submit" value="Xem ket qua" name="Submit" />
            </div>
            <div class="row">
                <p><?php
                if($flag==true){
                  echo  "Ket Qua :" .  $n1 . " " . $caculate . " " . $n2 . " ". "= ". $result ;
                }else
                    {
                        echo "Khong Thu Hien Duoc ";
                 } 
                 ?>
                    </p>
            </div>
        </form>
    </div>
</body>

</html>