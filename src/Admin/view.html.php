<h1>Admin View</h1>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>

    <?php foreach ($users as $user) { ?>
        <tr>
            <td>
                <?php echo $user['first_name'] ?>
            </td>
            <td>
                <?php echo $user['last_name'] ?>
            </td>
            <td>
                <?php echo $user['email'] ?>
            </td>
            <td>
                <?php echo $user['gender'] ?>
            </td>
            <td><a href="index.php?module=Admin&action=deleteUser&id=<?php echo $user['id']; ?>">DELETE</a> | <a href="index.php?module=Admin&action=updateUser&id=<?php echo $user['id']; ?>"> UPDATE</a></td>
        </tr>
    <?php } ?>

</table>
