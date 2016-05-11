<h2>Edit</h2>

<form name="edit_profile" action="<?php echo base_url(); ?>blogger/update_user" method="post" onsubmit="return validateStandard(this)">
    <table  align="center">
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" value="<?php echo $result->first_name;?>" required="1" regexp="JSVAL_RX_ALPHA" err="Enter First Name..." /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" value="<?php echo $result->last_name;?>" required="1" regexp="JSVAL_RX_ALPHA" err="Enter Last Name..."  /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email_address" value="<?php echo $result->email_address;?>" required="1" regexp="JSVAL_RX_EMAIL" err="Enter Valid Email Address..."  /><span class="required">*</span></td>
        </tr>
        <!--<tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="Your Password" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Enter Password.."/><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
      <td>  <input type="password" name="confirm password" value="Your confirm password" equals="password" err="confirm password must be same as password"/>
      </td></tr>-->
        <tr>
            <td>Address:</td>
            <td><textarea cols="30" rows="10" name="address" value="Your Address" >
                <?php echo $result->address;?>
                </textarea></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><input type="text" name="mobile_no" value="<?php echo $result->mobile_no;?>" /></td>
        </tr>
        <tr>
            <td> Gender</td>
            <td>
                <?php if ($result->gender=='male') {
                    
                ?>
                <input type="radio" name="gender" value="male" checked="checked"/>MALE
                <?php } else{?>
                <input type="radio" name="gender" value="female"/>MALE
                <?php }?>
                
                <?php if ($result->gender=='female') {
                    
                ?>
                <input type="radio" name="gender" value="female" checked="checked"/>FEMALE
                <?php } else{?>
                <input type="radio" name="gender" value="female"/>FEMALE
                <?php }?>
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" value="<?php echo $result->city;?>"  /></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><select  name="country" required="1" exclude=" " value="<?php echo $result->country;?>">
                    <option value=" ">Select Country.......</option>
                    <script type="text/javascript">
                        printCountryOptions();
                    </script>
                </select><span class="required">*</span>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zip_code" value="<?php echo $result->zip_code;?>" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn"  value="Update"/></td>
        </tr>
    </table>
    <script type="text/javascript" language="javascript">
        document.forms['edit_profile'].elements['country'].value='<?php echo $result->country;?>'
    </script>
</form>

