<h1>
User Register Form
</h1>

<form method="POST" action="" enctype="multipart/form-data">

    <label>First Name</label>
    <input name="fname" type="text"> <br><br>
    <label>Last Name</label>
    <input name="lname" type="text"><br><br>
    <label>Email</label>
    <input name="email" type="text"><br><br>
    <label>Password</label>
    <input name="password" type="password"><br><br>
    <label>Phone</label>
    <input name="phone" type="text"><br><br>
    <label>Gender</label><br>
    Male<input name="gender" type="radio" value="M">
    Female<input name="gender" type="radio" value="F"><br><br>
    Profile Image <input type="file" value="Upload Profile" name="Upload" id="upload-file"> <br><br>
    <input type="submit" value="Register" name="Register">

    <a href = "<?php echo 'index.php?module=Login' ?>"> Go to Home page </a>

</form>

