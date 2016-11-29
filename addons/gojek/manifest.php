<?php

$routes[] = ['GET|POST', '/admin/gojek/form', 'GoCart\Controller\AdminGoJek#form'];
$routes[] = ['GET|POST', '/admin/gojek/install', 'GoCart\Controller\AdminGoJek#install'];
$routes[] = ['GET|POST', '/admin/gojek/uninstall', 'GoCart\Controller\AdminGoJek#uninstall'];

$shippingModules[] = ['name'=>'Go-Jek', 'key'=>'gojek', 'class'=>'GoJek'];