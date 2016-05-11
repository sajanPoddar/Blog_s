
<div class="post">
    <h2 class="title">
        <a href="<?php echo base_url(); ?>welcome/single_blog/<?php echo $result->blog_id; ?>">
            <?php echo $result->blog_title; ?></a></h2>
    <div class="story">
        <p>
            <?php echo $result->blog_description; ?>
        </p>
        </br>
        </hr>
        <table>
            <?php foreach ($comments as $acomments) {
                
            ?>
            <tr>
                <td> NAME :</td>
                <td>
                    <?php echo $acomments->first_name;?>
                </td>
            </tr>
            <tr>
                <td> comment :</td>
                <td>
                   <?php echo $acomments->comments_description;?>
                </td>
            </tr>
            <?php }?>
        </table>
        <form action="<?php echo base_url();?>welcome/save_comments" method="post">
               
        <table>
            <tr>
                

                <td> <input type="hidden" name="user_id" value="<?php echo $result->user_id;?>">
                    <input type="hidden" name="blog_id" value="<?php echo $result->blog_id;?>">    
                </td>
            </tr>
            <tr>
                <td>comment</td>
                <td>
                    <textarea name="comments_description" id="" cols="30" rows="10"> </textarea>
                </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="btn" value="Submit">
            </td>
            </tr>
        </table>
                
    </div>
</form>
    <div class="meta">
        <p class="date">Posted on February 22, 2007 by Admin</p>
        <p class="file">Filed under <a href="#">Uncategorized</a>
            | <a href="#">Edit</a> | <a href="#">0
                Comments</a></p>
    </div>
</div>

