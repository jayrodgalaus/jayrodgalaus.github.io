
<pre>
    <?=$_SERVER['QUERY_STRING'] ?>
</pre>
<?php

$URL = explode("/",$_SERVER['QUERY_STRING']);
switch($URL[0]){//this is the category
    case 'info':
        require_once('articles/'.$URL['1'].'.php');
        break;
    case 'cert':
        require_once('certificates/certificate.php');
        break;
    default:
        require_once('home.php');
        break;
    
}
?>