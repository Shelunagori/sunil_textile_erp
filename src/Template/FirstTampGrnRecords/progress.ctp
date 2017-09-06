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
							<div class="progress-bar progress-bar-danger progress_bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="500" style="width: 0%">
								<span class="sr-only">
								80% Complete (danger) </span>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<div class="row">
				    <div class="col-md-3"></div>
				    <div class="col-md-6 show_link" style="display:none;">
					     <?php echo $this->Html->link(' Download CSV File', '/FirstTampGrnRecords/import',['escape' => false,'class'=>'']); ?>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$js="
	$(document).ready(function() {
		process_data();
		function process_data(){ //alert('function');
			var url='".$this->Url->build(['controller'=>'FirstTampGrnRecords','action'=>'ProcessData'])."'
			$.ajax({
				url: url,
				type: 'GET',
			}).done(function(response) { 
			    response = $.parseJSON(response);
			    //alert(response.percantage);
				$('.progress_bar').css('width',response.percantage+'%');
				if(response.status=='true')
				{
					process_data();
				}
				else
				{ alert(response.status);
					$('.show_link').show();
				}
				
			});
		}
    });
	";

echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom')); 
?>