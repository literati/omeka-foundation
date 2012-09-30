<?php head(); ?>

<div class="container">
<div id="primary" class="content">

	<div class="row">
		<div class="twelve columns">
		
		<div id="showholder">
					<div id="featuredimgs"> 
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
	<?php $item = random_featured_item(true); set_current_item($item); echo item_fullsize($props = imgslide ,$index = 0, $item = null ); ?>	
				
					</div>
				
				</div>
		</div>
	</div>

	
	
	<div class="row">
		<div class="twelve columns">
			<div class="panel">	
				<h2>About the Project</h2>
				<?php if ($homepageDescription = settings('description')): ?>
				<p><?php echo $homepageDescription; ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="twelve columns">
			<div class="panel">	
				<div id="recent-collections">
					<h2>Recent Collections</h2>
			 
					<?php if (has_collections()): ?>
					<?php set_collections_for_loop(recent_collections(7)); ?>
			 
					<ul class="collections-list">
						<?php while (loop_collections()): ?>
			 
							<li class="collection">
								<h4><?php echo link_to_collection(); ?></h4>
								<p class="collection-description"><?php echo collection('Description', array('snippet'=>150)); ?></p>
							</li>
			 
						<?php endwhile; ?>
					</ul>
			 
					<?php else: ?>
			 
					<p>No recent collections available.</p>	
			 
					<?php endif; ?>
				</div><!-- end recent-collections -->

			</div>
		</div>
	</div>	

</div>
</div>

<footer>
<?php foot(); ?></footer>