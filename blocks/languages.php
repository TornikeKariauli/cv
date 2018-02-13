<section class="full-height" id="languages">
	<div class="container">
		<h2 class="text-center text-uppercase text-secondary mb-0">Computer Languages</h2>
		<hr class="code-dark mb-5">
		<div class="row mb-5">
<?php
	$languages = $user->getLanguages();

	foreach ($languages as $language) {
		echo "
			<div class='bar'>
				<div class='bar-fill-bold'>" . $language->name . "</div>
				<div class='bar-fill p" . $language->knowledge . "'>
					<div class='animate'></div>
				</div>
				<span>" . $language->knowledge . "%</span>
			</div>
		";
	}
?>
		</div>
		<h2 class="text-center text-uppercase text-secondary mb-0">Databases</h2>
		<hr class="code-dark mb-5">
		<div class="row">
			<div class="bar">
				<div class="bar-fill-bold">Microsoft SQL</div>
				<div class="bar-fill p90">
					<div class="animate"></div>
				</div>
				<span>90%</span>
			</div>
			<div class="bar">
				<div class="bar-fill-bold">MongoDB</div>
				<div class="bar-fill p60">
					<div class="animate"></div>
				</div>
				<span>60%</span>
			</div>
		</div>
	</div>
</section>