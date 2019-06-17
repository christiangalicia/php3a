<?php 
function tabla(int $valorInicial=1,int $cantidad=10) :string{
    $r="";
    for($x=$valorInicial; $x<= $cantidad;$x++) {
            $r =$r. "<tr><td>The number is:".$x."</td></tr>";           
    }
    return $r;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
       <?php echo (tabla(5,20))  ?>
        </table>
    </body>
</html>
