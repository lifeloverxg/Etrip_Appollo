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
                            <div class="route-list-wrap">
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
                                    <div class="route-line-wrap">
                                        <div class="route-point" style="background: yellow;">
                                            <p><?php echo $route_list['location'][0]; ?></p>
                                        </div>
    <?php for ($i=1; $i<count($route_list['location'])-1 && $i<5; $i++) { ?>
                                        <div class="route-line"></div>
                                        <div class="route-point"><p><?php echo $route_list['location'][$i]; ?></p></div>
    <?php } ?>
                                        <div class="route-line"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="route-list-wrap">
                                <div class="route-list-content">
                                    <div class="route-list-content-label">
                                        具体行程:
                                    </div>
                                    <div class="route-list-content-detail" style="height: 100px; word-wrap: break-word; word-break: normal; white-space: normal;">
                                        <?php echo $route_list['details']; ?>
                                    </div>
                                    <div class="route-line-wrap">
    <?php for ($i=5; $i<count($route_list['location'])-1; $i++) { ?>
                                        <div class="route-line"></div>
                                        <div class="route-point"><p><?php echo $route_list['location'][$i]; ?></p></div>
    <?php } ?>
                                        <div class="route-line"></div>
                                        <div class="route-point" style="background: yellow;">
                                            <p><?php echo $route_list['location'][count($route_list['location'])-1]; ?></p>
                                        </div>
                                    </div>
                                    <div class="view-detail">
                                        <a href="route_detail.php?rid=1">
                                            详情...
                                        </a>
                                    </div>
                                </div>
                                <div class="route-list-image">
                                    <a href="javascript: ">
                                        <img src="<?php echo $home. $route_list['image']['image']; ?>" alt="<?php echo $route_list['image']['alt']; ?>" title="<?php echo $route_list['image']['title']; ?>">
                                    </a>
                                    <div class="image-title">
                                        <?php echo $route_list['image']['title']; ?>
                                    </div>
                                </div>
                            </div>
						</article>
					</li>
<?php } ?>
				</ul>
			</section>
