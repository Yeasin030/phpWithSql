<?php 
$data =file("mytext.txt");
//print_r($data);
foreach($data as $use){
    //echo $use."<br>";
    list($name,$email)=explode(" ",$use);
    //echo"Name : $name  Email : $email <br>";
    echo "<a href=\"mailto :$email\">$name</a> | ";


}



?>