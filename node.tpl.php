  <div id="<?php echo 'node-'.$nid;?>" class="node <?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <h2 class="pageTitle nodeTitle">
    	<a href="<?php print $node_url?>"><?php print $title?></a>
    </h2>

    <div class="content">
    	<?php print $content?>
    </div>
  </div>

