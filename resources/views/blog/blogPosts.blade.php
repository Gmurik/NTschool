@extends('blog.blogLayout')
@section('pageName',$pageName)
@section('title',$title)
@section('url',$url)
@section('labelForUrl',$labelForUrl)

@section('topContentNav')
    @include('.sections.topContentNavigationPanel')
    @endsection
@section('content')
    {{--@include('blog.blogSection.articleBlogPosts')--}}
    @forelse($posts as $post)
        <h2>{{$post['title']}}</h2>
        @foreach($post->categories as $category)
            <i>{{ $category->title }}</i>
            @endforeach
        <p>{{$post['content']}}</p>
    @empty
    <p>нет постов</p>
    @endforelse
    @if($posts->currentPage()!=1)

        <a href="?page=1">Первая страница</a>
        <a href="?page={{$posts->currentPage() -1}}">Prev</a>
        @endif

    @for($i= 1; $i <= $total; $i++)
        <a href="?page={{$i}}">{{$i}}</a>
    @endfor
    @if($posts->currentPage()!= $total)
        <a href="?page={{$posts->currentPage() + 1}}">Next</a>
        <a href="?page={{$total}}">Последняя страница</a>

    @endif

@endsection