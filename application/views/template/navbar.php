
<?php
    $ci =&get_instance();
    $ci->load->model('messages_model');
    $messages = $ci->messages_model->getAllMessages()->result();
    $messageData = $ci->messages_model->getAllMessages()->row();

    $unreadMessages = $ci->messages_model->getUnreadMessageCount();
?>

<!-- Main Navbar -->
<div class="main-navbar sticky-top bg-white">
  <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">

      <div class="input-group input-group-seamless ml-3">
          <!--
          Top nav
          empty bar
          You can add something here..
         -->
      </div>

    <ul class="navbar-nav border-left flex-row ">
      <li class="nav-item border-right dropdown notifications">
        <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="nav-link-icon__wrapper">
            <i class="material-icons">&#xE7F4;</i>

            <?php if ($unreadMessages > 0 ): ?>
                <span class="badge badge-pill badge-danger"><?php echo $unreadMessages; ?></span>
            <?php endif; ?>

          </div>
        </a>

        <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">

        <?php foreach ($messages as $row): ?>

            <a class="dropdown-item" href="#">
              <div class="notification__content">
                <span class="notification__category"><?php echo $row->subject; ?></span>
                <p><strong><?php echo $row->name; ?></strong></p>
                <p><?php echo $row->content; ?></p>
              </div>
            </a>

        <?php endforeach; ?>

          <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url('asset/images/avatars/'). $messageData->userid .'.jpg'; ?>" alt="User Avatar">
          <span class="d-none d-md-inline-block"><?php echo $messageData->name; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-small">
          <a class="dropdown-item" href="user-profile-lite.html">
            <i class="material-icons">&#xE7FD;</i> Profile</a>
          <a class="dropdown-item" href="components-blog-posts.html">
            <i class="material-icons">vertical_split</i> Blog Posts</a>
          <a class="dropdown-item" href="add-new-post.html">
            <i class="material-icons">note_add</i> Add New Post</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" href="#">
            <i class="material-icons text-danger">&#xE879;</i> Logout </a>
        </div>
      </li>
    </ul>
    <nav class="nav">
      <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
        <i class="material-icons">&#xE5D2;</i>
      </a>
    </nav>
  </nav>
</div>
<!-- end main-navbar -->
