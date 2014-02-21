<?php
// HTML header
include $home . "template/common/header.php";
?>
<section class="section-middle">
    <section class="section-contact-left">
<?php
// HTML left panel
include $home . "template/contact/left_top.php";
include $home . "template/contact/join_us.php";
?>
        <section class="section-contact-map" style="background: url('../images/contact_map.jpg'); background-size: 100%;">
<!--
<?php
include $home . "template/common/map.php";
?>
-->
        </section>
    </section>
    <section class="section-contact-right">    
<?php
// HTML left panel
include $home . "template/contact/team.php";
include $home . "template/contact/contact_panel.php";
?>
    </section>
</section>
<?php
// HTML footer
include $home . "template/common/footer.php";
?>