<!-- Start Header -->
	<header type="button" class="btn btn-default navbar-btn">Hai </header>
    <!-- Start Nav -->
    <nav>
    	<ul>
		<a href="<?php echo base_url('profil') ?>" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?>
    </a> | <a href="<?php echo base_url('login/logout') ?>" title="Logout">Logout</a>
        	<a href="<?php echo base_url('dasbor') ?>">Home</a>
            <a href="<?php echo base_url() ?>assets/post.html">Post</a>
            <a href="<?php echo base_url('index.php/user_controller/user') ?>">Update User</a>
            <a href="<?php echo base_url() ?>assets/templates.html">Profile</a>
        </ul>
    </nav>
    <!-- Start Article -->
    <article>
      <h1><?php echo 'Admin Control Panel' ?></h1>