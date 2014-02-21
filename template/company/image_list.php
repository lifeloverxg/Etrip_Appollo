			<section class="section-image-list">
				<div class="info-title">
				    公司图片
				</div>
				<div class="image-content">
<?php if ( isset($image_list) && !empty($image_list) ) { ?>
					<div class="image-list-left-button" onclick="javascript: ">
						<span><</span>
					</div>
                    <div class="image-middle">
                        <ul class="ul-image-list">
    <?php foreach ($image_list as $image) { ?>
                            <li>
                                <div class="image-album-cover" onclick="javascript: ">
                                    <img class="image-medium" src="<?php echo $home.$image['image']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                </div>
                            </li>
    <?php } ?>
                        </ul>
                    </div>
					<div class="image-list-right-button" onclick="javascript: ">
						<span>></span>
					</div>
<?php } ?>
				</div>
			</section>
