<?php

    $fileName = time().'-'.$_FILES['myfile']['name'];
    echo $fileName."<br>";
    echo $_FILES['myfile']['type']."<br>";
    echo $_FILES['myfile']['size']."<br>";

    echo $_FILES['myfile']['error']."<br>";

    var_dump($_FILES['myfile']);
    echo "<br>";
    print_r($_FILES['myfile']['name']);
    echo "<br>";

    /*if(!file_exists($dir)){
        mkdir($dir,0777);
    }*/

    $tmpFile = $_FILES['myfile']['tmp_name']; //временная директория

    $dir = 'uploadFiles/'.$fileName;
    move_uploaded_file($tmpFile, $dir);


?>