<?php 
//list taxonomy terms (Brand name)
$terms = array();
$vocab = array();
foreach ($node->taxonomy as $term) 
{
	$terms[] = $term->name;
	$vocabs = taxonomy_get_parents($term->tid);
	foreach($vocabs as $v)
	{
		if(!in_array($v->name,$vocab))
		{
			$vocab[] = $v->name;
		}
	}
}
?>
<div id="<?php echo 'node-'.$nid;?>" class="node product-node <?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
<div class="itemBox">
	<table style="margin-bottom: 0px;">
		<tr>
			<td width="400">
				<p><b>Manufacturer Name:</b> <?php echo implode(',',$vocab);?></p>
				<p><b>Brand Name:</b> <?php echo implode(',',$terms);?></p>  
				<p><b>Product Name:</b> <?php echo $title?></p>
				<p><b>Description:</b> <?php echo $node->content['body']['#value'];?></p>
			</td>
			<td width="150">
				<p><b>Size:</b> <?php echo $node->field_product_size[0]['view'];?></p>
				<p><b>UPC:</b> <?php echo $node->field_product_upc[0]['view'];?></p>
				<p><b>P/Q:</b> <?php echo $node->field_product_pq[0]['view'];?></p>
				<p><b>LYR:</b> <?php echo $node->field_product_lyr[0]['view'];?></p>
			</td>
			<td width="170">
				<p><b>Case Weight:</b> <?php echo $node->field_product_casew[0]['view'];?></p>
				<p><b>Case Cu/ft:</b> <?php echo $node->field_product_casecu[0]['view'];?></p>
				<p><b>Length:</b> <?php echo $node->field_product_length[0]['view'];?></p>
				<p><b>Width:</b> <?php echo $node->field_product_width[0]['view'];?></p>
				<p><b>Height</b> <?php echo $node->field_product_height[0]['view'];?></p>
				<?php if(!empty($field_product_sizeimg[0]['filepath'])){?>
				<p>
					<a href="<?php echo $field_product_sizeimg[0]['filepath'];?>" class="img-dimensions">
					View Dimensions
					</a>					
				</p>
				<?php }?>
			</td>
		</tr>
	</table>
</div>
<form id="uc-product-add-to-cart-form-2" method="post" accept-charset="UTF-8" action="<?php echo $node_url;?>">
<div class="itemFiles">
	<table>
		<tr>
			<td width="200">
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
			<td width="200">
				<?php echo $field_product_b_img_rendered;?>
				<br/>
				<?php if(!empty($field_product_b_gif[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-2-6" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-2-6" name="attributes[2][6]"> GIF</label>
					<a href="<?php echo $field_product_b_gif[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_b_jpg[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-2-7" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-2-7" name="attributes[2][7]"> JPG</label>
					<a href="<?php echo $field_product_b_jpg[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_b_epsmac[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-2-8" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-2-8" name="attributes[2][8]"> EPS MAC</label>
					<a href="<?php echo $field_product_b_epsmac[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_b_epspc[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-2-9" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-2-9" name="attributes[2][9]"> EPS PC</label>
					<a href="<?php echo $field_product_b_epspc[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_product_b_rgbtga[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-2-10" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-2-10" name="attributes[2][10]"> RGB TGA</label>
					<a href="<?php echo $field_product_b_rgbtga[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
			</td>
			<td width="200">
				<?php if(!empty($field_data_pdf[0]['filepath'])){?>
				<div>
					<a href="<?php echo $field_data_pdf[0]['filepath'];?>" class="productDataPdf" title="View PDF file of Product Data" target="_blank">View Product Data Information</a>
				</div>
				<br/>
				<?php }?>
				<?php if(!empty($field_data_txt[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-3-11" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-3-11" name="attributes[3][11]"> TXT</label>
					<a href="<?php echo $field_data_txt[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
				</p>
				<?php }?>
				<?php if(!empty($field_data_doc[0]['filepath'])){?>
				<p>
					<label for="edit-attributes-3-12" class="option"><input type="checkbox" class="form-checkbox" value="1" id="edit-attributes-3-12" name="attributes[3][12]"> DOC</label>
					<a href="<?php echo $field_data_doc[0]['filepath'];?>" title="Download Now" target="_blank">(Download Now)</a>
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
