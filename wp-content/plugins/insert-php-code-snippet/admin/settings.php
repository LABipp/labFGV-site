<?php
if ( ! defined( 'ABSPATH' ) ) 
	exit;

global $wpdb;
// Load the options
if(isset($_GET['ips_notice'])&& $_GET['ips_notice'] == 'hide')
{
	update_option('xyz_ips_dnt_shw_notice', "hide");
	?>
<style type='text/css'>
#ips_notice_td
{
display:none;
}
</style>
<div class="system_notice_area_style1" id="system_notice_area">
Thanks again for using the plugin. We will never show the message again.
&nbsp;&nbsp;&nbsp;<span
id="system_notice_area_dismiss">Dismiss</span>
</div>
<?php
}
if($_POST){

	if (! isset( $_REQUEST['_wpnonce'] ) || ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'snipp-psetting_' )) {
			wp_nonce_ays( 'snipp-psetting_' );
			exit;
		}
		else {
		
	$_POST=xyz_trim_deep($_POST);
	$_POST = stripslashes_deep($_POST);
				
		$xyz_ips_limit = abs(intval($_POST['xyz_ips_limit']));
		if($xyz_ips_limit==0)$xyz_ips_limit=20;
		
		$xyz_ips_credit = $_POST['xyz_ips_credit'];
		if(($xyz_ips_credit=="ips")||($xyz_ips_credit==0))
			update_option('xyz_credit_link',$xyz_ips_credit);

		$xyz_ips_sortfield=$_POST['xyz_ips_sort_by_field'];
		if(($xyz_ips_sortfield=="id")||($xyz_ips_sortfield=="title"))
			update_option('xyz_ips_sort_field_name',$xyz_ips_sortfield);

		$xyz_ips_sortorder=$_POST['xyz_ips_sort_by_order'];
		if(($xyz_ips_sortorder=="asc")||($xyz_ips_sortorder=="desc"))
			update_option('xyz_ips_sort_order',$xyz_ips_sortorder);	
		
		update_option('xyz_ips_limit',$xyz_ips_limit);

	?>
	
	<div class="system_notice_area_style1" id="system_notice_area">
		Settings updated successfully. &nbsp;&nbsp;&nbsp;<span id="system_notice_area_dismiss">Dismiss</span>
	</div>
	<?php
}
}

?>

<div>

	
	<form method="post">
	<?php wp_nonce_field('snipp-psetting_');?>
	<div style="float: left;width: 98%">
	<fieldset style=" width:100%; border:1px solid #F7F7F7; padding:10px 0px 15px 10px;">
	<legend ><h3>Settings</h3></legend>
	<table class="widefat"  style="width:99%;">
	
			<tr valign="top">	
	<td scope="row" ><label for="xyz_ihs_sort">Sorting of snippets</label>
				</td>
	

<td>
		<select id="xyz_ips_sort_by_field" name="xyz_ips_sort_by_field"  >
			<option value="id" <?php if(isset($_POST['xyz_ips_sort_by_field']) && $_POST['xyz_ips_sort_by_field']=='id'){echo 'selected';} else if(get_option('xyz_ips_sort_field_name')=="id"){echo 'selected';} ?>>Based on create time</option>
			<option value="title" <?php if(isset($_POST['xyz_ips_sort_by_field']) && $_POST['xyz_ips_sort_by_field']=='title'){ echo 'selected';}else if(get_option('xyz_ips_sort_field_name')=="title"){echo 'selected';} ?>>Based on name</option>
		</select>&nbsp;
		<select id="xyz_ips_sort_by_order" name="xyz_ips_sort_by_order"  >
			<option value="desc" <?php if(isset($_POST['xyz_ips_sort_by_order']) && $_POST['xyz_ips_sort_by_order']=='desc'){echo 'selected';} else if(get_option('xyz_ips_sort_order')=="desc"){echo 'selected';} ?>>Descending</option>
			<option value="asc" <?php if(isset($_POST['xyz_ips_sort_by_order']) && $_POST['xyz_ips_sort_by_order']=='asc'){ echo 'selected';}else if(get_option('xyz_ips_sort_order')=="asc"){echo 'selected';} ?>>Ascending</option>
		</select>
		
	</td>
</tr>
	<tr valign="top">
				<td scope="row" ><label for="xyz_ips_credit">Credit link to author</label>
				</td>
				<td><select name="xyz_ips_credit" id="xyz_ips_credit">
						<option value="ips"
						<?php selected(get_option('xyz_credit_link'),"ips"); ?>>Enable</option>
						<option value="0"
						<?php if(get_option('xyz_credit_link')!="ips"){echo 'selected';} ?>>Disable</option>

				</select>
				</td>
			</tr>
			
			<tr valign="top">
				<td scope="row" class=" settingInput" id=""><label for="xyz_ips_limit">Pagination limit</label></td>
				<td id=""><input  name="xyz_ips_limit" type="text"
					id="xyz_ips_limit" value="<?php if(isset($_POST['xyz_ips_limit']) ){echo abs(intval($_POST['xyz_ips_limit']));}else{print(get_option('xyz_ips_limit'));} ?>" />
				</td>
			</tr>
			
			<tr valign="top">
				<td scope="row" class=" settingInput" id="bottomBorderNone">
				</td>
				<td id="bottomBorderNone"><input style="margin:10px 0 20px 0;" id="submit" class="button-primary bottonWidth" type="submit" value=" Update Settings " />
				</td>
			</tr>
			
	</table>
	</fieldset>
	
	</div>

	</form>
</div>
