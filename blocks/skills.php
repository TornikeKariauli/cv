<section class="bg-primary text-white mb-0 full-height" id="skills">
	<div class="container centered">
		<h2 class="text-center text-uppercase text-secondary mb-0">TECHNICAL SKILLS</h2>
		<hr class="code-dark mb-5">
		<div class="row mb-5">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<img src="assets/img/skills/Word.png">
					<div class="item-footer">MS Word
						<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="item">
					<img src="assets/img/skills/Excel.png">
					<div class="item-footer">MS Excel
					<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="item">
					<img src="assets/img/skills/PowerPoint.png">
					<div class="item-footer">MS PowerPoint
					<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="item">
					<img src="assets/img/skills/Access.png">
					<div class="item-footer">MS Access
					<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="item">
					<img src="assets/img/skills/Ps.png">
					<div class="item-footer">PhotoShop
					<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="item">
					<img src="assets/img/skills/Ai.png">
					<div class="item-footer">Illustrator
					<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="item">
					<img src="assets/img/skills/Pr.png">
					<div class="item-footer">Premiere Pro
					<span class="item-star">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script type="text/javascript">
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		loop:true,
		autoplay:true,
		margin:10,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-chevron-left'>", "<i class='fa fa-chevron-right'>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:2,
			},
			992:{
				items:3,
			},
			1300:{
				items:4,
			}
		}
	});

	$('.item').hover(function(){
		$(this).addClass('animated headShake');
	});
	$('.item').mouseleave(function(){
		$(this).removeClass('animated headShake');
	});

</script>