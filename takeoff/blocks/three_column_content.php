<?php
	$leftcolumn = get_sub_field('left_column');
	$middlecolumn = get_sub_field('middle_column');
	$rightcolumn = get_sub_field('right_column');
?>

<section class="content-block three_column_content container">

	<div class="row">

		<div class="left-column col-sm-4">
			<?php if ( $leftcolumn ): ?>
				<?php echo $leftcolumn; ?>
			<?php endif; ?>
		</div>

		<div class="middle-column col-sm-4">
			<?php if ( $leftcolumn ): ?>
				<?php echo $leftcolumn; ?>
			<?php endif; ?>
		</div>

		<div class="right-column col-sm-4">
			<?php if ( $rightcolumn ): ?>
				<?php echo $rightcolumn; ?>
			<?php endif; ?>
		</div>

	</div>

</section>
