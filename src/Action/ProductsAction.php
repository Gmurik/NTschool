<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;

final class ProductsAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('products',[
            'title'=>'PetShop Products',
            'pageName'=> 'Products',
            'url' => '/products',
            'labelForUrl'=>'Shop'
        ]);
    }
}