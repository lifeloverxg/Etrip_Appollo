<section class="section-contact-team">
    <div class="info-title">我们的团队</div>
    <div class="team-wrap">
        <div class="team-leader">
            <img src="<?php echo $home . $team['leader']['image']; ?>"><br>
            <label><?php echo $team['leader']['name'] ?></label><br>
            <label><?php echo $team['leader']['title'] ?></label>
        </div>
        <div class="team-others">
            <ul>
    <?php foreach ($team['others'] as $staff) { ?>
                <li>
                    <img src="<?php echo $home . $staff['image'] ?>"><br>
                    <label><?php echo $staff['name'] ?></label><br>
                    <label><?php echo $staff['title'] ?></label>
                </li>
    <?php } ?>
            </ul>
        </div>
    </div>
</section>