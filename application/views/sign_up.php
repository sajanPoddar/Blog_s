<h2>This is sign up form</h2>
<h3>
    <?php
    $message=$this->session->userdata('message');
    if(isset($message)){
        echo $message;
        $this->session->unset_userdata('message');
    }
    ?>
</h3>
<form action="<?php echo base_url(); ?>index.php/login/save_user" method="post" onsubmit="return validateStandard(this)">
    <table border="1" align="center">
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" placeholder="First Name" required="1" regexp="JSVAL_RX_ALPHA" err="Enter First Name..." /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" placeholder="Last Name" required="1" regexp="JSVAL_RX_ALPHA" err="Enter Last Name..."  /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email_address" placeholder="Email Address" required="1" regexp="JSVAL_RX_EMAIL" err="Enter Valid Email Address..."  /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Your Password" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Enter Password.."/><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
      <td>  <input type="password" name="confirm password" placeholder="Your confirm password" equals="password" err="confirm password must be same as password"/>
      </td></tr>
        <tr>
            <td>Address:</td>
            <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" ></textarea></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><input type="text" name="mobile_no" placeholder="Your Mobile No" /></td>
        </tr>
        <tr>
            <td> Gender</td>
            <td>
                <input type="radio" name="gender" value="male" checked="checked"/>MALE
                <input type="radio" name="gender" value="female"/>FEMALE
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" placeholder="Your City"  /></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><select  name="country" required="1" exclude=" ">
                    <option value=" ">Select Country.......</option>
                    <script type="text/javascript">
                        printCountryOptions();
                    </script>
                </select><span class="required">*</span>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zip_code" placeholder="Your Zip Code" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn"  value="Sign_Up"/></td>
        </tr>
    </table>
</form>
