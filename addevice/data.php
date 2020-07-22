<?php

$result = mail("gayaneyolchyan@gmail.com","Custumer's Message from Site", ."Name - ".$_GET['name'].", \r\n"Email - ".$_GET['email'], \r\nPhone Number - ".$_GET['date'].", \r\nProject description - ".$_GET['project']."");

if ($result) {
    echo 'Message has been sent successfully';
} else {
    echo 'Message has not been sent';
}

?>