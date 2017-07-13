<div id="<?php echo 'node-'.$nid;?>" class="node adkits-node rounded<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">

<form id="uc-product-add-to-cart-form-2" method="post" accept-charset="UTF-8" action="<?php echo $node_url;?>">
<div class="adKitsItems">
	<table style="margin-bottom: 0px;">
		<tr>
			<td width="200">
				<h3 class="adkitsTitle"><?php echo $title;?></h3>				
				<?php echo $field_product_frontimg_rendered;?>
				<br/>
				<?php if(!empty($field_product_f_gif[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-1-1" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-1-1" name="attributes[1][1]"> GIF</label>	
					<a href="<?php echo $field_product_f_gif[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_f_jpg[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-1-2" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-1-2" name="attributes[1][2]"> JPG</label>
					<a href="<?php echo $field_product_f_jpg[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_f_epsmac[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-1-3" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-1-3" name="attributes[1][3]"> EPS MAC</label>
					<a href="<?php echo $field_product_f_epsmac[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_f_epspc[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-1-4" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-1-4" name="attributes[1][4]"> EPS PC</label>
					<a href="<?php echo $field_product_f_epspc[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_f_rgbtga[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-1-5" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-1-5" name="attributes[1][5]"> RGB TGA</label>
					<a href="<?php echo $field_product_f_rgbtga[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
			</td>
		</tr>
	</table>
</div>
	<div id="addCartBtn">
		<?php print $node->content['add_to_cart']["#value"]; ?>
	</div>
</form>
</div>