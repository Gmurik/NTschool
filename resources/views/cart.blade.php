@extends('layout')
@section('pageName',$pageName)
@section('title',$title)
@section('url',$url)
@section('labelForUrl',$labelForUrl)


@section('content')
    @include('sections.topNavigationPanel')
    @include('sections.topContentNavigationPanel')
    @include('sections.cartSection')
    @include('sections.contactFormSection')
    @include('sections.copyrightSection')
@endsection