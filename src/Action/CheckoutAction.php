<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class CheckoutAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('checkout',[
            'title'=>'PetShop Checkout',
            'pageName'=> 'Checkout',
            'url' => '/products',
            'labelForUrl'=>'Shop'
        ]);
    }
}