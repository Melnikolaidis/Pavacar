<div class="col-md-3 sidebar">
	<div class="categories">
		<h3 class="text-xs-center m-b-3">Κατηγορίες</h3>
			<div id="accordion" role="tablist" aria-multiselectable="true">
						
				<?php foreach(get_categories_h() as $category) : ?>
					<div class="card">
						<div class="card-header" role="tab" id="heading<?php echo $category->id; ?>">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $category->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $category->id; ?>">
									<?php echo $category->name; ?>
								</a>
							</h5>
						</div>
						<div id="collapse<?php echo $category->id; ?>" class="collapse" role="tabpane<?php echo $category->id; ?>" aria-labelledby="heading<?php echo $category->id; ?>">
							<div class="card-block">
								<?php if(get_subcategories_h($category->id)) : ?>
									<?php foreach(get_subcategories_h($category->id) as $subcategory) : ?>
										<ul>
											<li><a href="<?php echo base_url(); ?>products/category/<?php echo $subcategory->id; ?>"><?php echo $subcategory->name; ?></a></li>
										</ul>
									<?php endforeach; ?>
								<?php else : ?>
									<p class="text-center text-muted">Δεν υπάρχει κάποια καταχώρηση</p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
							
			</div>
	</div>
</div>