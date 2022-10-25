<?php

require_once('views/base.php');

echo 'hello world'; 

switch($_SERVER['REQUEST_URI']) {
    case '/':
        echo 'ACCUEIL';
        break;
    case '/contact':
        echo 'CONTACT';
        break;
    
}

/* if ($_SERVER['REQUEST_URI']==='/') {
    echo 'ACCUEIL';
}
elseif($_SERVER['REQUEST_URI']==='/contact'){
    echo 'CONTACT';
}  */

?>