<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class CartAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('cart',[
            'title'=>'PetShop Cart',
            'pageName'=> 'Cart',
            'url' => '/products',
            'labelForUrl'=>'Shop'
        ]);
    }
}