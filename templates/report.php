<div class="wrap">
<div class="icon32"><img src='<?php echo plugins_url('/images/icon-32.png', dirname(__FILE__))?>' /></div>
        
<h2><?php echo self::PLUGIN_NAME?> <?php echo __('Reports', self::CLASS_NAME)?>:</h2>
    
  		<table width="100%"><tr>
        <td style="vertical-align:top">
 
 		
        
        <div class="metabox-holder">         
		<div class="postbox" >
        	<h3><?php _e('Last 1000 successfull or failed logins',self::CLASS_NAME);?></h3>
        
        	<div class="inside">
            
            <label><?php _e('IP&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Date and Time&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Status',self::CLASS_NAME)?></label>
            
                <p>
                <div style="width:600px;height:300px; overflow:scroll;">
                	<?php
					foreach($last_100_logins as $login):
					?>
                    <?php echo implode("&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;",$login)?><br>
                    <?php
					endforeach;
					?>
                </div>
                </p>

			</div>
		</div>
        </div>
 
 
 		<div class="metabox-holder">
 		<div class="postbox">
        
        	<h3><?php _e('All Currently Blocked IPs', self::CLASS_NAME);?></h3>
        
        	<div class="inside">
            
            	<table width="100%">
                <tr>
                <td width="50%">
                <h4><?php _e('Temporary Blocked IPs', self::CLASS_NAME);?></h4>
            	
            	<p>
                    <div style="width:350px;height:300px; overflow:scroll;">
                        <?php
                        foreach($ips as $ip):
                        ?>
                        <?php echo $ip[0];?></br>
                        <?php
                        endforeach;
						
						if(empty($ips)) echo "<option>" . __('Currently there is no Ips blocked. That is good :)', self::CLASS_NAME) . "</option>";
                        ?>
                    </div>
                </p>
            	<label><?php _e('Note that temporary blocked IPs are unblocked<br> automatically on the next day!', self::CLASS_NAME);?></label>
				</td>
                <td width="50%">

                <h4 style="color:red;"><?php _e('Permanent Blocked IPs', self::CLASS_NAME);?></h4>
            	
            	<p>
                    <div style="width:350px;height:300px; overflow:scroll;">
                        <?php
                        foreach($permanent_ips as $p_ip):
                        ?>
                        <?php echo $p_ip;?></br>
                        <?php
                        endforeach;
						
						if(empty($permanent_ips)) echo "<option>" . __('Currently there is no Permanent Ips blocked. That is good :)', self::CLASS_NAME) . "</option>";
                        ?>
                    </div>
                </p>
                <label><?php _e('Note that permanent blocked IPs keep blocked<br>until you unblock it manually!', self::CLASS_NAME);?></label>                
                </td>
                </tr>
                </table>
                
			</div>
		</div>
        </div>
                
        
          
   		</td>
        <td style="vertical-align:top; width:410px">
        

 		 <?php require("banners.php");?>    

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

<li>

<?php _e("Facebook",self::CLASS_NAME);?>: <a href="https://www.facebook.com/AndersonMaki" target="_blank">Facebook.com/AndersonMaki</a>

</li>

<li><?php _e('Visit the Plugin page',self::CLASS_NAME);?>: <a href="<?php echo self::PLUGIN_PAGE?>" target="_blank"><?php echo self::PLUGIN_PAGE?></a>

</li>

</ul>
</td>
</tr>
</table>

</div>