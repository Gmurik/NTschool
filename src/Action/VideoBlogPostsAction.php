<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class VideoBlogPostsAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('blog.videoBlogPosts',[
            'title'=>'Video Blog',
            'pageName'=> 'Video Blog Posts',
            'url' => 'Video Blog',
            'labelForUrl'=>'Video Blog'
        ]);
    }
}