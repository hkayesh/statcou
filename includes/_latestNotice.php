<?php
    ////////////////////////////// *Fetch data from database*//////////////////////////////
    $query =  "SELECT *
        FROM `notices`
        WHERE `status` = '1'
        ORDER BY `created_at` DESC";
    $notices = mysql_query($query);
    if(mysql_num_rows($notices) >= 1) {
        $notice = mysql_fetch_array($notices);
        $dateTime = new DateTime($notice['created_at']);
        $created_at = $dateTime->format('d-m-Y');
        $description = $notice['description'];
        $filePath = $notice['file_path'];
    } else {
        $dateTime = date('d-m-Y');
        $created_at = $dateTime;
        echo $created_at;
        $description = 'There is no published notice';
        $filePath = '#';
    }
?>
<div class="news_updates">
    <span class="news_update">Latest Notice</span>
    <span class="news_date"><em><?php echo $created_at;?></em></span>
    <span class="news_des">
        <a href="notice.php" target="_blank" class="colr"><?php echo $description;?></a>
    </span>
</div>
<div class="clear"></div>