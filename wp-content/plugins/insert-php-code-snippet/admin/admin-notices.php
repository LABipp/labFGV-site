<?php
function wp_ips_admin_notice()
{
	add_thickbox();
	$sharelink_text_array_ips = array
						(
						"I use Insert PHP Code Snippet wordpress plugin from @xyzscripts and you should too.",
						"Insert PHP Code Snippet wordpress plugin from @xyzscripts is awesome",
						"Thanks @xyzscripts for developing such a wonderful Insert PHP Code Snippet wordpress plugin",
						"I was looking for a Insert PHP Code Snippet plugin and I found this. Thanks @xyzscripts",
						"Its very easy to use Insert PHP Code Snippet wordpress plugin from @xyzscripts",
						"I installed Insert PHP Code Snippet from @xyzscripts,it works flawlessly",
						"Insert PHP Code Snippet wordpress plugin that i use works terrific",
						"I am using Insert PHP Code Snippet wordpress plugin from @xyzscripts and I like it",
						"The Insert PHP Code Snippet plugin from @xyzscripts is simple and works fine",
						"I've been using this Insert PHP Code Snippet plugin for a while now and it is really good",
						"Insert PHP Code Snippet wordpress plugin is a fantastic plugin",
						"Insert PHP Code Snippet wordpress plugin is easy to use and works great. Thank you!",
						"Good and flexible  Insert PHP Code Snippet plugin especially for beginners",
						"The best Insert PHP Code Snippet wordpress plugin I have used ! THANKS @xyzscripts",
						);
$sharelink_text_ips = array_rand($sharelink_text_array_ips, 1);
$sharelink_text_ips = $sharelink_text_array_ips[$sharelink_text_ips];

	
	echo '<style>
	#TB_window { width:50% !important;  height: 100px !important;
	margin-left: 25% !important; 
	left: 0% !important; 
	}
	</style>
	<script type="text/javascript">
			function xyz_ips_shareon_tckbox(){
			tb_show("Share on","#TB_inline?width=500&amp;height=75&amp;inlineId=show_share_icons_ips&class=thickbox");
		}
	</script>
	<div id="ips_notice_td" style="clear:both;width:98%;background: none repeat scroll 0pt 0pt #FBFCC5; border: 1px solid #EAEA09;padding:5px;">
	<p>It looks like you have been enjoying using <a href="https://wordpress.org/plugins/insert-php-code-snippet/" target="_blank"> Insert PHP Code Snippet  </a> plugin from Xyzscripts for atleast 30 days.Would you consider supporting us with the continued development of the plugin using any of the below methods?</p>
	<p>
	<a href="https://wordpress.org/support/view/plugin-reviews/insert-php-code-snippet" class="button" style="color:black;text-decoration:none;margin-right:4px;" target="_blank">Rate it 5★\'s on wordpress</a>';
	if(get_option('xyz_credit_link')=="0")
		echo '<a class="button xyz_ips_backlink" style="color:black;text-decoration:none;margin-right:4px;" target="_blank">Enable backlink</a>';
	
	echo '<a class="button" onclick=xyz_ips_shareon_tckbox(); style="color:black;text-decoration:none;margin-right:4px;">Share on</a>
	
	
	<a href="admin.php?page=insert-php-code-snippet-settings&ips_notice=hide" class="button" style="color:black;text-decoration:none;margin-right:4px;">Don\'t Show This Again</a>
	</p>
	
	<div id="show_share_icons_ips" style="display: none;">
	<a class="button" style="background-color:#3b5998;color:white;margin-right:4px;margin-left:100px;margin-top: 25px;" href="http://www.facebook.com/sharer/sharer.php?u=http://xyzscripts.com/wordpress-plugins/insert-php-code-snippet/" target="_blank">Facebook</a>
	<a class="button" style="background-color:#00aced;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://twitter.com/share?url=http://xyzscripts.com/wordpress-plugins/insert-php-code-snippet/&text='.$sharelink_text_ips.'" target="_blank">Twitter</a>
	<a class="button" style="background-color:#007bb6;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://www.linkedin.com/shareArticle?mini=true&url=http://xyzscripts.com/wordpress-plugins/insert-php-code-snippet/" target="_blank">LinkedIn</a>
	<a class="button" style="background-color:#dd4b39;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="https://plus.google.com/share?&hl=en&url=http://xyzscripts.com/wordpress-plugins/insert-php-code-snippet/" target="_blank">google+</a>
	
	</div>
	</div>';
	
	
}

$xyz_ips_installed_date = get_option('xyz_ips_installed_date');
if ($xyz_ips_installed_date=="") {
	$xyz_ips_installed_date = time();
}
if($xyz_ips_installed_date < ( time() - (30*24*60*60) ))
{
	if (get_option('xyz_ips_dnt_shw_notice') != "hide")
	{
		add_action('admin_notices', 'wp_ips_admin_notice');
	}
}
?>