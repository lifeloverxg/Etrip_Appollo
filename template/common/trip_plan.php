	<section class="section-trip-plan">
		<div class="info-title">
			<p>旅行规划</p>
		</div>
		<div class="order-track">
			<div class="yellow-underline">
				<p>2014年最想实现的旅行愿望</p>
				<div class="underline"></div>
			</div>
			<div class="description-content">
				<ol class="ul-travel-plan">
<?php if ( isset($travel_plan) && !empty($travel_plan) ) { ?>
<?php foreach ($travel_plan as $plans) { ?>
					<li>
<?php echo $plans; ?>
					</li>
<?php } ?>
<?php } ?>

				</ol>
			</div>
		</div>
	</section>