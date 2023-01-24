<h1>
    User Update Form
</h1>

<form method="POST" action="">
    <label>First Name</label>
    <input name="fname" type="text" value="<?php echo $user['first_name']; ?>"> <br><br>
    <label>Last Name</label>
    <input name="lname" type="text" value="<?php echo $user['last_name']; ?>"><br><br>
    <label>Email</label>
    <input name="email" type="text" value="<?php echo $user['email']; ?>"><br><br>
    <label>Password</label>
    <input name="password" type="password" value="<?php echo $user['password']; ?>"><br><br>
    <label>Phone</label>
    <input name="phone" type="text" value="<?php echo $user['phone']; ?>"><br><br>
    <label>Gender</label><br>
    Male<input name="gender" type="radio" value="M" <?php if($user['gender'] == 'M') echo "checked";?> >
    Female<input name="gender" type="radio" value="F" <?php if($user['gender'] == 'F') echo "checked";?>>
    <br><br>
    <input type="submit" value="Update" name="Update">
</form>

