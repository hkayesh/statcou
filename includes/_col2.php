<div class="col2">
    <div class="news">
        <h5>News</h5>
        <marquee direction="up" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
        <ul>
            <?php
            ////////////////////////////// *Fetch data from database*//////////////////////////////
            $query =  "SELECT *
                        FROM `news`
                        WHERE `status` = '1'
                        ORDER BY `created_at` DESC";
            $news = mysql_query($query);
            if(mysql_num_rows($news) >= 1) {
                while ($news_item = mysql_fetch_array($news)) {
                    $dateTime = new DateTime($news_item['created_at']);
                    $created_at = $dateTime->format('d M, Y');
                    ?>
                    <li>
                        <div class="description">
                            <p><a href="<?php echo $news_item['file_path']?>" target="_blank"><?php echo $news_item['description']?></a></p>
                            <a class="gray" href="<?php echo $news_item['file_path']?>" target="_blank"><em>(Posted on <?php echo $created_at?>)</em></a>
                        </div>
                    </li>
                <?php
                }
            } else {
                echo '
                    <li>
                        <td colspan="3">No published news found</td>
                    </li>';
            }
            ?>
            </marquee>
    </div>
    <div class="clear"></div>

    <!-- Top Student -->  
        <div class="college_gallery">
            <h5>Top Students</h5>
            <ul>
                <li>
                    <div class="thumb" ><a href="javascript:void(0)"><img src="images/kangkan.jpg"  alt="" /></a></div>
                    <div class="description">
                        <h6><a href="javascript:void(0)">Kangkan Acharjee</a></h6>
                        <p><a href="javascript:void(0)" class="gray" ><em>Third year, 1st Batch</em></a></p>
                    </div> 
                </li>
                <li>
                    <div class="thumb" ><a href="javascript:void(0)"><img src="images/kulsuma.jpg"  alt="" /></a></div>
                    <div class="description">
                        <h6><a href="javascript:void(0)">Mst. Kulsuma Begum</a></h6>
                        <p><a href="javascript:void(0)" class="gray"><em>2rd year, 2nd Batch</em></a></p>
                    </div> 
                </li>
            </ul>
            <div class="clear"></div>
        </div>