	<section class="section-feed">
			<div class="info-title">
				<p>客服反馈</p>
			</div>
			<div class="feed-list-content">
				<article>
					<div id="ul-feed-list-large-newfeed">
						<div class="feed-left-area">
							<a href="<?php echo $home.$auth['url']; ?>">
								<img class="logo-medium" src="<?php echo $home.$auth['image_large']; ?>" alt="<?php echo $auth['alt']; ?>" title="<?php echo $auth['title']; ?>">
							</a>
						</div>
						<!-- right area-->
						<div class="feed-right-area">
							<!-- board area -->
							<div class="div-feed-list-feed">
								<a href="<?php echo $home.$auth['url']; ?>">
									<span class="list-title-member"><?php echo $auth['title']?></span>
								</a>
								<div>
									<textarea class="comment-textarea" id="newfeed-textarea-id" placeholder="发表新鲜事" title="发表新鲜事" value="发表新鲜事"></textarea>
									<button class="button-reply" onclick="<?php echo $feed_list['add_feed']['action']; ?>"><?php echo $feed_list['add_feed']['title']; ?></button>
								</div>
							</div>
						</div>
					</div>
						<!-- 底下是feedlist,上面是发表新鲜事 -->
					<ul class="ul-feed-list-large">
	<?php foreach ($feed_list_large as $feed) { ?>
						<li class="li-feed-list-large">
							<!-- left area: poster -->
							<div class="feed-left-area">
								<a href="<?php echo $home.$feed['owner']['url']; ?>">
									<img class="logo-medium" src="<?php echo $home.$feed['owner']['image_large']; ?>" alt="<?php echo $feed['owner']['alt']; ?>" title="<?php echo $feed['owner']['title']; ?>">
								</a>
							</div>
							<!-- right area-->
							<div class="feed-right-area">
								<!-- board area -->
								<div class="div-feed-list-feed">
									<!-- board content -->
									<a href="<?php echo $home.$feed['owner']['url']; ?>">
										<span class="list-title-member"><?php echo $feed['owner']['title']?></span>
									</a>
									<p><?php echo $feed['content']; ?></p>
									<!-- board timestamp -->
									<span class="time-feed"><?php echo $feed['timestamp']; ?></span>
								</div>
								<!-- comments area -->
	<?php 		if($auth['uid'] > 0) { ?>
									<!-- reply area -->
									<!--如果是游客则不显示回复窗口-->
									<div class="ul-feed-list-reply">
										<a href="<?php echo $home.$auth['url']; ?>">
											<img class="self-logo-small" src="<?php echo $home.$auth['image']; ?>" alt="<?php echo $auth['alt']; ?>" title="<?php echo $auth['title']; ?>">
										</a>
										<div>
											<textarea class="comment-textarea-comment" id="comment-textarea-<?php echo $feed['id']; ?>" placeholder="回复" title="回复" value="回复"></textarea>
											<button class="button-reply-comment" onclick="<?php echo $feed['func']['reply']; ?>">回复</button>
										</div>
									</div>
									<!-- 结束回复板块 -->
	<?php 		} ?>
								</div>
							</li>
	<?php } ?>
						</ul>
					</article>
					<footer class="more-list-large">
	<?php if (isset($next) && $next != "") { ?>
					<a href="javascript:" onclick="showMoreFeed(<?php echo $tag_id; ?>, <?php echo $page_id; ?>, '<?php echo $page_type; ?>', 20, <?php echo $next; ?>);">可以查看更多哦</a>
	<?php } ?>
					</footer>
				</div>
	</section>