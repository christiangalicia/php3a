<?php 
function tabla($cantidad){
    $r="";
    for($x=1; $x<= $cantidad;$x++) {
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
       <?php echo tabla(6) ?>
        </table>
    </body>
</html>
