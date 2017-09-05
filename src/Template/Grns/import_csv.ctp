<?php
/**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Import CSV');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Choose Steps</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($import_csv) ?>
				<div class="row">
				
					<div class="col-md-6" align="center">
					    <a href="#" class="icon-btn">
						<i class=""></i>
						<div>
							 <b>Step First</b>
						</div>
						</a>
						
					</div>
					<div class="col-md-6" align="center">
						<a href="#" class="icon-btn">
						<i class=""></i>
						<div>
							 <b>Step Second</b>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
