<?php 
include_once 'includes/_header.php'; 
?>

<script type="text/javascript">
      $(document).ready(function() {
            document.title = 'Gallery | Statistics Dept. of COU';
            $( ".selected" ).attr( "class", "" );
            $("a:contains('Gallery')").attr("class", "selected");
            $("#tabname1").addClass("selected");
      });
      
    function showGallery(tab_id) {
        console.log(tab_id);
        for(var i=1; i<=2; i++) {
            console.log("i="+i);
            if(i===parseInt(tab_id)){
                document.getElementById("tab"+i).style.display="block" ;
                document.getElementById("tabname"+i).className="selected" ;
            }
            else {         
                document.getElementById("tab"+i).style.display="none" ;
                document.getElementById("tabname"+i).className="not" ;
            }      
        }
    }
</script>
<style type="text/css">
    .galleryMini {
        height: 100px;
        width: 150px;
    }
</style>

<!-- Content Seciton -->
<div id="content_section">
    <!-- News Updates -->
    <?php include_once 'includes/_latestNotice.php'; ?>
    <div class="clear"></div>
    <!-- Gallery -->
    <div class="gallery">
        <div class="gallery_top">
            <div class="gallery_heading">
                <h2>Image Gallery</h2>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Col1 -->
        <div class="categorydiv">
            <ul>
                <li><a href="javascript:void(0)" onclick="showGallery(1);" id="tabname1" class="selected">Study Tour 2013</a></li>
                <li><a href="javascript:void(0)" onclick="showGallery(2);" id="tabname2">Workshop</a></li>
            </ul>
        </div>
        <div class="thumbdiv" id="tab1">
            <ul>
                <li><a href="images/gallery/study_tour_2013/1.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/1_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/2.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/2_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/3.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/3_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/4.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/4_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/5.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/5_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/6.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/6_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/7.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/7_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/8.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/8_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/9.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/9_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/study_tour_2013/10.JPG" rel="galleryimg" class="galleryimg" title="Study Tour 2013" ><img class="galleryMini" src="images/gallery/study_tour_2013/10_thumb.jpg"  alt="" /></a></li>
                </ul>
            <div class="hdiv">&nbsp;</div>
        </div>
        <div class="thumbdiv" id="tab2" style="display: none">
            <ul>
                <li><a href="images/gallery/workshop/1.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/1_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/2.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/2_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/3.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/3_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/4.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/4_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/5.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/5_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/6.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/6_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/7.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/7_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/8.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/8_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/9.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/9_thumb.jpg"  alt="" /></a></li>
                <li><a href="images/gallery/workshop/10.JPG" rel="galleryimg" class="galleryimg" title="Workshop"><img  class="galleryMini" src="images/gallery/workshop/10_thumb.jpg"  alt="" /></a></li>
            </ul>
            <div class="hdiv">&nbsp;</div>
        </div>       
    </div>  
</div>
<div class="clear"></div>
</div>	
<div class="clear"></div>
</div>
</div>    
<!-- Footer Section -->
<?php include_once 'includes/_footer.php'; ?>

<?php 
    $intGallery_id = $_REQUEST['gallery_id'];
    if(isset($intGallery_id) && $intGallery_id != "") {
        echo '<script>showGallery('.$intGallery_id.');</script>';
    }
?>