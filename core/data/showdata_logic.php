<?php

function getUserData()
{

    require  CORE . '/dbconn.php';
    require STMT_FUNCS . '/select_user.php';


    dump($_SESSION['user']);
    die();

    if (isset($_SESSION['user']['mail'])) {
        dump(mailSelect($_SESSION['user']['mail']));
    } elseif (isset($_SESSION['user']['phone'])) {
        dump(phoneSelect($_SESSION['user']['phone']));
    }
}
