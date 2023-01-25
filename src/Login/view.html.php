<?php echo $msg ?? ''; ?>

<form method="POST" action="" class="loginForm">
    <div>
    <label>username</label>
    <input name="username" type="text">
    </div>

    <div>
    <label>password</label>
    <input name="password" type="password">
    </div>
    <input type="submit" value="Login" name="Login">

    <a href = "<?php echo 'index.php?module=Register' ?>"> Register </a>
    <a href="javascript:void(0)" id="get-user"> Get User </a>
<div id="user"></div>
</form>
