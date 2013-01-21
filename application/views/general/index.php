
<div class="content">
	<p>
		Display my content passed from the controller
	</p>

	<? if ( isset($foo) ) : ?>
		<div class="data">Our data: <b>foo === <?= $foo; ?></b></div>
	<? endif; ?>

</div>