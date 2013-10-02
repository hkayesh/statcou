<?php include_once 'includes/_header.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Facilities | Statistics Dept. of COU';
        $( ".selected" ).attr( "class", "" );
        $("a:contains('Facilities')").attr("class", "selected");
    });
</script>
<!-- Content Seciton -->
<div id="content_section">
    <!-- News Updates -->
    <?php include_once 'includes/_latestNotice.php'; ?>
    <!-- Col1 -->
    <div class="col1">
        <!-- Banner -->
        <div id="banner1">
            <img src="images/computer.jpg" alt="" >
        </div>
        <!-- Content Links -->
        <?php //include_once 'includes/_contentLinks.php';?>
        <!-- Content Heading -->
        <div id="content2">
            <h2 class="pad8">Computer Lab</h2>
            <p>The department has a fully furnished computer lab that includes Windows and Linux systems, laser printers, a wide variety of current software, and high-speed connections to the Internet.

                Additional resources available in the computer lab are flatbed scanners; audio, video, and image editing;and web and print publishing. The statistical softwares like R, STATA, SPSS etc. are preloaded in the computers. The computer lab is also designed to increase students' group collaboration.

                Wireless service is available in the computer lab. </p>
        </div>
        <div class="clear"></div>
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

