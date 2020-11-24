<?php
$version=1;
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
try {
    if (isset($_GET['action'])) {
        if ($_GET['action']=='listItems') {
            require('itemList.php');
            echo ItemList(array(
                '1' => array('location' => 'albertlarsan', 'text' => 'AlbertLarsan.test'),
            ));
        } elseif ($_GET['action']=='goto') {
            if (isset($_GET['location'])) {
                header('Location: '.$uri.'/'.$_GET['location']);
            }
        }
        
    } else {
        header("Location: ?action=listItems");
        
    }
    
} catch (\Throwable $th) {
    echo "Erreur : ".$th->getMessage();
}