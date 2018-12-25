<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 25.12.2018
 * Time: 8:40
 */

namespace NtSchool\Action;


trait AdminAuthTrait
{
static public function checkAuth(){
    if(!$_SESSION['user']){
        header('location: /sign-in');
        exit();
    }
}
}