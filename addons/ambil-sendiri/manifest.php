<?php

$routes[] = ['GET|POST', '/admin/ambil-sendiri/form', 'GoCart\Controller\AdminAmbil#form'];
$routes[] = ['GET|POST', '/admin/ambil-sendiri/install', 'GoCart\Controller\AdminAmbil#install'];
$routes[] = ['GET|POST', '/admin/ambil-sendiri/uninstall', 'GoCart\Controller\AdminAmbil#uninstall'];

$shippingModules[] = ['name'=>'Ambil Sendiri', 'key'=>'ambil-sendiri', 'class'=>'Ambil'];