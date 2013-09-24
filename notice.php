<?php 
include_once 'includes/_header.php'; 
include_once 'includes/_db.php';
?>
<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'Notice Board | Statistics Dept. of COU';
            $( ".selected" ).attr( "class", "" );
            $("a:contains('Notice')").attr("class", "selected");
      });
    </script>
<!-- Content Seciton -->
<div id="content_section">
    <!-- Col1 -->
    <div class="col1">  
        <!-- Content Heading -->
        <div class="content_heading">
            <div class="heading"><h2>Notice</h2> </div>
            <!--<div class="share"><a  href="course.html#">Share with friends</a></div>-->
        </div>

        <div class="clear"></div>
        <div class="listingblock" id="semester1" style="display: block">
            <div class="sheading">
            </div>
            <div class="clear"></div>
            <div class="course_listing">
                <table>
                    <tr>
                        <th style="width: 13%">Date</th>
                        <th class="second_column">Description</th>
                        <th style="width: 13%">Link</th>
                    </tr>
         <?php 
         ////////////////////////////// *Fetch data from database*//////////////////////////////
         $query =  "SELECT *
                        FROM `notices`
                        WHERE `status` = '1'
                        ORDER BY `created_at` ASC";
         
         $notices = mysql_query($query);
         
         while ($notice = mysql_fetch_array($notices)) {
         ?>    
             <tr>
                <td><?php echo $notice['created_at']?></td>
                <td class="second_column"><?php echo $notice['description']?></td>
                <td><a href="<?php echo $notice['file_path']?>" target="_blank">Download</a></td>
            </tr>
         <?php
         }
         ?>   
                    
                    <tr>
                        <td>10-08-13</td>
                        <td class="second_column">Lab equipment tender notice</td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <td>10-08-13</td>
                        <td class="second_column">Lab equipment tender notice </td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <td>10-08-13</td>
                        <td class="second_column">Lab equipment tender notice lab equipment tender notice lab equipment tender notice lab equipment tender notice lab equipment tender notice </td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <td>10-08-13</td>
                        <td class="second_column">Lab equipment tender notice </td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                        <td>10-08-13</td>
                        <td class="second_column">Lab equipment tender notice lab equipment tender notice lab equipment tender notice lab equipment tender notice lab equipment tender notice </td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr class="last_row">
                        <td>10-08-13</td>
                        <td class="second_column">Lab equipment tender notice</td>
                        <td><a href="#">Download</a></td>
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