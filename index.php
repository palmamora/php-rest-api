<?php

$method = strtoupper($_SERVER['REQUEST_METHOD']);
var_dump($_SERVER);

switch ($method) {
    case 'GET':{
            header('HTTP/1.0 200 OK');

            if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !==false) {
                header('Content-Type: application/json');
                $o = new stdClass();
                $o->response = 'inside application/json';
                //$o->date = date(DATE_RFC822);
                echo json_encode($o);
            } else {
                header('Content-Type: text/plain');
                echo 'inside text/plain';
                //echo date(DATE_RFC822);
                
            }
            break;
        }
    default:{
            header('HTTP/1.0 405 Method Not Allowed');
            break;
        }
}

?>