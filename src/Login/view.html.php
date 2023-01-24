<?php echo $msg ?? ''; ?>

<form method="POST" action="">

    <label>username</label>
    <input name="username" type="text">
    <label>password</label>
    <input name="password" type="password">
    <input type="submit" value="Login" name="Login">

    <a href = "<?php echo 'index.php?module=Register' ?>"> Register </a>
    <a href="javascript:void(0)" id="get-user"> Get User </a>
<div id="user"></div>
</form>
