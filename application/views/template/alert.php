<!-- /////////////
Alerts
///////////////-->

<!-- Success -->
<?php if ($this->session->flashdata('success') != null): ?>

    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="fa fa-check mx-2"></i>
      <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
    </div>

<?php endif; ?>

<!-- Information -->
<?php if ($this->session->flashdata('info') != null): ?>

    <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="fa fa-info mx-2"></i>
      <strong>Information!</strong> <?php echo $this->session->flashdata('info'); ?>
    </div>

<?php endif; ?>

<!-- Warning -->
<?php if ($this->session->flashdata('warning') != null): ?>

    <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="fa fa-exclamation mx-2"></i>
      <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
    </div>

<?php endif; ?>

<!-- Error -->
<?php if ($this->session->flashdata('error') != null): ?>

    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="fa fa-times mx-2"></i>
      <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
    </div>

<?php endif; ?>
