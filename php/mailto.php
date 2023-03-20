<?php
if(isset($_POST['submit'])){
    $to = "gaboriszak46@gmail.com";

    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $body, $headers)){
        echo "Ajánlatkérése beérkezett hozzánk! Igykeszünk minnél előbb válaszolni!";
    }else{
         echo "Valami hiba történt az elküldés során!";
    }
}
?>
