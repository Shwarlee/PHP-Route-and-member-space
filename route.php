<?php

$request = str_replace("/registration/public","",$_SERVER['REQUEST_URI']);



ob_clean();

switch ($request) {
    case '/' :
    case '' :
        require dirname(__FILE__) . '/content.php';
        break;
    case '/login' :
        require dirname(__FILE__) . '/login.php';
		break;	
    case '/admin' :
        require dirname(__FILE__) . '/admin/home.php';
        break;
    case '/admin/add_user' :
        require dirname(__FILE__) . '/admin/add_user.php';
        break;
    case '/logout' :
        require dirname(__FILE__) . '/logout.php';
        break;
    case '/register' :
        require dirname(__FILE__) . '/register.php';
        break;
    default:
        http_response_code(404);
        require dirname(__FILE__) . '/error.php';
        break;
    }
    

    
    