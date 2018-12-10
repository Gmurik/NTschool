<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class ScheduleAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('schedule',[
            'title'=>'PetShop Schedule',
            'pageName'=> 'Schedule',
            'url' => '/pages',
            'labelForUrl'=>'Pages'
        ]);
    }
}