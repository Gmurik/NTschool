<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class RegistrationAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('registration',[
            'title'=>'PetShop Registration',
            'pageName'=> 'Registration',
            'url' => '/products',
            'labelForUrl'=>'Shop'
        ]);
    }
}