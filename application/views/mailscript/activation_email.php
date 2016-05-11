<h4>
    Hello <?php echo $last_name;?>
</h4>
<p>
    You are successfully registered
    Thank You to join our community..
</p>
<p>
    Your Login Info<br/>
    <strong>
        Email Address: 
    </strong><?php echo $to_address;?><br/>
    <strong>password:</strong>
    <?php echo $password; ?>
    
    
</p>
<p> To Active ur Account click the link
    <a href="<?php echo base_url()?>welcome/active_user_account/<?php echo $user_id?>">
        <?php echo base_url()?>welcome/active_user_account
    </a>
</p>
<p>
    <strong>Regards</strong>
    blog_s
</p>