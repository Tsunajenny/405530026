<?php

 $height = $_POST['height'];
 $weight = $_POST['weight'];

if(is_numeric($height) && is_numeric($weight)){
    $BMI = $weight / ($height * $height);
    echo "BMI = " . $BMI;
}
else if(empty($height) && empty($weight)){
    echo "請輸入所有信息";
}
else
{
    echo "輸入錯誤";
}

 
echo '<br>';

if ($_FILES["file"]["error"] > 0){
    echo (" ");
}

$filename = $_FILES["file"]["name"];
$allowed =  array('gif','png' ,'jpg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(empty($filename)){
    echo "empty";
}
else if(!in_array($ext,$allowed) ) {
    echo 'wrong file type';
}else{
    move_uploaded_file($_FILES["file"]["tmp_name"],'upload/'.$_FILES["file"]["name"]);
    echo '<img src = "upload/'.$filename.'"/>';
}


?>
    
    　
 


