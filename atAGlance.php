<?php include_once 'includes/_header.php'; ?>
<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'At a Glance | Statistics Dept. of COU';
            $( ".selected" ).attr( "class", "" );
            $("a:contains('About Us')").attr("class", "selected");
      });
</script>
<!-- Content Seciton -->
<div id="content_section">
    <!-- News Updates -->
    <?php include_once 'includes/_latestNotice.php'; ?>
    <!-- Col1 -->
    <div class="col1">  
        <!-- Content Heading -->
        <div class="content_heading">
            <div class="heading"><h2>At a Glance</h2> </div>
            <!--<div class="share"><a  href="course.html#">Share with friends</a></div>-->
        </div>
        <script>
            $(document).ready(function(){
                $("#info_table tr:even").css("background-color","#F4FFD3");
            });
        </script>
        <style>
            #info_table td,th{
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 4px;
                padding-bottom: 4px;
                line-height: 20px;
                font-size: 13px;
            }
        </style>

        <div class="clear"></div>
        <div class="listingblock" id="semester1" style="display: block">
            <div class="sheading">
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <table style="text-align: left" id="info_table">
                    <tr>
                        <td style="width: 25%">Established</td>
                        <td>2011 </td>
                    </tr>
                    <tr>
                        <td>Number of Academic Staff</td>
                        <td>5 (Five) </td>
                    </tr>
                    <tr>
                        <td>Number of Non-academic Staff</td>
                        <td>0 (Zero)</td>
                    </tr>
                    <tr>
                        <td>Degree Offered</td>
                        <td>Under graduate and Post Graduate</td>
                    </tr>
                    <tr>
                        <td>Number of Students</td>
                        <td>100 (One Hundred)</td>
                    </tr>
                    <tr>
                        <td>Research Scope</td>
                        <td>Demography, Econometrics, Bio-statistics, Bayesian Inference, Stochastic Modeling, Regression 
                            Diagnostics, Probability, Order Statistics, Sample re-use of techniques, Robust Statistics, Bootstrap techniques, Industrial Statistics,
                            Reliability, Linear programming, Statistical Inference, Statistical Data Mining, Anthropometric Statistics, Human Growth, 
                            Human Morphology, Geo- Statistics, Environmental Statistics, Computer Programming & Simulation,Bioinformatics, 
                            Biochemical Engineering and Statistical Signal Processing etc.</td>
                    </tr>
                    <tr>
                        <td>Collaboration program with</td>
                        <td>Not yet </td>
                    </tr>
                    <tr>
                        <td>Research Link program with</td>
                        <td>Higher Education and Quality Enhancement Project (HEQEP) </td>
                    </tr>
                    <tr>
                        <td>Contact Information</td>
                        <td>+88 01552 458 517<br>
                            Department of Statistics Comilla University<br>
                            Kotbari, Comilla-2350<br>
                            info@statcou.org </td>
                    </tr>
                </table>
                <!--<ul class="listheading">
                    <li class="notice_name colr" >Date</li>
                    <li class="notice_description colr">Description</li>
                </ul>
                <ul class="courselisting">
                    <li class="notice_name">10-08-13 </li>
                    <li class="notice_description"><a href="courses/111.pdf" class="colr" target="_blank">Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I</a></li>

                </ul>
                <ul class="courselisting">
                    <li class="notice_name">Stat-112</li>
                    <li class="notice_description"><a href="courses/112.pdf" class="colr" target="_blank">Elementary Probability-I</a></li>
                </ul>
                <ul class="courselisting">
                    <li class="notice_name">Stat-113</li>
                    <li class="notice_description"><a href="courses/113.pdf" class="colr" target="_blank">Linear Algebra</a></li>
                </ul>
                <ul class="courselisting">
                    <li class="notice_name">Stat-114</li>
                    <li class="notice_description"><a href="courses/114.pdf" class="colr" target="_blank">Calculus</a></li>
                </ul>
                <ul class="courselisting">
                    <li class="notice_name">Stat-115</li>
                    <li class="notice_description"><a href="courses/115.pdf" class="colr" target="_blank">Principles of Economics-I</a></li>
                </ul>      
                <ul class="courselisting">
                    <li class="notice_name">Stat-116</li>
                    <li class="notice_description"><a href="courses/116.pdf" class="colr" target="_blank">Statistical Data Analysis-I</a></li>
                </ul>-->     
                <div class="clear"></div>
            </div>
        </div>
        <!-- col1 ends -->	
    </div>
    <!-- Col2 -->
    <?php include_once 'includes/_col2.php'; ?>
    <!--col2 ends -->			
</div>
<div class="clear"></div>
</div>	
<div class="clear"></div>
</div>
</div>    
<!-- Footer Section -->
<?php include_once 'includes/_footer.php'; ?>