<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class TeamAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('team',[
            'title'=>'PetShop Team',
            'pageName'=> 'Team List',
            'url' => '/team',
            'labelForUrl'=>'Team'
        ]);
    }
}