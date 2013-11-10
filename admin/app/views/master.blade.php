<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Admin Panel</title>
        <link rel="stylesheet" href="{{ URL::asset('css/screen.css') }}" type="text/css" media="screen" title="default" />
        <!--[if IE]>
        <link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
        <![endif]-->

        <!--  jquery core -->
        <script src="{{ URL::asset('js/jquery/jquery-1.4.1.min.js') }}" type="text/javascript"></script>

        <!--  checkbox styling script -->
        <script src="{{ URL::asset('js/jquery/ui.core.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery/ui.checkbox.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery/jquery.bind.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(function(){
                $('input').checkBox();
                $('#toggle-all').click(function(){
                    $('#toggle-all').toggleClass('toggle-checked');
                    $('#mainform input[type=checkbox]').checkBox('toggle');
                    return false;
                });
            });
        </script>

        <![if !IE 7]>

        <!--  styled select box script version 1 -->
        <script src="{{ URL::asset('js/jquery/jquery.selectbox-0.5.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.styledselect').selectbox({ inputClass: "selectbox_styled" });
            });
        </script>
        <![endif]>

        <!--  styled select box script version 2 --> 
        <script src="{{ URL::asset('js/jquery/jquery.selectbox-0.5_style_2.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
                $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
            });
        </script>

        <!--  styled select box script version 3 --> 
        <script src="{{ URL::asset('js/jquery/jquery.selectbox-0.5_style_2.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
            });
        </script>

        <!--  styled file upload script --> 
        <script src="{{ URL::asset('js/jquery/jquery.filestyle.js') }}" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
            $(function() {
                $("input.file_1").filestyle({ 
                    image: "{{ URL::asset('images/forms/choose-file.gif') }}",
                    imageheight : 21,
                    imagewidth : 78,
                    width : 310
                });
            });
        </script>

        <!-- Custom jquery scripts -->
        <script src="{{ URL::asset('js/jquery/custom_jquery.js') }}" type="text/javascript"></script>

        <!-- Tooltips -->
        <script src="{{ URL::asset('js/jquery/jquery.tooltip.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery/jquery.dimensions.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('a.info-tooltip ').tooltip({
                    track: true,
                    delay: 0,
                    fixPNG: true, 
                    showURL: false,
                    showBody: " - ",
                    top: -35,
                    left: 5
                });
            });
        </script> 


        <!--  date picker script -->
        <link rel="stylesheet" href="{{ URL::asset('css/datePicker.css') }}" type="text/css" />
        <script src="{{ URL::asset('js/jquery/date.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery/jquery.datePicker.js') }}" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
            $(function()
            {

                // initialise the "Select date" link
                $('#date-pick')
                .datePicker(
                // associate the link with a date picker
                {
                    createButton:false,
                    startDate:'01/01/2005',
                    endDate:'31/12/2020'
                }
            ).bind(
                // when the link is clicked display the date picker
                'click',
                function()
                {
                    updateSelects($(this).dpGetSelected()[0]);
                    $(this).dpDisplay();
                    return false;
                }
            ).bind(
                // when a date is selected update the SELECTs
                'dateSelected',
                function(e, selectedDate, $td, state)
                {
                    updateSelects(selectedDate);
                }
            ).bind(
                'dpClosed',
                function(e, selected)
                {
                    updateSelects(selected[0]);
                }
            );
	
                var updateSelects = function (selectedDate)
                {
                    var selectedDate = new Date(selectedDate);
                    $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
                    $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
                    $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
                }
                // listen for when the selects are changed and update the picker
                $('#d, #m, #y')
                .bind(
                'change',
                function()
                {
                    var d = new Date(
                    $('#y').val(),
                    $('#m').val()-1,
                    $('#d').val()
                );
                    $('#date-pick').dpSetSelected(d.asString());
                }
            );

                // default the position of the selects to today
                var today = new Date();
                updateSelects(today.getTime());

                // and update the datePicker to reflect it...
                $('#d').trigger('change');
            });
        </script>

        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="{{ URL::asset('js/jquery/jquery.pngFix.pack.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).pngFix( );
                var header = $("#page-heading h1").text();
                $('.nav div ul.current').removeClass('current').addClass('select');
                $('.nav div ul li a b:contains('+header+')').parents().eq(2).removeClass('select').addClass('current');

                $('.pagination').addClass('custom-pagination');
            });
        </script>
        <style type="text/css">
            .custom-pagination {
                text-align: center;
                padding-right: 20px;
            }
            .custom-pagination ul li{
                display: inline-block;
                padding: 5px;
            }

            .custom-pagination ul li.active {
                color: red;
                font-size: 20px;
            }
        </style>
    </head>
    <body> 

        <!--  start nav-outer-repeat................................................................................................. START -->
        <div class="nav-outer-repeat"> 
            <!--  start nav-outer -->
            <div class="nav-outer"> 

                <!-- start nav-right -->
                <div id="nav-right">
                    <div class="nav-divider">&nbsp;</div>
                    <a href="{{ URL::route('user/account') }}" id="logout">My Account<img src="{{ URL::asset('images/shared/nav/nav_myaccount.gif') }}" width="94" height="14" alt="My Account" /></a>
                    <div class="nav-divider">&nbsp;</div>
                    <a href="{{ URL::route('user/logout') }}" id="logout">Logout<img src="{{ URL::asset('images/shared/nav/nav_logout.gif') }}" width="64" height="14" alt="Logout" /></a>
                    <div class="clear">&nbsp;</div>

                    <!--  start account-content -->	
                    <!--<div class="account-content">
                        <div class="account-drop-inner">
                            <a href="" id="acc-settings">Settings</a>
                            <div class="clear">&nbsp;</div>
                            <div class="acc-line">&nbsp;</div>
                            <a href="" id="acc-details">Personal details </a>
                            <div class="clear">&nbsp;</div>
                            <div class="acc-line">&nbsp;</div>
                            <a href="" id="acc-project">Project details</a>
                            <div class="clear">&nbsp;</div>
                            <div class="acc-line">&nbsp;</div>
                            <a href="" id="acc-inbox">Inbox</a>
                            <div class="clear">&nbsp;</div>
                            <div class="acc-line">&nbsp;</div>
                            <a href="" id="acc-stats">Statistics</a> 
                        </div>
                    </div>-->
                    <!--  end account-content -->

                </div>
                <!-- end nav-right -->


                <!--  start nav -->
                <div class="nav">
                    <div class="table">

                        <ul class="select"><li><a href="{{ URL::to('/') }}"><b>Dashboard</b><!--[if IE 7]><!--></a><!--<![endif]-->
                            </li>
                        </ul>

                        <div class="nav-divider">&nbsp;</div>

                        <ul class="current"><li><a href="{{ URL::to('notice') }}"><b>Notice</b><!--[if IE 7]><!--></a><!--<![endif]-->
                            </li>
                        </ul>

                        <div class="nav-divider">&nbsp;</div>

                        <ul class="select"><li><a href="{{ URL::to('result') }}"><b>Result</b><!--[if IE 7]><!--></a><!--<![endif]-->
                            </li>
                        </ul>

                        <div class="nav-divider">&nbsp;</div>

                        <ul class="select"><li><a href="{{ URL::to('download') }}"><b>Downloads</b><!--[if IE 7]><!--></a><!--<![endif]-->
                            </li>
                        </ul>

                        <div class="nav-divider">&nbsp;</div>

                        <ul class="select"><li><a href="{{ URL::to('news') }}"><b>News</b><!--[if IE 7]><!--></a><!--<![endif]-->
                            </li>
                        </ul>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--  start nav -->

            </div>
            <div class="clear"></div>
            <!--  start nav-outer -->
        </div>
        <!--  start nav-outer-repeat................................................... END -->

        <div class="clear"></div>
        
        ////////////////////
        
<script>
    $(document).ready(function() {
        $('#submit_from').click(function() {
            processForm();
        });
    });
    
    function processForm() {
        var description = document.forms[0].description.value;
        
    }
</script>

<!-- start content-outer -->
<div id="content-outer">
    <!-- start content -->
    <div id="content">
        @yield('content')
    </div>
    <!--  end content -->
    <div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->
////////////////////////////
        <div class="clear">&nbsp;</div>

        <!-- start footer -->         
        <div id="footer">
            <!--  start footer-left -->
            <div id="footer-left">

                Admin Panel &copy; Copyright Department of statistics, Comilla University. All rights reserved.</div>
            <!--  end footer-left -->
            <div class="clear">&nbsp;</div>
        </div>
        <!-- end footer -->

    </body>
</html>