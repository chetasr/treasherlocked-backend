					<li<?php echo IsActive( $page, HOME );			?>><a data-scroll href="<?php echo SITE_URL; ?>">Home</a></li>
					<li<?php echo IsActive( $page, ABOUT ); 		?>><a data-scroll href="<?php echo SITE_URL; ?>about.php">About</a></li>
					<li<?php echo IsActive( $page, HOW_TO_PLAY ); 	?>><a data-scroll href="<?php echo SITE_URL; ?>how-to-play.php">How to Play</a></li>
					<li<?php echo IsActive( $page, RULES ); 		?>><a data-scroll href="<?php echo SITE_URL; ?>rules.php">Rules</a></li>

					<?php if ( isset( $_SESSION['logged_in'] )){ ?>
					<!--li<?php echo IsActive( $page, LEADERBOARD ); 	?>><a data-scroll href="<?php echo SITE_URL; ?>leaderboard/">Leaderboard</a></li-->
					<?php } ?>

				<?php if ( !isset( $_SESSION['logged_in'] ) || !$_SESSION['logged_in'] ): ?>
					<li><a class="btn-effect btn" data-scroll href="<?php echo SITE_URL; ?>login.php">Login</a></li>
					<li><a class="btn-effect btn" data-scroll href="<?php echo SITE_URL; ?>signup.php">Sign Up</a></li>
					<?php endif; ?>

<?php
function IsActive( $page, $pageID ) {
	if ($page == $pageID)
		return ' class="active"';
	return '';
}
?>
