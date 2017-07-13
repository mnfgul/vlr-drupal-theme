<?php
	//Get first level
	$tree = taxonomy_get_tree(2, 0, -1, 1);
	foreach( $tree as $object)
	{
		echo '<p>'.$object->name.'</p>'; 
	}
	//var_dump($tree);
	
?>
<table class="views-table brands">
	<thead>
    	<tr class="">
              <th class="views-field views-field-name-1">
              	<a href="#" title="" class="active">Manufacturer Name</a>        
              </th>
           	<th class="views-field views-field-name active">
              	<a href="#" title="sort by Brand Name" class="active">Brand Name</a>
           	</th>
		</tr>
  </thead>
  <tbody>
  	<?php foreach($tree as $object){?>
  	<tr>
  		<td></td>
  		<td>
  			<?php echo $object->name;?>
  		</td>
  	</tr>
  	<?php }?>
  </tbody>
</table>