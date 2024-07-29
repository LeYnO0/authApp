<?php

function abort($code = 404){

    http_response_code($code);
	require VIEWS . "/errors/{$code}.php";
	die;

}




?>