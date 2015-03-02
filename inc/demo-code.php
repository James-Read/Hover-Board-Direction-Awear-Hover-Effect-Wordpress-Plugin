<?php

	$hover_board_parent_class = $options['hover_board_inner_class_name'];
	$hover_board_child_class = $options['hover_board_outer_class_name'];
	$type_of_container = ".";
	$hover_board_combined_containers = $type_of_container . $hover_board_container_one . " > " . $hover_board_container_two;
	// echo "this" . $hover_board_combined_containers;

$demo_code = '
<div class="da-thumbs">
	<ul class="'.$hover_board_parent_class.'">
		<li class="'.$hover_board_child_class.'">
			<a href="#">
				<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/1"/>
				<div><span>Hello??</span></div>
			</a>
		</li>
		<li class="'.$hover_board_child_class.'">
			<a href="#">
				<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/2"/>
				<div><span>HELLO!!</span></div>
			</a>
		</li>
		<li class="'.$hover_board_child_class.'">
				<a href="#">
					<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/3"/>
					<div><span>HEEELLOOOO</span></div>
				</a>
			</li>
		<li class="'.$hover_board_child_class.'">
				<a href="#">
					<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/4"/>
					<div><span>GOODBYEEE!!</span></div>
				</a>
			</li>
	</ul>
</div>' ;

$code_output = htmlspecialchars($demo_code);
?>


	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-12">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">

<?php

echo '<pre style="overflow: scroll;">' . $code_output . "</pre>";


?>

					</div>
				</div>
			</div>
		</div>
	</div>