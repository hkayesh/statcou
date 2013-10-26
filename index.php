<?php include_once 'includes/_header.php'; ?>
<!-- Content Seciton -->
<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'Home | Statistics Dept. of COU';
      });
      
    $(document).ready(function(){
                $(".banner_des").css("background-color","rgba(67,59,61,0.5)");
            });
</script>
<div id="content_section">
    <!-- News Updates -->
    <?php include_once 'includes/_latestNotice.php'; ?>
    <!-- Col1 -->
    <div class="col1">
        <!-- Banner -->
        <div id="banner">
            <div id="slider2">
                <div class="contentdiv">
                    <a href="index.php#"><img src="images/banner.jpg" alt="" /></a>
                    <div class="banner_des">
                    </div>
                </div> 
                <!--<div class="contentdiv">
                    <a href="index.php#"><img src="images/banner1.jpg" alt="" /></a>
                    <div class="banner_des">
                       <h4>Image description header here</h4>
                        <p>Her goes the detail description.......</p>
                    </div>
                </div> 
                <div class="contentdiv">
                    <a href="index.php#"><img src="images/banner2.jpg" alt="" /></a>
                    <div class="banner_des">
                        <h4>Image description header here</h4>
                        <p>Her goes the detail description.......</p>
                    </div>
                </div>-->
                <div class="contentdiv">
                    <a href="index.phpl#"><img src="images/banner3.jpg" alt="" /></a>
                    <div class="banner_des">
                    </div>
                </div> 
                <div class="contentdiv">
                    <a href="index.php#"><img src="images/banner4.jpg" alt="" /></a>
                    <div class="banner_des">
                    </div>
                </div> 
            </div> 
            <div id="paginate-slider2" class="pagination">
            </div>
            <script type="text/javascript" src="js/slider.js" ></script>
        </div>
        <!-- Content Links -->
        <?php include_once 'includes/_contentLinks.php'; ?>  
        <!-- Content Heading -->
        <div class="content_heading">
            <div class="heading"><h2>Welcome to Department of Statistics, Comilla University</h2> </div>
        </div>
        <p>
            The Department of Statistics of Comilla University was established in 2011. The academic activities of the department were launched on 16th January, 2011 with only four faculty members and 32 students.  
        </p>
        <p>
            The primary objectives of the department are to serve as a centre of excellence for statistical research and education, provide learning environments that produce well educated statisticians, play significant role in science and technology by probabilistic and statistical ideas and methods, and join with others in making strengths of the statistical science to address societal needs.   
        </p>
        <p>
            The department is offering 4-years Bachelor of Science (B. Sc.) Honors degree in Statistics. The program runs under semester system and each academic year consists of 2 semesters.   The total number of semester is 8, totaling 139 credits and 4050 marks. The courses offered in this program are of theoretical and practical nature.  
            <a class="readmore" href="index.php"></a>
        </p>
        <div class="clear"></div>

        <!-- col1 ends -->	
    </div>
    <!-- Col2 -->
    <?php include_once 'includes/_col2.php'; ?>
    <!--col2 ends -->			
</div>
<div class="clear"></div>
<!-- Slder -->	
<?php include_once 'includes/_logoSlider.php'; ?>
<!-- End of slider Slder -->
</div>	
<div class="clear"></div>
</div>
</div>    
<!-- Footer Section -->
<?php include_once 'includes/_footer.php'; ?>