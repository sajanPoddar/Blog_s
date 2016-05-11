<br/>
<br/>
<br/>

<h2>Profile Info: </h2>
<br/>
<hr/>

    <table  align="center">
        <tr>
            <td>Full  Name:</td>
            <td>
                <?php
                echo $result->first_name.' '.$result->last_name;?>
              
            </td>
        </tr>
       
            <td>Email Address:</td>
            <td><?php echo $result->email_address;?></td>
        <tr>
            <td>Address:</td>
            <td><?php echo $result->address;?></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><?php echo $result->mobile_no;?></td>
        </tr>
        <tr>
            <td> Gender</td>
            <td>
<?php echo $result->gender;?>                
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td><?php echo $result->city;?></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>
                <?php echo $result->country;?>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td> <?php echo $result->zip_code;?></td>
        </tr>
        
    </table>

<h2>
    <a href="<?php echo base_url();?>blogger/edit_profile">Edit</a>
</h2>
