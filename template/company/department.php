<section class="section-company-department">
    <div class="info-title">公司部门</div>
    <div class="info-detail">
        <ul>
<?php foreach ($department_list as $department) { ?>
            <li><button class="travel-button"><?php echo $department; ?></li>
<?php } ?>
        </ul>
</section>