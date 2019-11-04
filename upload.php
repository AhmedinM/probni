<?php

//ne koristi se post za preuzimanje

$photo = $_FILES['photo'];
echo "<pre>";
//var_dump($photo);
echo "</pre>";
if(!is_dir('./images')){
    mkdir('./images');
}

for($i=0;$i<count($photo['name']);$i++){
    move_uploaded_file($photo['tmp_name'][$i],"./images/{$photo['name'][$i]}");
    echo "<br/>Slika broj: ".$i;
}
//move_uploaded_file($photo['tmp_name'],"./images/{$photo['name']}");

?>