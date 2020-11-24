<?php
namespace albertlarsan68\home;
require_once __DIR__ . '/vendor/autoload.php';

$version=1;
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
require __DIR__ . '/src/itemList.php';
try {
    if (isset($_GET['action'])) {
        if ($_GET['action']=='listItems') {
            $items=require('config/items.php');
            $list=new ItemList($items);
            echo $list->ItemList();
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