<?php


namespace NtSchool\Action;



use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Post;
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
        $page = $request->getQueryParams()['page'] ?? 1;
        $postPerPage = 2;
        $offset = $page == 1 ? 0 : ($page - 1) * $postPerPage;
        $total = Manager::select('select COUNT(*) as counter from posts');
        $total = round($total[0]->counter / $postPerPage);
       // $post = Post::skip($offset)->take($postPerPage)->get();

        $post = new Paginator(
            Post::skip($offset)->take($postPerPage)->get(),
            $postPerPage,
            $page
        );
        return $this->renderer->make('blog.blogPosts',[
            'title'=>'Blog',
            'pageName'=> 'Blog Posts',
            'url' => '#',
            'labelForUrl'=>'Blog',
            'posts'=>$post,
            'total'=> $total
        ]);
    }
}