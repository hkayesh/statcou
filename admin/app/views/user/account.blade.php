@extends('master')
@section('content')
<div id="page-heading"><h1>Account</h1></div>
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
    <tr>
        <th rowspan="3" class="sized"><img src="{{ URL::asset('images/shared/side_shadowleft.jpg') }}" width="20" height="300" alt="" /></th>
        <th class="topleft"></th>
        <td id="tbl-border-top">&nbsp;</td>
        <th class="topright"></th>
        <th rowspan="3" class="sized"><img src="{{ URL::asset('images/shared/side_shadowright.jpg') }}" width="20" height="300" alt="" /></th>
    </tr>
    <tr>
        <td id="tbl-border-left"></td>
        <td>
            <!--  start content-table-inner -->
            <div id="content-table-inner">
                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                    @if($message = Session::get('success'))
                    <tr>
                        <td colspan="5" >
                            <div class="green-left" style=" height: 45px; line-height: 28px">{{ $message }}</div>
                        </td>
                    </tr>
                    @endif
                    <tr valign="top">
                        <td>
                            <!-- start id-form -->
                            {{ Form::open(array ('route' => 'user/saveAccount')) }}
                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                                <tr>
                                    <th valign="top" style="width: 33%">New Username:</th>
                                    <td><input  type="text" rows="" cols="" class="inp-form" name="username" value = "{{ Input::old('username') }}" /></td>
                                    <td style="width: 40%">
                                        @if($error = $errors->first('username'))
                                        <div class="error-left"></div>
                                        <div class="error-inner">{{ $error }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th valign="top">New Password:</th>
                                    <td><input  type="password" rows="" cols="" class="inp-form" name="password" /></td>
                                    <td style="width: 40%">
                                        @if($error = $errors->first('password'))
                                        <div class="error-left"></div>
                                        <div class="error-inner">{{ $error }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th valign="top">Confirm Password:</th>
                                    <td><input  type="password" rows="" cols="" class="inp-form" name="confirmPassword" /></td>
                                    <td style="width: 42%">
                                        @if($error = $errors->first('confirmPassword'))
                                        <div class="error-left"></div>
                                        <div class="error-inner">{{ $error }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>&nbsp;</th>
                                    <td valign="top">
                                        <input type="submit" value="" id="submit_from" class="form-submit" />
                                        <input type="reset" value="" class="form-reset"  />
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                            {{ Form::close()}}
                            <!-- end id-form  -->
                        </td>

                    </tr>
                </table>

                <div class="clear"></div>

            </div>
            <!--  end content-table-inner  -->
        </td>
        <td id="tbl-border-right"></td>
    </tr>
    <tr>
        <th class="sized bottomleft"></th>
        <td id="tbl-border-bottom">&nbsp;</td>
        <th class="sized bottomright"></th>
    </tr>
</table>

<div class="clear">&nbsp;</div>
@stop