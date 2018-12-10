@extends('layoutAside')
@section('title',$title)
@section('pageName',$pageName)
@section('url',$url)
@section('labelForUrl',$labelForUrl)


@section('content')
    @include('sections.upperSearchPanel')
    @include('sections.topLogoPanel')
    @include('sections.topNavigationPanel')
    @include('sections.topContentNavigationPanel')
    @include('sections.contactsSection')
    @include('sections.bottomContactSection')
    @include('sections.contactFormSection')
    @include('sections.copyrightSection')
@endsection