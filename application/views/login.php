<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>
 
    <form action="<?= site_url('login') ?>" method="post">
        <label for="username">UserName:</label>
        <input type="text" name="username" placeholder="username"/>
        <br /><br />
        <label for="password">Password:</label>        
        <input type="text" name="password" placeholder="***"/>
        <br/><br />
        <button type="submit">Login</button>
    </form>
</body>
</html>