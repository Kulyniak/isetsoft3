<?php
$fname = $_POST['Fname'];
if (!preg_match ("/^[a-zA-z]/", $fname) ) {
    $ErrMsg = "Incorrect first name. Only alphabets letters are allowed.";
    echo $ErrMsg;
}
$lname = $_POST['Lname'];
if(!preg_match("/^[a-zA-z]/", $lname)){
    $ErrMsg2 = "Incorrect last name. Only alphabets letters are allowed.";
    echo $ErrMsg2;
}
$phon = $_POST["phone"];
if (!preg_match ("/^[0-9]*$/", $phon) ) {
    $ErrMsg3 = "Wrong telephone number. Only numeric value is allowed.";
    echo $ErrMsg3;
}


//$json_data = json_encode($_POST);
//$file = fopen('users.txt', 'a');
//fwrite($file, $json_data);
//fclose($file);
//var_dump($json_data);
$json_data = json_encode($_POST);
$json_str = file_put_contents('users.txt', $json_data, FILE_APPEND);
echo 'Data saved successfully!';
//$data = file_put_contents('users.txt', json_encode($_POST).PHP_EOL, FILE_APPEND);
//string json