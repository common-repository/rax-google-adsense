<?php
/*
Plugin Name: RAX - Google Adsense
Plugin URI: http://www.programmingfacts.com/wordpress-rax-google-adsense/
Description: This will automatically add an ad of Google adsense whereever you want to add. You just need to put a short code or template code in order to display google adsense ad or any other ad network ads. This is very simple light weight plugin. Why should we go for heavy plugin which increase load on your wordpress blog ? This is a light plugin which can accomplish all your needs.
Version: 1.0
Author: Rakshit Patel
Author URI: http://www.programmingfacts.com
License: GPL2
*/

/*  Copyright 2010  Rakshit Patel  (email : raxit4u2@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	add_option("rax_google_adsense_1","");
	add_option("rax_show_above_post_1","");
	add_option("rax_show_middle_post_1","");
	add_option("rax_show_below_post_1","");

	add_option("rax_google_adsense_2","");
	add_option("rax_show_above_post_2","");
	add_option("rax_show_middle_post_2","");
	add_option("rax_show_below_post_2","");

	add_option("rax_google_adsense_3","");
	add_option("rax_show_above_post_3","");
	add_option("rax_show_middle_post_3","");
	add_option("rax_show_below_post_3","");

	add_option("rax_google_adsense_4","");
	add_option("rax_show_above_post_4","");
	add_option("rax_show_middle_post_4","");
	add_option("rax_show_below_post_4","");

	add_option("rax_google_adsense_5","");
	add_option("rax_show_above_post_5","");
	add_option("rax_show_middle_post_5","");
	add_option("rax_show_below_post_5","");

	add_option("rax_google_adsense_6","");
	add_option("rax_show_above_post_6","");
	add_option("rax_show_middle_post_6","");
	add_option("rax_show_below_post_6","");


	add_action('admin_menu', 'rax_google_adsense_menu_options');
	
	add_action("the_content",'rax_google_adsense_show_option');
	
	function rax_google_adsense_menu_options() {
	
	  add_options_page('RAX - Google Adsense', ' RAX - Google Adsense', 'manage_options', 'rax-google-adsense-options', 'rax_google_adsense_options');
	
	}
	
	function rax_google_adsense_options() {
	
	  if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	  }
?>	
	  <div style="width:95%; font-size:11px; padding:3px 3px 3px 15px;">
	  <p style="font-size:20px; background-color:#4086C7; color:#FFF; width:94%; padding:2px;">Set Options for RAX - Google Adsense</p>
	  <p>
			<form method="post" action="options.php">
				<?php wp_nonce_field('update-options');?>
				<table width="100%" border="0" cellspacing="8" cellpadding="0">
                  <tr>
                    <td align="left" valign="top" colspan="2"><input type="submit" value="<?php _e('Update Options')?>" /></td>
                  </tr>
                  <tr>
                  	<td width="50%" align="left" valign="top">
                        <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense 1</strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-1] Or <br />
                        comment code: &lt;!--rax-google-adsense-1--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(1)?&gt;<br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_1" id="rax_show_above_post_1" value="1" <?php if(get_option('rax_show_above_post_1') == '1') echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_1" id="rax_show_middle_post_1" value="1" <?php if(get_option('rax_show_middle_post_1') == '1') echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_1" id="rax_show_below_post_1" value="1" <?php if(get_option('rax_show_below_post_1') == '1') echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                    <br />
                    <textarea name="rax_google_adsense_1" id="rax_google_adsense_1" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_1');?></textarea></td>
                  	<td width="50%" align="left" valign="top">
	                    <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense 2</strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-2] Or <br />
                        comment code: &lt;!--rax-google-adsense-2--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(2)?&gt; <br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_2" id="rax_show_above_post_2" value="1" <?php if(get_option('rax_show_above_post_2') == '1') echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_2" id="rax_show_middle_post_2" value="1" <?php if(get_option('rax_show_middle_post_2') == '1') echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_2" id="rax_show_below_post_2" value="1" <?php if(get_option('rax_show_below_post_2') == '1') echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                        <br />
                        <textarea name="rax_google_adsense_2" id="rax_google_adsense_2" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_2');?></textarea></td>
                  	
                  </tr>
                  
                  <tr>
                  	<td width="50%" align="left" valign="top">
                        <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense 3</strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-3] Or <br />
                        comment code: &lt;!--rax-google-adsense-3--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(3)?&gt;<br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_3" id="rax_show_above_post_3" value="1" <?php if(get_option('rax_show_above_post_3') == '1') echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_3" id="rax_show_middle_post_3" value="1" <?php if(get_option('rax_show_middle_post_3') == '1') echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_3" id="rax_show_below_post_3" value="1" <?php if(get_option('rax_show_below_post_3') == '1') echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                        <br />
                    	<textarea name="rax_google_adsense_3" id="rax_google_adsense_3" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_3');?></textarea></td>
                  	<td width="50%" align="left" valign="top">
	                    <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense 4</strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-4] Or <br />
                        comment code: &lt;!--rax-google-adsense-4--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(4)?&gt; <br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_4" id="rax_show_above_post_4" value="1" <?php if(get_option('rax_show_above_post_4') == '1') echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_4" id="rax_show_middle_post_4" value="1" <?php if(get_option('rax_show_middle_post_4') == '1') echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_4" id="rax_show_below_post_4" value="1" <?php if(get_option('rax_show_below_post_4') == '1') echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                        <br />
                        <textarea name="rax_google_adsense_4" id="rax_google_adsense_4" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_4');?></textarea></td>
                  	
                  </tr>
                  
                  <tr>
                  	<td width="50%" align="left" valign="top">
                        <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense 5</strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-5] Or <br />
                        comment code: &lt;!--rax-google-adsense-5--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(5)?&gt;<br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_5" id="rax_show_above_post_5" value="1" <?php if(get_option('rax_show_above_post_5') == '1') echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_5" id="rax_show_middle_post_5" value="1" <?php if(get_option('rax_show_middle_post_5') == '1') echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_5" id="rax_show_below_post_5" value="1" <?php if(get_option('rax_show_below_post_5') == '1') echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                        <br />
                   		<textarea name="rax_google_adsense_5" id="rax_google_adsense_5" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_5');?></textarea></td>
                  	<td width="50%" align="left" valign="top">
	                    <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense 6</strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-6] Or <br />
                        comment code: &lt;!--rax-google-adsense-6--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(6)?&gt; <br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_6" id="rax_show_above_post_6" value="1" <?php if(get_option('rax_show_above_post_6') == '1') echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_6" id="rax_show_middle_post_6" value="1" <?php if(get_option('rax_show_middle_post_6') == '1') echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_6" id="rax_show_below_post_6" value="1" <?php if(get_option('rax_show_below_post_6') == '1') echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                        <br />
                        <textarea name="rax_google_adsense_6" id="rax_google_adsense_6" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_6');?></textarea></td>
                  	
                  </tr>
                  
				  <tr>
                    <td align="left" valign="top" colspan="2"><input type="submit" value="<?php _e('Update Options')?>" /></td>
                  </tr>
				</table>
				
				
				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="rax_google_adsense_1,rax_show_above_post_1,rax_show_middle_post_1,rax_show_below_post_1,rax_google_adsense_2,rax_show_above_post_2,rax_show_middle_post_2,rax_show_below_post_2,rax_google_adsense_3,rax_show_above_post_3,rax_show_middle_post_3,rax_show_below_post_3,rax_google_adsense_4,rax_show_above_post_4,rax_show_middle_post_4,rax_show_below_post_4,rax_google_adsense_5,rax_show_above_post_5,rax_show_middle_post_5,rax_show_below_post_5,rax_google_adsense_6,rax_show_above_post_6,rax_show_middle_post_6,rax_show_below_post_6" />
			</form>
	  </p>
	  </div>
<?php				
	}
	
	function rax_google_adsense_show($rax)
	{
	
		$option_rax_google_adsense = get_option("rax_google_adsense_".$rax);
		echo $option_rax_google_adsense;
		
	}
	
	function rax_google_adsense_show_option($post_content)
	{
		
		for($rax=1;$rax<=6;$rax++) {
			$option_rax_google_adsense = get_option("rax_google_adsense_".$rax);
			$post_content = str_replace('[rax-google-adsense-'.$rax.']',$option_rax_google_adsense,$post_content);
			$post_content = str_replace('<!--rax-google-adsense-'.$rax.'-->',$option_rax_google_adsense,$post_content);
		}	
		
		if( is_single() && !is_page())
		{
			for($rax=1;$rax<=6;$rax++) {
				$option_rax_google_adsense = get_option("rax_google_adsense_".$rax);

				$option_rax_show_above = get_option("rax_show_above_post_".$rax);
				$option_rax_show_middle = get_option("rax_show_middle_post_".$rax);
				$option_rax_show_below = get_option("rax_show_below_post_".$rax);
				
				if($option_rax_show_above) {
					$post_content = $option_rax_google_adsense.$post_content;
				}

				if($option_rax_show_middle) {
					$half_desc_length = round(strlen(strip_tags($post_content))/2);
					$post_content1 = html_substr($post_content, 0, $half_desc_length );
					$secondstart = strlen($post_content1)-1;
					$post_content2 = substr($post_content, $secondstart);
					$post_content = $post_content1.$option_rax_google_adsense.$post_content2;
				}

				if($option_rax_show_below) {
					$post_content .= $option_rax_google_adsense;
				}

			}
			
		}
		
		return $post_content;

	}
	
	function html_substr( $s, $srt, $len = NULL, $strict=false, $suffix = NULL )
	{
		if ( is_null($len) ){ $len = strlen( $s ); }
		//if ( $strlen >= ' . $len . ' ) { return "><"; } 
		$f = 'static $strlen=0; 
				
				$html_str = html_entity_decode( $a[1] );
				$subsrt   = max(0, ('.$srt.'-$strlen));
				$sublen = ' . ( empty($strict)? '(' . $len . '-$strlen)' : 'max(@strpos( $html_str, "' . ($strict===2?'.':' ') . '", (' . $len . ' - $strlen + $subsrt - 1 )), ' . $len . ' - $strlen)' ) . ';
				$new_str = substr( $html_str, $subsrt,$sublen); 
				$strlen += $new_str_len = strlen( $new_str );
				$suffix = ' . (!empty( $suffix ) ? '($new_str_len===$sublen?"'.$suffix.'":"")' : '""' ) . ';
				return ">" . htmlentities($new_str, ENT_QUOTES, "UTF-8") . "$suffix<";';
		
		return preg_replace( array( "#<[^/][^>]+>(?R)*</[^>]+>#", "#(<(b|h)r\s?/?>){2,}$#is"), "", trim( rtrim( ltrim( preg_replace_callback( "#>([^<]+)<#", create_function(
				'$a',
			  $f
			), ">$s<"  ), ">"), "<" ) ) );
	}

?>