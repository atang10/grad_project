<?php
$X1 = $_GET["X1"];
$X2 = $_GET["X2"];
$Y1 = $_GET["Y1"];
$Y2 = $_GET["Y2"];
$id_label = $_GET["idlabel"];
$user_id = $_GET["userid"];
$copy_pic = explode("/",$id_label);
//echo "HI";
$x_size = abs($X2-$X1);
$y_size = abs($Y2-$Y1);
$crop = 'convert ' . $id_label . " -crop " . $x_size . "x". $y_size. "+". $X1 ."+" . $Y1 . " ". $copy_pic[0] ."/crop_" . $copy_pic[1];
$output = shell_exec($crop);
//echo $crop;
//echo "<br> <br>";
echo $copy_pic[0]. "/crop_" . $copy_pic[1];
?>
