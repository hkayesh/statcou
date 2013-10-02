<?php include_once 'includes/_header.php'; ?>
<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'Under-graduate | Statistics Dept. of COU';
            $( ".selected" ).attr( "class", "" );
            $("a:contains('Programs')").attr("class", "selected");
      });
      
    function showSemester() {
        var semester_id = $("#sem").val();
        //alert(semester_id);
        for(var i=1; i<=8; i++) {
            if(i==$("#sem").val()){
                document.getElementById("semester"+$("#sem").val()).style.display="block" ;
            }
            else {                
                document.getElementById("semester"+i).style.display="none" ;
            }            
        }
        
    }
</script>

<!-- Content Seciton -->
<div id="content_section">
    <!-- News Updates -->
    <?php include_once 'includes/_latestNotice.php'; ?>
    <!-- Col1 -->
    <div class="col1">  
        <!-- Content Heading -->
        <div class="content_heading">
            <div class="heading"><h2>Under Graduate Course Schedule</h2> </div>
            <!--<div class="share"><a  href="course.html#">Share with friends</a></div>-->
        </div>
        <p>
            The department is offering 4-years Bachelor of Science (B. Sc.) Honors degree in Statistics. The program runs under semester system and each academic year consists of 2 semesters.   The total number of semester is 8, totaling 139 credits and 4050 marks. The courses offered in this program are of theoretical and practical nature.  
        </p>
        <div class="make_slection">
            <span>To view the syllabus for individual semester, make your selection.</span> 
            <select name="txt" onchange="showSemester();" id="sem">
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
                <option value="7">Semester 7</option>
                <option value="8">Semester 8</option>
            </select>
        </div>
        <div class="clear"></div>
        <div class="listingblock" id="semester1" style="display: block">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 1: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-111</li>
                    <li class="coursename"><a href="courses/111.pdf" class="colr" target="_blank">Basic Statistics-I</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-112</li>
                    <li class="coursename"><a href="courses/112.pdf" class="colr" target="_blank">Elementary Probability-I</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-113</li>
                    <li class="coursename"><a href="courses/113.pdf" class="colr" target="_blank">Linear Algebra</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Non Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-114</li>
                    <li class="coursename"><a href="courses/114.pdf" class="colr" target="_blank">Calculus</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Non Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-115</li>
                    <li class="coursename"><a href="courses/115.pdf" class="colr" target="_blank">Principles of Economics-I</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Non Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-116</li>
                    <li class="coursename"><a href="courses/116.pdf" class="colr" target="_blank">Statistical Data Analysis-I</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>15</b></li>
                    <li class="location"><b>450</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester2" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 2: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-121</li>
                    <li class="coursename"><a href="courses/121.pdf" class="colr" target="_blank">Basic Statistics-II</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-122</li>
                    <li class="coursename"><a href="courses/122.pdf" class="colr" target="_blank">Elementary Probability-II</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-123</li>
                    <li class="coursename"><a href="courses/123.pdf" class="colr" target="_blank">Algebra and Analytical Geometry</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Non Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-124</li>
                    <li class="coursename"><a href="courses/124.pdf" class="colr" target="_blank">Introduction to Computer and Computer Programming</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Non Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-125</li>
                    <li class="coursename"><a href="courses/125.pdf" class="colr" target="_blank">Principles of Economics-II</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Non Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-126</li>
                    <li class="coursename"><a href="courses/126.pdf" class="colr" target="_blank">Statistical Data Analysis-II</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename">Viva-Voce</li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor"></li>
                </ul>
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>15</b></li>
                    <li class="location"><b>450</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester3" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 3: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-211</li>
                    <li class="coursename"><a href="courses/211.pdf" class="colr" target="_blank">Probability Distribution</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-212</li>
                    <li class="coursename"><a href="courses/212.pdf" class="colr" target="_blank">Sampling Technique</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-213</li>
                    <li class="coursename"><a href="courses/213.pdf" class="colr" target="_blank">Demography</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-214</li>
                    <li class="coursename"><a href="courses/214.pdf" class="colr" target="_blank">Advance Calculus and Differential Equations</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Non Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-215</li>
                    <li class="coursename"><a href="courses/215.pdf" class="colr" target="_blank">Numerical Analysis</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-216</li>
                    <li class="coursename"><a href="courses/216.pdf" class="colr" target="_blank">Statistical Data Analysis III</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul> 
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>16</b></li>
                    <li class="location"><b>500</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester4" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 4: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-221</li>
                    <li class="coursename"><a href="courses/221.pdf" class="colr" target="_blank">Sampling Distribution</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-222</li>
                    <li class="coursename"><a href="courses/222.pdf" class="colr" target="_blank">Regression Analysis</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-223</li>
                    <li class="coursename"><a href="courses/223.pdf" class="colr" target="_blank">Data Processing using Software I</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-224</li>
                    <li class="coursename"><a href="courses/224.pdf" class="colr" target="_blank">Statistical Quality Control and Index Number</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-225</li>
                    <li class="coursename"><a href="courses/225.pdf" class="colr" target="_blank">Real Analysis and Complex Variable</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Non Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-226</li>
                    <li class="coursename"><a href="courses/226.pdf" class="colr" target="_blank">Statistical Data Analysis IV</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename">Viva-Voce</li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor"></li>
                </ul>
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>17</b></li>
                    <li class="location"><b>500</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester5" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 5: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-311</li>
                    <li class="coursename"><a href="courses/311.pdf" class="colr" target="_blank">Statistical Inference I</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-312</li>
                    <li class="coursename"><a href="courses/312.pdf" class="colr" target="_blank">Analysis of Variance</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-313</li>
                    <li class="coursename"><a href="courses/313.pdf" class="colr" target="_blank">Time Series Analysis</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-314</li>
                    <li class="coursename"><a href="courses/314.pdf" class="colr" target="_blank">Econometrics I</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-315</li>
                    <li class="coursename"><a href="courses/315.pdf" class="colr" target="_blank">Data Processing using Software II</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-316</li>
                    <li class="coursename"><a href="courses/316.pdf" class="colr" target="_blank">Statistical Data Analysis V</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul> 
                <ul class="courselisting">
                    <li class="code">Stat-317</li>
                    <li class="coursename"><a href="courses/317.pdf" class="colr" target="_blank">Statistical Data Analysis VI</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul> 
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>17</b></li>
                    <li class="location"><b>500</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester6" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 6: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-321</li>
                    <li class="coursename"><a href="courses/321.pdf" class="colr" target="_blank">Stochastic Process</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-322</li>
                    <li class="coursename"><a href="courses/322.pdf" class="colr" target="_blank">Probability and Measure Theory</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-323</li>
                    <li class="coursename"><a href="courses/323.pdf" class="colr" target="_blank">Order Statistics and Non-Parametric Methods</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-324</li>
                    <li class="coursename"><a href="courses/324.pdf" class="colr" target="_blank">Operation Research</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-325</li>
                    <li class="coursename"><a href="courses/325.pdf" class="colr" target="_blank">Epidemiology</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-326</li>
                    <li class="coursename"><a href="courses/326.pdf" class="colr" target="_blank">Statistical Data Analysis VII</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-327</li>
                    <li class="coursename"><a href="courses/327.pdf" class="colr" target="_blank">Statistical Data Analysis VIII</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename">Viva-Voce</li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor"></li>
                </ul>
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>18</b></li>
                    <li class="location"><b>500</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester7" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 7: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-411</li>
                    <li class="coursename"><a href="courses/411.pdf" class="colr" target="_blank">Statistical Inference II</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-412</li>
                    <li class="coursename"><a href="courses/412.pdf" class="colr" target="_blank">Multivariate Analysis </a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-413</li>
                    <li class="coursename"><a href="courses/413.pdf" class="colr" target="_blank">Bio-Statistics</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-414</li>
                    <li class="coursename"><a href="courses/414.pdf" class="colr" target="_blank">Research Methodology</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-415</li>
                    <li class="coursename"><a href="courses/415.pdf" class="colr" target="_blank">Environmental Statistics</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-416</li>
                    <li class="coursename"><a href="courses/416.pdf" class="colr" target="_blank">Statistical Data Analysis IX</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul> 
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>16</b></li>
                    <li class="location"><b>500</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>
        <div class="listingblock" id="semester8" style="display: none">
            <div class="sheading">
                <div class="sheadings">
                    <h5>Semester 8: Course information</h5>
                </div>
                <!--<div class="sheading_action">
                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                    <div class="print_this"><a href="course.html#">Print This</a></div>
                </div>-->
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <ul class="listheading">
                    <li class="code colr">Code</li>
                    <li class="coursename colr">Course Name</li>
                    <li class="time colr">Credit Hour</li>
                    <li class="location colr">Full Marks</li>
                    <li class="instructor colr">Course Type</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-421</li>
                    <li class="coursename"><a href="courses/421.pdf" class="colr" target="_blank">Experimental Design</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>

                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-422</li>
                    <li class="coursename"><a href="courses/422.pdf" class="colr" target="_blank">Sample Survey</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-423</li>
                    <li class="coursename"><a href="courses/423.pdf" class="colr" target="_blank">Econometrics II</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-424</li>
                    <li class="coursename"><a href="courses/424.pdf" class="colr" target="_blank">Data Mining and Simulation</a></li>
                    <li class="time">3</li>
                    <li class="location">100</li>
                    <li class="instructor">Major</li>
                </ul>
                <ul class="courselisting">
                    <li class="code">Stat-425</li>
                    <li class="coursename"><a href="courses/425.pdf" class="colr" target="_blank">Actuarial Statistics</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-426</li>
                    <li class="coursename"><a href="courses/426.pdf" class="colr" target="_blank">Statistical Data Analysis X</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-427</li>
                    <li class="coursename"><a href="courses/427.pdf" class="colr" target="_blank">Statistical Data Analysis XI</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor">Major</li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">Stat-428</li>
                    <li class="coursename"><a href="courses/428.pdf" class="colr" target="_blank">Project Report</a></li>
                    <li class="time">2</li>
                    <li class="location">50</li>
                    <li class="instructor"></li>
                </ul>      
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename">Viva-Voce</li>
                    <li class="time">4</li>
                    <li class="location">100</li>
                    <li class="instructor"></li>
                </ul>
                <ul class="courselisting">
                    <li class="code">-</li>
                    <li class="coursename"><b>Total</b></li>
                    <li class="time"><b>23</b></li>
                    <li class="location"><b>650</b></li>
                    <li class="instructor"></li>
                </ul>      
                <div class="clear"></div>
            </div>
        </div>

        <!-- Note -->
        <div class="note">
            <a href="course.html#" class="close">&nbsp;</a>
            <p>
                <strong> NOTE:</strong> This syllabus is only applicable for the students for current session. Contents of this syllabus may be updated if necessary. 
            </p>
        </div>	
        <div class="clear"></div>

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