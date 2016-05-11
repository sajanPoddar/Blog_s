
<form name="edit_blog" action="<?php echo base_url();?>blogger/update_blog" method="post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u>Add Blog</u></h2>  
    <table border="0" align="center" >
        <tr> 
            <td>Blog Title:</td>
            <td><input type="text" name="blog_title" value="<?php echo $result->blog_title;?>" placeholder="Blog Title" tabindex="1" maxlength="25" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr>
            <td> Select Name..</td>
            <td>
          <select name="category_id">
                    <option>
                        select category.....
                    </option>
                    <?php foreach ($all_category as $v_category) {
                        
                        ?><option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                    <?php }?>
                
                </select></td> 
        </tr>
        <tr>
            <td>Blog Description:</td>
            <td>
                <textarea name="blog_description" placeholder="Blog Description" id="ck_editor" tabindex="2" cols="31"> <?php echo $result->blog_description;?></textarea>  <?php echo display_ckeditor($check_editor['ckeditor']); ?>
<span class="required"> * </span>
            <input type="hidden" name="blog_id" value="<?php echo $result->blog_id;?>"  />
            </td> 
        </tr>       
        <tr>
            <td>Status:</td>
            <td><?php 
                    if($result->status==0)
                    {
                ?>
                <input type="radio" name="status" value="0" tabindex="3" checked="checked" />Publish
                <?php
                    }
                    else{
                ?>
                <input type="radio" name="status" value="0" tabindex="3"  />Publish
                <?php } ?>
                <?php 
                    if($result->status==1)
                    {
                ?>
                <input type="radio" name="status" value="1" tabindex="4" checked="checked" />Unpublish
                <?php
                    }
                    else{
                ?>
                <input type="radio" name="status" value="1" tabindex="3"  />Unpublish
                <?php } ?>
            </td>
        </tr>
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Update"/></td>
        </tr>
    </table>
     <script type="text/javascript" language="javascript">
        document.forms['edit_blog'].elements['category_id'].value='<?php echo $result->category_id;?>'
    </script>
</form>


