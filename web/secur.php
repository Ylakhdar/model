<?php


App::getDatabase();


if (isset($_GET['p'])) {
    /**
     *permet d'eviter les attaques XSS
     **/
    $p = htmlentities($_GET['p']);
    if (preg_match('/script/', $p)) {
        header('HTTP/1.1 400 Forbidden');
        die();
    }

} else {
    $p = 'home';
}

ob_start();
if ($p === 'home') {
    require '../inclure/view/pages/home.php';

} elseif ($p === 'single') {

    require '../inclure/view/pages/single.php';
}
$content = ob_get_clean();


require '../inclure/view/template/default.php';
