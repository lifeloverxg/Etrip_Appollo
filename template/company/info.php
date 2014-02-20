<section class="section-company-info">
    <div class="info-title">公司概览</div>
    <div class="info-detail">
        <ul>
<?php foreach ($company_info as $info) { ?>
        <li><?php echo $info['title']; ?>：<?php echo $info['info']; ?></li>
<?php } ?>
        </ul>
    </div>
</section>