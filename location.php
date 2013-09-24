<?php include_once 'includes/_header.php'; ?>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCZPy9y8wdCHliw7oD3PX03wX9P8PdTRkc&sensor=true">
</script>
<script>
    function initialize() {
        var mapCenter = new google.maps.LatLng(23.419325, 91.136449);
        var mapProp = {
          center:mapCenter, zoom:14,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };
        var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var marker=new google.maps.Marker({
            position:mapCenter,
        });
        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content:"<div class = 'MarkerPopUp' style='width: 160px; height: 60px; text-align: center; color: black'><div class = 'MarkerContext'><b>Department of Statistics</b><br>Comilla University<br>Kotbari, Comilla</div></div>"
        }); 
        
        infowindow.open(map,marker);
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Content Seciton -->
<div id="content_section">
    <!-- News Updates -->
    <?php include_once 'includes/_latestNotice.php'; ?>
    <!-- Col1 -->
    <div class="col1">  
        <!-- Content Heading -->
        <div class="content_heading">
            <div class="heading"><h2>Location</h2> </div>
            </div>
        <div id="googleMap" style="width:100%;height:100%; border: 1px solid activeborder"></div>
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