<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class TeamMemberAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('teamMember',[
            'title'=>'PetShop Team Member',
            'pageName'=> 'Team Member',
            'url' => '/team',
            'labelForUrl'=>'Team'
        ]);
    }
}