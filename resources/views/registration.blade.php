@extends('layout')
@section('pageName',$pageName)
@section('title',$title)
@section('url',$url)
@section('labelForUrl',$labelForUrl)



@section('content')
    @include('sections.topNavigationPanel')
    @include('sections.topContentNavigationPanel')

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">

            <div class="row">

                <form class="shop-register" role="form" method="post">

                    <p>Email:</p>
                    @if($messages !== null && $messages->has('email'))
                        @foreach($messages->get('email') as $message)
                            <p style="color:red">{{$message}}</p>
                        @endforeach
                    @endif
                    <input type="text" name="email" id="email" value="@if(isset($email)){{ $email }}@elseif(isset($user)){{ $user->email }}@endif">
                    <br>

                    <p>Пароль:</p>
                    @if($messages !== null && $messages->has('password'))
                        @foreach($messages->get('password') as $message)
                            <p style="color:red">{{$message}}</p>
                        @endforeach
                    @endif
                    <input type="password" name="password" id="password" value="@isset($password){{ $password }}@endisset">
                    <br>

                    <p>Подтверждение пароля:</p>
                    @if($messages !== null && $messages->has('password_confirmation'))
                        @foreach($messages->get('password_confirmation') as $message)
                            <p style="color:red">{{$message}}</p>
                        @endforeach
                    @endif
                    <input type="password" name="password_confirmation" id="password_confirmation" value="@isset($password_confirmation){{ $password_confirmation }}@endisset">
                    <br>
                    <br>

                    <div class="col-sm-12">

                        <button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>

                    </div>

                </form>


            </div>
        </div>
    </section>

    @include('sections.contactFormSection')
    @include('sections.copyrightSection')
@endsection