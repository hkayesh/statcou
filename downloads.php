<?php include_once 'includes/_header.php'; ?>
<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'Downloads | Statistics Dept. of COU';
            $( ".selected" ).attr( "class", "" );
            $("a:contains('Downloads')").attr("class", "selected");
      });
    </script>
<!-- Content Seciton -->
<div id="content_section">
    <!-- Col1 -->
    <div class="col1">  
        <!-- Content Heading -->
        <div class="content_heading">
            <div class="heading"><h2>Downloads</h2> </div>
            <!--<div class="share"><a  href="course.html#">Share with friends</a></div>-->
        </div>

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
                <table>
                    <tr>
                        <th style="width: 13%">Date</th>
                        <th class="second_column">Description</th>
                        <th style="width: 13%">Link</th>
                    </tr>
                    <?php
                    ////////////////////////////// *Fetch data from database*//////////////////////////////
                    $query =  "SELECT *
                                    FROM `downloads`
                                    WHERE `status` = '1'
                                    ORDER BY `created_at` DESC";
                    $downloads = mysql_query($query);
                    if(mysql_num_rows($downloads) >= 1) {
                        while ($download = mysql_fetch_array($downloads)) {
                            $dateTime = new DateTime($download['created_at']);
                            $created_at = $dateTime->format('d-m-Y');
                            ?>
                            <tr>
                                <td><?php echo $created_at?></td>
                                <td class="second_column"><?php echo $download['description']?></td>
                                <td><a href="<?php echo $download['file_path']?>" target="_blank">Download</a></td>
                            </tr>
                        <?php
                        }
                    } else {
                        echo '
                        <tr>
                            <td colspan="3">No published download link found</td>
                        </tr>';
                    }
                    ?>

                </table>
                <!--<ul class="listheading">
                    <li class="download_name colr" >Date</li>
                    <li class="download_description colr">Description</li>
                </ul>
                <ul class="courselisting">
                    <li class="download_name">10-08-13 </li>
                    <li class="download_description"><a href="courses/111.pdf" class="colr" target="_blank">Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I Basic Statistics-I</a></li>

                </ul>
                <ul class="courselisting">
                    <li class="download_name">Stat-112</li>
                    <li class="download_description"><a href="courses/112.pdf" class="colr" target="_blank">Elementary Probability-I</a></li>
                </ul>
                <ul class="courselisting">
                    <li class="download_name">Stat-113</li>
                    <li class="download_description"><a href="courses/113.pdf" class="colr" target="_blank">Linear Algebra</a></li>
                </ul>
                <ul class="courselisting">
                    <li class="download_name">Stat-114</li>
                    <li class="download_description"><a href="courses/114.pdf" class="colr" target="_blank">Calculus</a></li>
                </ul>
                <ul class="courselisting">
                    <li class="download_name">Stat-115</li>
                    <li class="download_description"><a href="courses/115.pdf" class="colr" target="_blank">Principles of Economics-I</a></li>
                </ul>      
                <ul class="courselisting">
                    <li class="download_name">Stat-116</li>
                    <li class="download_description"><a href="courses/116.pdf" class="colr" target="_blank">Statistical Data Analysis-I</a></li>
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