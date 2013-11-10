@extends('master')
@section('content')
<div id="page-heading" style="display: none">
    <h1>Dashboard</h1>
</div>

<h1 style="margin: 0 0 15px 20px">Welcome to Admin Panel</h1>
<!-- end page-heading -->

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
            <!--  start content-table-inner ...................................................................... START -->
            <div id="content-table-inner">
                <!--  start product-table ..................................................................................... -->
                <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                    <tr>
                        <th>
                            Quick Links
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ URL::to('notice/create') }}">Create New Notice</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ URL::to('result/create') }}">Create New Result</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ URL::to('downloads/create') }}">Create New Download</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ URL::to('news/create') }}">Create New News</a>
                        </td>
                    </tr>
                </table>
                <!--  end product-table................................... -->
                </div>
                <!--  end content-table  -->
                <div class="clear"></div>

            </div>
            <!--  end content-table-inner ............................................END  -->
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