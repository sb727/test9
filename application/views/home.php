<!DOCTYPE html>
<html>
    <head>
        <title>Travelo</title>
    </head>
    <body>
        <h1>Welcome <?= $this->session->userdata('username') ?></h1>
        <a href="<?= site_url('home/logout') ?>">Logout</a>
        <?php

		// All interaction goes through the index and is forwarded
		// directly to the controller
			include_once("application/controllers/Controller.php");
			$controller = new Controller();
			$controller->invoke();
		?>
    </body>
</html>