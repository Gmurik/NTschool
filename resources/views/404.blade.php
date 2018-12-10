@extends('layout')
@section('pageName',$pageName)
@section('title',$title)
@section('url',$url)
@section('labelForUrl',$labelForUrl)


@section('content')
    @include('sections.upperSearchPanel')
    @include('sections.topLogoPanel')
    @include('sections.topNavigationPanel')
    @include('sections.404')
    @include('sections.copyrightSection')
