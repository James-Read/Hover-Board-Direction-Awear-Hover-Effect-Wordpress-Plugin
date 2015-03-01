<?php

$demo_code = '
<ul class="da-thumbs">
	<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://fmsftw.com/wp-content/uploads/2015/02/commercial_free_image_1.jpg" />
			<div><span>Hello??</span></div>
		</a>
	</li>
	<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://fmsftw.com/wp-content/uploads/2015/02/commercial_free_image_2.jpg" />
			<div><span>HELLO!!</span></div>
		</a>
	</li>
<!-- <div style="clear:both"></div> -->

<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://fmsftw.com/wp-content/uploads/2015/02/commercial_free_image_3.jpg" />
			<div><span>HEEELLOOOO</span></div>
		</a>
	</li>
<li class="grid">
		<a href="#">
			<img class="demo-image-size" src="http://fmsftw.com/wp-content/uploads/2015/02/commercial_free_image_4.jpg" />
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