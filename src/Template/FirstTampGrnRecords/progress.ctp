<?php /**
 * @Author: PHP Poets IT Solutions Pvt. Ltd.
 */
$this->set('title', 'Progress Csv');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Progress CSV Data</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($FirstTampGrnRecords,['enctype'=>'multipart/form-data']) ?>
				<div class="row">
				    <div class="col-md-3"></div>
				    <div class="col-md-6">
					    <div class="progress progress-striped active">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
								<span class="sr-only">
								80% Complete (danger) </span>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				
			</div>
		</div>
	</div>
</div>