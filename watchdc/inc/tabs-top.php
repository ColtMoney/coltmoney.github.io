<?php if ( $tabs ) : ?>
    <ul class="tabs">
		<?php foreach ( $tabs as $key => $value ): ?>
            <li class="tab-link <?php if ( $key == 0 ) {
				echo 'current';
			} ?>" data-tab="tab-<?php echo $key; ?>"><?php echo $value; ?></li>
		<?php endforeach; ?>
    </ul>
<?php endif; ?>