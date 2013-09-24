<?php include_once 'includes/_header.php'; ?>
<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'No Content | Statistics Dept. of COU';
      });
      
    function showSemester() {
        var semester_id = $("#sem").val();
        //alert(semester_id);
        for(var i=1; i<=2; i++) {
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
            <div class="heading"><h2>Content to be added here soon...</h2> </div>
            <!--<div class="share"><a  href="course.html#">Share with friends</a></div>-->
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