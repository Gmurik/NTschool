<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 24.12.2018
 * Time: 9:08
 */

namespace NtSchool\Action\User;


class UserListAction
{
 protected $renderer;
 protected $validator;


    public function __construct($renderer, $validator)
    {
        $this->renderer = $renderer;
        $this->validator = $validator;
    }

    public function __invoke()
 {
     // TODO: Implement __invoke() method.
 }
}