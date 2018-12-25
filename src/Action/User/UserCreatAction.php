<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 24.12.2018
 * Time: 9:08
 */

namespace NtSchool\Action\User;


use Psr\Http\Message\ServerRequestInterface;

class UserCreatAction
{
 protected $renderer;
 protected $validator;


    public function __construct($renderer, $validator)
    {
        $this->renderer = $renderer;
        $this->validator = $validator;
    }

    public function __invoke(ServerRequestInterface $request)
 {

     return $this->renderer->make('registration',[]);
 }
}