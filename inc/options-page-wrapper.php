<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>Hover Board, direction awear hover plugin</h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<!-- /.main content -->
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<?php //if( !isset( $hover_board_inner_class_name ) || $hover_board_inner_class_name == '' ) {?>
					<div class="postbox">
						<h3><span>Please enter your container classes</span></h3>
						<div class="inside">
							<form name="hover_board_class_form" method="post" action="">
							<input type="hidden" name="hover_board_form_submitted" value="Y">
							<table class="form-table">
								<tr>
									<td>
										<label for="hover_board_inner_class_name">Parent container class name</label>
									</td>
									<td>
										<input name="hover_board_inner_class_name" id="hover_board_inner_class_name" type="text" value="<?php echo $hover_board_inner_class_name; ?>" class="regular-text" />
									</td>
								</tr>
								<tr>
									<td>
										<label for="hover_board_outer_class_name">Child container class name</label>
									</td>
									<td>
										<input name="hover_board_outer_class_name" id="hover_board_outer_class_name" type="text" value="<?php echo $hover_board_outer_class_name; ?>" class="regular-text" />
									</td>
								</tr>
							</table>
							<p>
								<input class="button-primary" type="submit" name="hover_board_class_name_submit" value="Save" />
							</p>
							</form>
						</div> <!-- /.inside  test-->
					</div> <!-- /.postbox -->

					<p>Your selected parent and child class namesn are:</p>

<?php //}
	$hover_board_container_one = $options['hover_board_inner_class_name'];
	$hover_board_container_two = $options['hover_board_outer_class_name'];
	$type_of_container = ".";
	$hover_board_combined_containers = $type_of_container . $hover_board_container_one . " > ." . $hover_board_container_two;
	echo $hover_board_combined_containers;
?>


<p>At present, a containing element with the classname ".da-thumbs" must be used.</p>
<p>Copy and past the following code example to a file, post or page:</p>




