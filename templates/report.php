<div class="wrap">
<div class="icon32"><img src='<?php echo plugins_url('/images/icon-32.png', dirname(__FILE__))?>' /></div>
        
<h2><?php echo self::PLUGIN_NAME?> <?php echo __('Reports', self::CLASS_NAME)?>:</h2>


<p><?php _e('See the reports on this page:',self::CLASS_NAME)?></p>
    
  		<table width="100%"><tr>
        <td style="vertical-align:top">
 
 		<form action="" method="post">
        
        <div class="metabox-holder">         
		<div class="postbox" >
        	<h3><?php _e('Last 1000 successfull or failed logins',self::CLASS_NAME);?></h3>
        
        	<div class="inside">
            
            <label><?php _e('IP&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Date and Time&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Status',self::CLASS_NAME)?></label>
            
                <p>
                <select name="last_logins" size="10" multiple="multiple" >
                	<?php
					foreach($last_100_logins as $login):
					?>
                    <option><?php echo implode("&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;",$login)?></option>
                    <?php
					endforeach;
					?>
                </select>
                </p>

			</div>
		</div>
        </div>
 
 
 		<div class="metabox-holder">
 		<div class="postbox">
        
        	<h3><?php _e('All Currently Blocked IPs', self::CLASS_NAME);?></h3>
        
        	<div class="inside">
            	<label><?php _e('Note that all blocked IPs are unblocked automatically on the next day!', self::CLASS_NAME);?></label>
            	<p>
                    <select name="blocked_ips" size="10" multiple="multiple" >
                        <?php
                        foreach($ips as $ip):
                        ?>
                        <option><?php echo $ip[0];?></option>
                        <?php
                        endforeach;
						
						if(empty($ips)) echo "<option>" . __('Currently there is no Ips blocked. That is good :)', self::CLASS_NAME) . "</option>";
                        ?>
                    </select>
                </p>
            

			</div>
		</div>
        </div>
                
        </form>
          
   		</td>
        <td style="vertical-align:top; width:410px">

        

        <div class="metabox-holder">

		<div class="postbox" >

        

        	<h3 style="font-size:24px; text-transform:uppercase;color:#F00;">

        	<?php _e('Take a Look!',self::CLASS_NAME);?>

            </h3>

            

             <h3><?php _e('Best Wordpress Themes',self::CLASS_NAME)?>: <a href="http://plugin-wp.net/aff_elegantthemes" target="_blank">Elegant Themes</a></h3>

             

        	<div class="inside">

                <p>

                <a href="http://plugin-wp.net/aff_elegantthemes" target="_blank"><img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/elegantthemes.jpg" ></a>

				</p>



			</div>

 
 		</div>
        </div>
        
         <div class="metabox-holder">

		<div class="postbox" >           

            <h3><?php _e('Best Web Hosting for Wordpress',self::CLASS_NAME)?>: <a href="<?php _e('http://plugin-wp.net/aff_hostgator',self::CLASS_NAME)?>" target="_blank">Host Gator</a></h3>

            

        	<div class="inside">

                <p>

                <a href="<?php _e('http://plugin-wp.net/aff_hostgator',self::CLASS_NAME)?>" target="_blank"><img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/hostgator.jpg"></a>

				</p>



			</div> 

                        

		</div>

        </div>

              

       </td>
       </tr>
       </table>


<hr />


<table>
<tr>
<td>
<img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/anderson-makiyama.png" />
</td>
<td>
<ul>

<li><?php _e('Author',self::CLASS_NAME);?>: <strong>Anderson Makiyama</strong>

</li>

<li><?php _e("Author's email",self::CLASS_NAME);?>: <a href="mailto:andersonmaki@gmail.com" target="_blank">andersonmaki@gmail.com</a>

</li>

<li><?php _e('Visit the Plugin page',self::CLASS_NAME);?>: <a href="<?php echo self::PLUGIN_PAGE?>" target="_blank"><?php echo self::PLUGIN_PAGE?></a>

</li>

<li>

<?php _e("Visit the author's site",self::CLASS_NAME);?>: <a href="http://plugin-wp.net" target="_blank">www.Plugin-WP.net</a>

</li>

</ul>
</td>
</tr>
</table>

</div>