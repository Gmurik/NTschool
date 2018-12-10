<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class SingleProduct
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('singleProduct',[
            'title'=>'PetShop Single product',
            'pageName'=> 'Single Product',
            'url' => '/products',
            'labelForUrl'=>'Shop'
        ]);
    }
}