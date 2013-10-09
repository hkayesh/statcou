<?php 
include_once 'includes/_header.php';
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
                                ORDER BY `created_at` DESC";
                    $notices = mysql_query($query);
                    if(mysql_num_rows($notices) >= 1) {
                        while ($notice = mysql_fetch_array($notices)) {
                         $dateTime = new DateTime($notice['created_at']);
                         $created_at = $dateTime->format('d-m-Y');
                        ?>
                         <tr>
                            <td><?php echo $created_at?></td>
                            <td class="second_column"><?php echo $notice['description']?></td>
                            <td><a href="<?php echo $notice['file_path']?>" target="_blank">Download</a></td>
                        </tr>
                        <?php
                        }
                    } else {
                        echo '
                        <tr>
                            <td colspan="3">No published notice found</td>
                        </tr>';
                    }

                    ?>
                </table>
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