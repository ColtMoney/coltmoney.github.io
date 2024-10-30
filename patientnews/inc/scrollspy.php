<?php if ( isset( $id_1 ) ) { ?>
    <nav id="navbar" class="navbar">
        <div class="box_text">
            <span></span>
        </div>
        <ul class="nav-menu">
			<?php if ( isset( $id_1 ) ) { ?>
                <li>
                    <a data-scroll="<?php echo $id_1; ?>" href="<?php echo '#' . $id_1; ?>" class="dot active">
                    </a>
                </li>
			<?php } ?>
			<?php if ( isset( $id_2 ) ) { ?>
                <li>
                    <a data-scroll="<?php echo $id_2; ?>" href="<?php echo '#' .$id_2; ?>" class="dot">
                    </a>
                </li>
			<?php } ?>
			<?php if ( isset( $id_3 ) ) { ?>
                <li>
                    <a data-scroll="<?php echo $id_3; ?>" href="<?php echo '#' .$id_3; ?>" class="dot">
                    </a>
                </li>
			<?php } ?>
			<?php if ( isset( $id_4 ) ) { ?>
                <li>
                    <a data-scroll="<?php echo $id_4; ?>" href="<?php echo '#' .$id_4; ?>" class="dot">
                    </a>
                </li>
			<?php } ?>
			<?php if ( isset( $id_5 ) ) { ?>
                <li>
                    <a data-scroll="<?php echo $id_5; ?>" href="<?php echo '#' .$id_5; ?>" class="dot">
                    </a>
                </li>
			<?php } ?>
			<?php if ( isset( $id_6 ) ) { ?>
                <li>
                    <a data-scroll="<?php echo $id_6; ?>" href="<?php echo '#' .$id_6; ?>" class="dot">
                    </a>
                </li>
			<?php } ?>
        </ul>
    </nav>
<?php } ?>
