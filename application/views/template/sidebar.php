
<?php
    $userId = $this->config->item('userid');
    $ci =& get_instance();
    $ci->load->model('messages_model');
    $messageData    = $ci->messages_model->getAllMessages($userId)->row();
    $unreadMessages = $ci->messages_model->getUnreadMessageCount($userId);
?>

<!-- Main Sidebar -->
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
          <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?php echo base_url('asset/images/shards-dashboards-logo.svg'); ?>" alt="Shards Dashboard">
          <span class="d-none d-md-inline ml-1"><?php echo $this->config->item('brand'); ?></span>
        </div>
      </a>
      <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
      </a>
    </nav>
  </div>
  <!--
  <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
    <div class="input-group input-group-seamless ml-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-search"></i>
        </div>
      </div>
      <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
  </form>-->
  <div class="nav-wrapper">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?php echo ($active=='dashboard' ? 'active' : ''); ?>" href="<?php echo base_url('dashboard'); ?>">
          <i class="material-icons">dashboard</i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($active=='inbox' ? 'active' : ''); ?>" href="<?php echo base_url('inbox'); ?>">
          <i class="material-icons">drafts</i>
          <span>Inbox</span>
          <?php if ($unreadMessages > 0 ): ?>
              <span class="badge badge-pill badge-danger"><?php echo $unreadMessages; ?></span>
          <?php endif; ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($active=='sent' ? 'active' : ''); ?>" href="<?php echo base_url('sent'); ?>">
          <i class="material-icons">send</i>
          <span>Sent</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($active=='drafts' ? 'active' : ''); ?>" href="<?php echo base_url('drafts'); ?>">
          <i class="material-icons">insert_drive_file</i>
          <span>Drafts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($active=='trash' ? 'active' : ''); ?>" href="<?php echo base_url('trash'); ?>">
          <i class="material-icons">delete</i>
          <span>Trash</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($active=='contacts' ? 'active' : ''); ?>" href="<?php echo base_url('contacts'); ?>">
          <i class="material-icons">contacts</i>
          <span>Contacts</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
<!-- End Main Sidebar -->
