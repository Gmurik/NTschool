@extends('blog.blogLayout')
@section('pageName',$pageName)
@section('title',$title)
@section('url',$url)
@section('labelForUrl',$labelForUrl)

@section('topContentNav')
    @include('.sections.topContentNavigationPanel')
    @endsection
@section('video')
    @include('blog.blogSection.videoPost')
@endsection


@section('content')

    @include('blog.blogSection.articleBlogPosts')
@endsection