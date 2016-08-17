<!-- This file is used to markup the public-facing widget. -->

<div class="business-info">
<?php if (strlen(trim($monday_friday)) > 0 ) : ?>
			<p><strong>Monday-Friday:</strong> <?php echo $monday_friday; ?></p>
<?php endif; ?>
<?php if (strlen(trim($saturday)) > 0 ) : ?>
			<p><strong>Saturday:</strong> <?php echo $saturday; ?></p>
<?php endif; ?>
<?php if (strlen(trim($sunday)) > 0 ) : ?>
			<p><strong>Sunday:</strong> <?php echo $sunday; ?></p>
<?php endif; ?>
</div>