<?php
/**
 * @Author: Kounty
 */
$this->set('title', 'Create Company | kounty');
?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bar-chart font-green-sharp hide"></i>
					<span class="caption-subject font-green-sharp bold ">Create Company</span>
				</div>
			</div>
			<div class="portlet-body">
				<?= $this->Form->create($company) ?>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Company Name <span class="required">*</span></label>
							<?php echo $this->Form->control('name',['class'=>'form-control input-sm','placeholder'=>'Company Name','label'=>false]); ?>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Financial Year Begins From <span class="required">*</span></label>
									<?php echo $this->Form->control('financial_year_begins_from',['class'=>'form-control input-sm date-picker','placeholder'=>'dd-mm-yyyy', 'label'=>false, 'type'=>'text', 'data-date-format'=>'dd-mm-yyyy']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Books Beginning From <span class="required">*</span></label>
									<?php echo $this->Form->control('books_beginning_from',['class'=>'form-control input-sm date-picker','placeholder'=>'dd-mm-yyyy', 'label'=>false, 'type'=>'text', 'data-date-format'=>'dd-mm-yyyy']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>State <span class="required">*</span></label>
									<?php echo $this->Form->control('state_id',['class'=>'form-control input-sm select2me','label'=>false,'empty'=>'-select-', ['options' => $states]]); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Address</label>
									<?php echo $this->Form->control('address',['class'=>'form-control input-sm','placeholder'=>'Address','label'=>false]); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone No</label>
									<?php echo $this->Form->control('phone_no',['class'=>'form-control input-sm','label'=>false ,'placeholder'=>'Phone No']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mobile</label>
									<?php echo $this->Form->control('mobile',['class'=>'form-control input-sm','placeholder'=>'Address','label'=>false ,'placeholder'=>'Mobile']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<?php echo $this->Form->control('email',['class'=>'form-control input-sm','label'=>false ,'placeholder'=>'Email']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>GSTIN</label>
									<?php echo $this->Form->control('gstin',['class'=>'form-control input-sm','placeholder'=>'Address','label'=>false ,'placeholder'=>'GSTIN']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Website</label>
									<?php echo $this->Form->control('website',['class'=>'form-control input-sm','label'=>false, 'placeholder'=>'Website']); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Fax No</label>
									<?php echo $this->Form->control('fax_no',['class'=>'form-control input-sm','placeholder'=>'Address','label'=>false, 'placeholder'=>'Fax No']); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>PAN</label>
									<?php echo $this->Form->control('pan_no',['class'=>'form-control input-sm','label'=>false, 'placeholder'=>'PAN']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>
				
<!-- BEGIN PAGE LEVEL STYLES -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->css('/assets/global/plugins/clockface/css/clockface.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-select/bootstrap-select.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/select2/select2.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/jquery-multi-select/css/multi-select.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/clockface/js/clockface.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/moment.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS PICKERS -->
	
	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-select/bootstrap-select.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/select2/select2.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/scripts/metronic.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/quick-sidebar.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/demo.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-dropdowns.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL SCRIPTS -->

<?php
	$js="
	$(document).ready(function() {
		ComponentsPickers.init();
    });
	";

	echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom')); 
?>
