@extends('master')
    @section('content')
    <div id="page-heading">
                    <h1>Downloads</h1>
                </div>
                <!-- end page-heading -->

                <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
                    
                    <tr>
                        <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
                        <th class="topleft"></th>
                        <td id="tbl-border-top">&nbsp;</td>
                        <th class="topright"></th>
                        <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
                    </tr>
                    <tr>
                        <td id="tbl-border-left"></td>
                        <td>
                            <!--  start content-table-inner ...................................................................... START -->
                            <div id="content-table-inner">

                                <!--  start table-content  -->
                                <div id="table-content">

                                    <!--  start message-red 
                                    <div id="message-red">
                                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="red-left">Error. <a href="">Please try again.</a></td>
                                                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
                                            </tr>
                                        </table>
                                    </div>
                                     end message-red -->

                                    <!--  start message-green 
                                    <div id="message-green">
                                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="green-left">Product added sucessfully. <a href="">Add new one.</a></td>
                                                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
                                            </tr>
                                        </table>
                                    </div>
                                     end message-green -->


                                    <!--  start product-table ..................................................................................... -->
                                        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                                            @if($message = Session::get('success'))
                                            <tr>
                                                <td colspan="5" >
                                                    <div class="green-left" style=" height: 45px; line-height: 28px">{{ $message }}</div>
                                                </td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td colspan="5">
                                                    <div>
                                                        <a href="{{ URL::route('download.create') }}">Create New</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="table-header-repeat line-left minwidth-1"><a href="">Date</a>	</th>
                                                <th class="table-header-repeat line-left minwidth-1"><a href="">Description</a></th>
                                                <th class="table-header-repeat line-left"><a href="">Status</a></th>
                                                <th class="table-header-repeat line-left"><a href="">Download File</a></th>
                                                <th class="table-header-repeat line-left"><a href="">Options</a></th>
                                            </tr>
                                            @foreach($downloads as $download)
                                                <tr>
                                                <td>{{ $download->created_at }}</td>
                                                <td>{{ $download->description }}</td>
                                                @if($download->status) 
                                                <td>Published</td>
                                                @else
                                                <td>Unpublished</td>
                                                @endif
                                                <td><a href="../../{{ $download->file_path }}">Download</a></td>
                                                <td class="options-width">
                                                    <a href="{{ URL::to('download/'.$download->id.'/edit') }}" title="Edit" class="icon-1 info-tooltip"></a>
                                                    <a href="{{ URL::route('download.destroy', $download -> id) }}" data-method="delete" title="Delete" class="icon-2 info-tooltip"></a>
                                                    <a href="" title="Save" class="icon-5 info-tooltip"></a>
                                                </td>
                                            </tr>
                                            @endforeach                                  
                                        </table>
                                        <!--  end product-table................................... --> 
                                </div>
                                <!--  end content-table  -->

                                

                                <!--  start paging..................................................... -->
                                <table border="0" cellpadding="0" cellspacing="0" id="paging-table">
                                    <tr>
                                        <td>
                                            <a href="" class="page-far-left"></a>
                                            <a href="" class="page-left"></a>
                                            <div id="page-info">Page <strong>1</strong> / 15</div>
                                            <a href="" class="page-right"></a>
                                            <a href="" class="page-far-right"></a>
                                        </td>
                                        <td>
                                            <select  class="styledselect_pages">
                                                <option value="">Number of rows</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <!--  end paging................ -->

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