			<section class="section-route-list-large">
                <header class="tag-tabs">
                    <div class="route-list-title">
                        <?php echo $route_detail_list['title']; ?>
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
                    <ul>
<?php foreach ($route_detail_list['detail'] as $route_list) { ?>
                        <li>
                            <div class="route-list-wrap">
                                <div class="route-list-image">
                                    <a href="javascript: ">
                                        <img src="<?php echo $home. $route_list['image']; ?>" alt="<?php echo $route_list['image']['alt']; ?>" title="<?php echo $route_list['image']['title']; ?>">
                                    </a>
                                </div>
                                <div class="route-list-content">
                                    <p><?php echo $route_list['content']; ?></p>
                                </div>
                            </div>
                        </li>
<?php } ?>
                    </ul>
                </article>
			</section>
