<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class BlogPostsAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('blog.blogPosts',[
            'title'=>'Blog',
            'pageName'=> 'Blog Posts',
            'url' => '#',
            'labelForUrl'=>'Blog'
        ]);
    }
}