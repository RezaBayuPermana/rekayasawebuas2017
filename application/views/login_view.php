<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url() ?>assets/images/logo-javawebmedia.png" rel="shortcut icon">
<title><?php echo $title ?></title>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body><center>
<section style="width:600px" class="login">
	<h1>Login Page</h1>
    
     <?php
	 // Cetak session
	if($this->session->flashdata('sukses')) {
		echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
	}
	// Cetak error
	echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
	?>
    
    <form action="<?php echo base_url('login') ?>" method="post">
	<div class="form-group">
      <p>
        <label style="margin-right: 420px; color: white; font-size: larger;" for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username">
        
      </p>
      <p>
        <label style="margin-right: 420px; color: white; font-size: larger;" for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Login" class="full">
      </p>
	  </div>
    </form>
    <footer style=" color: white; margin-center">Web design by <a href="http://rezapermana.hol.es" title="School of graphic &amp; web design" target="_blank">12141378</a></footer>
</section></center>
</body>
</html>
