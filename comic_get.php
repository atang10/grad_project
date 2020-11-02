<?php
    $dh = "comics"; // all comic pictures in the comic directory
    $comic = "comic3.jpg";
    //Checks whole directory for comic picture wanted
    if(is_dir($dh)){
        $search_dir = opendir($dh);
        while($file = readdir($search_dir)){
            if($file == $comic){
		    //echo $file . "<br>";
                $loc = getcwd() . '/comics/';
                $copied = $loc . "copy_" . $file;
		//echo $loc;
                copy($loc . $file, $copied);
                echo "comics/" . "copy_" . $file;
            }
        }
        closedir($search_dir);
    }


?>
