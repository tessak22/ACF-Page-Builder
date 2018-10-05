<?php
	$leftcolumn = get_sub_field('left_column');
	$rightcolumn = get_sub_field('right_column');
?>

<section class="content-block two_column_content container">

	<div class="row">

		<div class="left-column col-sm-6">
			<?php if ( $leftcolumn ): ?>
				<?php echo $leftcolumn; ?>
			<?php endif; ?>
		</div>

		<div class="right-column col-sm-6">
			<?php if ( $rightcolumn ): ?>
				<?php echo $rightcolumn; ?>
			<?php endif; ?>
		</div>

	</div>

</section>
