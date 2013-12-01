<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Login | Admin Panel</title>
        <link rel="stylesheet" href="{{ URL::asset('css/screen.css') }}" type="text/css" media="screen" title="default" />
        <!--  jquery core -->
        <script src="{{ URL::asset('js/jquery/jquery-1.4.1.min.js') }}" type="text/javascript"></script>

        <!-- Custom jquery scripts -->
        <script src="{{ URL::asset('js/jquery/custom_jquery.js') }}" type="text/javascript"></script>

        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="{{ URL::asset('js/jquery/jquery.pngFix.pack.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).pngFix( );
            });
        </script>
    </head>
    <body id="login-bg">
    <div class="login-text">Admin Panel</div>

        <!-- Start: login-holder -->
        <div id="login-holder">

            <!-- start logo -->
            <div id="logo-login">

            </div>
            <!-- end logo -->

            <div class="clear"></div>

            <!--  start loginbox ................................................................................. -->
            <div id="loginbox">

                <!--  start login-inner -->
                <div id="login-inner">
                    {{ Form::open()}}
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Username</th>
                            <td><input type="text" name="username" id="username"  class="login-inp" value="{{ Input::old('username') }}"/></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password"name="password" id="password" class="login-inp" /></td>
                        </tr>                       
                        @if($error = $errors->first('password'))
                        <tr>
                            <td colspan="2">{{$error}}</td>
                        </tr>
                        @endif
                        <tr>
                            <th></th>
                            <td><input type="submit" class="submit-login"  /></td>
                        </tr>
                    </table>
                    {{ Form::close() }}
                </div>
                <!--  end login-inner -->
                <div class="clear"></div>
            </div>
            <!--  end loginbox -->

            <!--  start forgotbox ................................................................................... -->
            <div id="forgotbox">
                <div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
                <!--  start forgot-inner -->
                <div id="forgot-inner">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Email address:</th>
                            <td><input type="text" value=""   class="login-inp" /></td>
                        </tr>
                        <tr>
                            <th> </th>
                            <td><input type="button" class="submit-login"  /></td>
                        </tr>
                    </table>
                </div>
                <!--  end forgot-inner -->
                <div class="clear"></div>
                <a href="" class="back-login">Back to login</a>
            </div>
            <!--  end forgotbox -->

        </div>
        <!-- End: login-holder -->
    </body>
</html>