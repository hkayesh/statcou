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
            <img src="images/seminar.jpg" alt="" >
        </div>
        <!-- Content Links -->
        <?php //include_once 'includes/_contentLinks.php';?>
        <!-- Content Heading -->
        <div id="content2">
            <h2 class="pad8">Seminar Library</h2>
            <p>The seminar library has ample of academic and non-academic books on various interests. Students are allowed to
                study and borrow books from the library. There are thousand of books already available and more books are
                about to be added in the list. There are many magazines and many national and international dailies are
                also available in seminar. An ideal environment for individual and group study is provided here in the seminar
                room of department.</p>
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

