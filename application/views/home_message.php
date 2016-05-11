<?php
    foreach($result as $vresult)
    {
?>
<div class="post">
    <h2 class="title">
        <a href="<?php echo base_url();?>welcome/single_blog/<?php echo $vresult->blog_id;?>"><?php echo $vresult->blog_title;?></a></h2>
    <div class="story">
        <p>
            <?php echo $vresult->blog_description;?>
        </p>
    </div>
    <div class="meta">
        <p class="date"><?php echo $vresult->created_date_time;?></p>
        <p class="file">Filed under <a href="#">Uncategorized</a>
            | <a href="#">Edit</a> | <a href="#">0
                Comments</a></p>
    </div>
</div>
<?php } ?>
<?php echo $blog;?>
</div> 