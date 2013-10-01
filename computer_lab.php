<?php include_once 'includes/_header.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Faculty | Statistics Dept. of COU';
        $( ".selected" ).attr( "class", "" );
        $("a:contains('Faculty')").attr("class", "selected");
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

