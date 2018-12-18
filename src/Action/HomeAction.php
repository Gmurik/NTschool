<?php

namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;
use Timur\Notifier\NotifierAdapterInterface;


final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view,NotifierAdapterInterface $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->logger->warning('Hello World');
        return $this->renderer->make('index',[
            'title' => 'PetShop HomePage'
        ]);
    }
}
