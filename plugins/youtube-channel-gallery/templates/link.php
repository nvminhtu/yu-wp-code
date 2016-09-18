<?php  if ($ytchag_promotion || $ytchag_link): ?>

<div class="ytc-pslb ytc-links container-fluid">
	<div class="ytc-row row">
		<?php  if ($ytchag_link): ?>
			<div class="ytc-youtubelink col-xs-12">
				<a href="https://www.youtube.com/playlist?list=<?php echo $ytchag_playlist?>" class="ytcmore" <?php echo ($ytchag_link_window ? 'target="_blank"' : '')?>>
					<?php echo ($ytchag_link_tx ? $ytchag_link_tx : _e('Show more videos', 'youtube-channel-gallery'))?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php endif; ?>
