@extends('master')
@section('content')
<div id="page-heading"><h1>Edit Result</h1></div>
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
    <tr>
        <th rowspan="3" class="sized"><img src="../images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
        <th class="topleft"></th>
        <td id="tbl-border-top">&nbsp;</td>
        <th class="topright"></th>
        <th rowspan="3" class="sized"><img src="../images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
    </tr>
    <tr>
        <td id="tbl-border-left"></td>
        <td>
            <!--  start content-table-inner -->
            <div id="content-table-inner">
                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                    @if($message = Session::get('update_success'))
                    <tr>
                        <td colspan="5" >
                            <div class="green-left" style=" height: 45px; line-height: 28px">{{ $message }}</div>            
                        </td>
                    </tr>
                    @endif
                    <tr valign="top">
                        <td>
                            <!-- start id-form -->
                            {{ Form::open(array ('url' => URL::to('download/'.$download->id), 'files' => true, 'method' => 'PUT')) }}
                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                                <tr>
                                    <th valign="top">Description:</th>
                                    <td><textarea rows="" cols="" class="form-textarea" name="description" >{{ $download ->description }}</textarea></td>
                                    <td style="width: 40%">
                                        @if($error = $errors->first('description'))
                                            <div class="error-left"></div>
                                            <div class="error-inner">{{ $error }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th valign="top">Status:</th>
                                    <td>
                                        <select name="status" name="status" class="select-option" style="width: 150px; height: 25px; border: 1px solid #ACACAC">
                                            @if($download -> status)
                                            <option value="1" selected>Published</option>
                                            <option value="0">Unpublished</option>
                                            @else
                                            <option value="1">Published</option>
                                            <option value="0" selected>Unpublished</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td>
                                        @if($error = $errors->first('status'))
                                            <div class="error-left"></div>
                                            <div class="error-inner">{{ $error }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>File:</th>
                                    <td><input type="file" class="file_1" name="download_file"/></td>
                                    <td>
                                        @if($error = $errors->first('download_file'))
                                            <div class="error-left"></div>
                                            <div class="error-inner">{{ $error }}</div>
                                        @else
                                            <div class="bubble-left"></div>
                                            <div class="bubble-inner">PDF, doc, docx max file size 5MB</div>
                                            <div class="bubble-right"></div>
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