@extends('admin.layoutWhite')
@section('pageName',$pageName)
@section('title',$title)



@section('content')
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->
            <section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
                            <div class="with_border with_padding">

                                <h4 class="text-center">
                                    Sign Up New Account
                                </h4>
                                <hr class="bottommargin_30">
                                <div class="wrap-forms">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-name">Your Name</label>
                                                    <i class="grey fa fa-user"></i>
                                                    <input type="text" class="form-control" id="login-name" placeholder="Name">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-email">Email address</label>
                                                    <i class="grey fa fa-envelope-o"></i>
                                                    <input type="email" class="form-control" id="login-email" placeholder="Email Address">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-password">Password</label>
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" id="login-password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-password2">Retype Password</label>
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" id="login-password2" placeholder="Retype Password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember_me_checkbox">
                                                    <label for="remember_me_checkbox">Rememrber Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="theme_button block_button color1">Create an account</button>
                                    </form>
                                </div>

                            </div>
                            <!-- .with_border -->

                            <p class="divider_20 text-center">
                                Already registered? <a href="/sign-in">Log In</a>.
                            </p>

                        </div>
                        <!-- .col-* -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

@endsection