<?php include_once '_db.php'; ?>
<DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Statistics Dept. of COU</title>
        <!-- Stylesheet -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/png">
        <link href="css/style_part1.css" rel="stylesheet" type="text/css" />
        <link href="css/style_part2.css" rel="stylesheet" type="text/css" />
        <link href="css/new.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
        <!-- Javascript -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/ddsmoothmenu.js" type="text/javascript"></script>
        <script src="js/contentslider.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/DIN_500.font.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/tabs.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    </head>
    <body>

        <div id="bg">
            <!-- Wapper Sec -->
            <div id="wrapper_sec">
                <!-- masterhead -->
                <div id="masterhead">
                    <!-- Logo -->
                    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>
                    <!-- masterhead Right Section -->
                    <div class="topright_sec">
                        <!-- top navigation -->
                        <!--<div class="topnavigation">
                            <ul>
                                <li class="first">&nbsp;</li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Student Profile </a></li>
                                <li><a href="#">Our Campuses</a></li>
                                <li><a class="nobg" href="#"><img src="images/rss.gif"  alt="" /></a></li>
                                <li class="last">&nbsp;</li>
                            </ul>
                        </div>-->
                        <div class="clear"></div>
                        <!-- top search -->
                        <div class="top_search">
                            <div class="advance_search"></div>
                            <ul>
                                <li><input name="txt" value="Search you any keyword"
                                           onfocus="if(this.value=='Search you any keyword') {this.value='';}"
                                           onblur="if(this.value=='') {this.value='Search you any keyword';}"   type="text" /></li>
                                <li><a class="search" href="#">Search</a></li>
                            </ul>
                        </div>
                        <div class="clear"> </div>       	
                    </div>
                    <div class="clear"></div>
                    <!-- Navigation -->
                    <div class="navigation">
                        <div id="smoothmenu1" class="ddsmoothmenu">
                            <ul>
                                <li class="first"><a href="index.php">Home</a></li>
                                <li><a href="atAGlance.php">About Us</a>
                                    <ul>
                                        <li><a href="atAGlance.php">At a Glance</a></li>
                                        <li><a style="border: none" href="noContent.php">Message from Chairman</a></li>
                                    </ul>
                                </li>
                                <li><a href="underGraduate.php">Programs</a> 
                                    <!-- Sub Menu level 1 -->    
                                    <ul>
                                        <li><a href="underGraduate.php">Under-Graduate</a></li>
                                        <li><a style="border: none" href="postGraduate.php">Post Graduate</a></li>
                                        <!--<li><a href="course.html" class="dropdown">Accumsan neque</a>
                                            < Sub Menu Level 2 >
                                            <ul>
                                                <li><a href="course.html">nteger eu mi lorem, sit amet</a></li>   		
                                                <li><a href="course.html">Accumsan neque</a></li>  
                                                <li><a href="course.html">Donec varius arcu eu quam</a></li>  
                                                <li><a href="course.html">Rutrum rhoncus.</a></li>  
                                                <li><a href="course.html">Donec suscipit enim et</a></li>  	
                                            </ul>		
                                        </li> 
                                        <li><a href="course.html">Donec varius arcu eu quam</a></li>
                                        <li><a href="course.html">Rutrum rhoncus.</a></li>
                                        <li><a href="course.html">Donec suscipit enim et </a></li>
                                        <li><a href="course.html">Ipsum eleifend quis luctus</a></li>
                                        <li><a href="course.html">Arcu scelerisque.</a></li>   		
                                        <li><a href="course.html">Duis a tortor tellusvel egestas</a></li>
                                        -->
                                    </ul>			
                                </li>                                
                                <li><a href="faculty.php">Faculty Members</a></li>
                                <li><a href="seminar.php">Facilities</a>
                                    <!-- Sub Menu level 1 -->    
                                    <ul>
                                        <li><a href="seminar.php">Seminar Library</a></li>
                                        <li><a style="border: none" href="computer_lab.php">Computer Lab</a></li>
                                    </ul>                                
                                </li>
                                <li><a href="noContent.php">Students</a>
                                    <!-- Sub Menu level 1 -->
                                    <ul>
                                        <li><a href="noContent.php">Current Students</a></li>
                                        <li><a style="border: none" href="noContent.php">Prospective Students</a></li>
                                    </ul>
                                </li>
                                <li><a href="notice.php">Notice</a> </li>
                                <li><a href="results.php">Results</a> </li>
                                <li><a href="downloads.php">Downloads</a> </li>
                                <li style="border-right: none"><a href="gallery.php">Gallery</a></li>
                            </ul>				
                        </div>
                        <!-- navigation ends -->       		                            
                        <div class="clear"></div>	
                    </div>    
                </div>