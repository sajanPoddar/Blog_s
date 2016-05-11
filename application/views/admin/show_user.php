<table border="1" align="center">
     
    <tr>
        <th> user name</th>
        <th>status</th>
        <th> Action</th>
    </tr>
    <?php
    foreach ($user as $auser) {
        
    
    ?>
    <tr>
        <td><?php echo $auser->first_name.' '.$auser->last_name; ?></td>
        <td><?php  if($auser->admin_status==1){
        echo "activate" ;}
            else     {           echo "block ";
            }?></td>
        <td>
            <a href="<?php echo base_url();?>super_admin/add_new_user/<?php echo $auser->user_id;?>">Activate</a> |
            <a href="<?php echo base_url();?>super_admin/block_user/<?php echo $auser->user_id;?>" onclick="return checkDelete();">Block</a>
        </td>
    </tr>
    <?php }?>
</table>


