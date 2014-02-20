	<section class="section-trip-diary">
		<div class="info-title">
			<p>旅行游记</p>
		</div>
		<div class="trip-track">
			<div class="yellow-underline">
				<p>2013年11月古巴探索6日游</p>
				<div class="underline"></div>
			</div>
			<div class="description-content">
<?php if ( isset($trip_diary) && !empty($trip_diary) ) { ?>
				<ul class="ul-trip-diary">
<?php foreach ($trip_diary as $diary) { ?>
					<div class="diary-title">
						<p><?php echo $diary['title'];?></p>
					</div>
					<div class="diary-content">
						<p>线路安排:<?php echo $diary['content']; ?></p>
					</div>
					<div class="diary-more">
						<a href="<?php echo $diary['action']['route']; ?>">线路详情...</a>
					</div>
					<div class="diary-hotel">
						<p>入住酒店: <?php echo $diary['hotel']; ?></p>
					</div>
					<div class="diary-more">
						<a href="<?php echo $diary['action']['hotel']; ?>">酒店详情...</a>
					</div>
					<button class="header-button"><</button>
					<button class="header-button">></button>
<?php } ?>
				</ul>
<?php } ?>
			</div>
		</div>
	</section>