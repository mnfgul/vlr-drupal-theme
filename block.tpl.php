<div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
	<?php if(!empty($block->subject)){?><h2 class="blockTitle"><?php print $block->subject; ?></h2><?php }?>
	<div class="content"><?php print $block->content; ?></div>
</div>