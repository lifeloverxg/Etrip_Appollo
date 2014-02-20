			<section class="section-route-list-large">
				<ul class="ul-route-list-large">
<?php foreach ($route_list_large as $route_list) { ?>
					<li>
						<header class="tag-tabs">
							<div class="route-list-title">
								<?php echo $route_list['title']; ?>
							</div>
							<div class="route-list-tabs">
								<ul class="ul-tag-list">
<?php foreach ($tag_list as $tag) { ?>
									<li <?php echo (stristr($tag_id, $tag['class']))?"class='current'":""; ?>>
										<a class="tag-tabs-list tag-tabs-list-<?php echo $tag['class']; ?>" href="javascript:" onclick="<?php echo $tag['action']; ?>"><?php echo $tag['title']; ?></a>
									</li>
<?php } ?>
								</ul>
							</div>
						</header>
						<article>
							<div class="route-list-image">
								<a href="javascript: ">
									<img src="<?php echo $home. $route_list['image']['image']; ?>" alt="<?php echo $route_list['image']['alt']; ?>" title="<?php echo $route_list['image']['title']; ?>">
								</a>
								<div class="image-title">
									<?php echo $route_list['image']['title']; ?>
								</div>
							</div>
							<div class="route-list-content">
								<ul class="ul-route-list-content">
<?php foreach ( $route_list['content'] as $label => $detail ) { ?>
									<li>
										<div class="route-list-content-label">
											<?php echo $label; ?>:
										</div>
										<div class="route-list-content-detail">
											<?php echo $detail; ?>
										</div>
									</li>
<?php } ?>
								</ul>
								<div class="view-detail">
									<a href="javascript: ">
										详情...
									</a>
								</div>
							</div>
						</article>
					</li>
<?php } ?>
				</ul>
			</section>
