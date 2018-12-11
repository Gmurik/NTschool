<?php

namespace NtSchool\Action;

use NtSchool\AdapterInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view, $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->logger->warning('Foo');
        return $this->renderer->make('index',[
            'title' => 'PetShop HomePage'
        ]);
    }
}
