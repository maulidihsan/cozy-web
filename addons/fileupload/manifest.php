<?php

$routes[] = ['GET|POST', '/admin/fileupload/form', 'GoCart\Controller\AdminFileUpload#form'];
$routes[] = ['GET|POST', '/admin/fileupload/install', 'GoCart\Controller\AdminFileUpload#install'];
$routes[] = ['GET|POST', '/admin/fileupload/uninstall', 'GoCart\Controller\AdminFileUpload#uninstall'];
$routes[] = ['GET|POST', '/fileupload/upload-berkas', 'GoCart\Controller\FileUpload#uploadBerkas'];

$paymentModules[] = ['name'=>'Upload Berkas', 'key'=>'fileupload', 'class'=>'FileUpload'];