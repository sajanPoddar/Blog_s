<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" /><title><?php echo $title;?></title>

        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href=" <?php echo base_url();?>css/default.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url();?>scripts/country.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/jsval.js"></script>
        <script type="text/javascript">
        function checkDelete(){
            var chk=confirm("are u sure to delete")
            if(chk){
                return true;
            } else
            {
                return false;
            }
        } 
            </script>
    </head>


    <body>
        <div id="menu">
            <ul>
                <li><a href="<?php echo base_url();?>welcome/index" accesskey="1" title="">Blog</a></li>
                <li class="active"><a href="<?php echo base_url();?>welcome/gallery" accesskey="2" title="">Photos</a></li>
                <?php
                $user_id=$this->session->userdata('user_id');
                if ($user_id!=null) {
                    
                
                ?>
                
                <li><a href="<?php echo base_url();?>blogger/profile" accesskey="3" title="">Profile</a></li>
                <li><a href="<?php echo base_url();?>blogger/add_blog" accesskey="4" title="">Add Blog</a></li>
                 <li><a href="<?php echo base_url();?>blogger/my_blogs" accesskey="4" title="">MY Blog</a></li>
                <li><a href="<?php echo base_url();?>blogger/logout" accesskey="4" title="">Log Out</a></li>
                <?php }
                     else {?>
                <li><a href="<?php echo base_url();?>login/sign_up" accesskey="5" title="">Sign_up</a></li>
                <li><a href="<?php echo base_url();?>login/user_login" accesskey="5" title="">Login</a></li>
                     <?php }?>
            </ul>
        </div>
        <!-- end #menu -->
        <?php if (isset($header)){?>
        <div id="header">
            <h1>The Green House</h1>
            <h2>By Free CSS Templates</h2>
        </div>
        <?php }?>
        <!-- end #header -->
        <div id="wrapper">
            <div id="content">
                <div id="posts">
                <?php echo $maincontent;?>
               
                </div>
                <!-- end #posts -->
                <div id="links">
                    <ul>
                        <li><?php if (isset($archives)) {?>
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#">February 2007</a> <i>(22)</i></li>
                                <li><a href="#">January 2007</a> <i>(31)</i></li>
                                <li><a href="#">December 2006</a> <i>(31)</i></li>
                                <li><a href="#">November 2006</a> <i>(30)</i></li>
                                <li><a href="#">October 2006</a> <i>(31)</i></li>
                            </ul>
                        </li>
                        <?php }?>
                        <li>
                            <h2>Categories</h2>
                            <ul>
                                <?php foreach ($all_category as $v_category) {
                                
                            ?>
                                <li><a href="<?php echo base_url();?>welcome/single_category/<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <li>
                            <h2>Blog Roll</h2>
                            <ul>
                                <li><a href="#">Donec Dictum Metus</a></li>
                                <li><a href="#">Etiam Rhoncus Volutpat</a></li>
                                <li><a href="#">Integer Gravida Nibh</a></li>
                                <li><a href="#">Maecenas Luctus Lectus</a></li>
                                <li><a href="#">Mauris Vulputate Dolor Nibh</a></li>
                                <li><a href="#">Nulla Luctus Eleifend</a></li>
                                <li><a href="#">Posuere Augue Sit Nisl</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end #links -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <!-- end #content -->
        <div id="footer">
            <p id="legal">Copyright © 2007 The Green House. Designed
                by <a href="http://www.freecsstemplates.org/">Free CSS
                    Templates</a></p>
            <p id="brand">The Green House</p>
        </div>
        <!-- end #footer -->
        <div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">Design
            downloaded from <a href="http://www.freewebtemplates.com/">Free
                Templates</a> - your source for free web templates<br />
            Supported by <a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a>
        </div>
    </body></html>