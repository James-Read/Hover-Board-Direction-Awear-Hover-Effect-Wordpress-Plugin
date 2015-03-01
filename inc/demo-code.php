<?php

$demo_code = '
<ul class="da-thumbs">
	<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/1" />
			<div><span>Hello??</span></div>
		</a>
	</li>
	<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/2" />
			<div><span>HELLO!!</span></div>
		</a>
	</li>
<!-- <div style="clear:both"></div> -->

<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/3" />
			<div><span>HEEELLOOOO</span></div>
		</a>
	</li>
<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://lorempixel.com/400/200/sports/4" />
			<div><span>GOODBYEEE!!</span></div>
		</a>
	</li>
	
</ul>' ;

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