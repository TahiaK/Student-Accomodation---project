<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <section class="dashboard">
        <h2 class="bar">Admin Dashboard</h2>
        <div class= "add"><p><a href='logout.php'>LOGOUT</a></p></div>
        <div class="add"><a href="search_form.html">Search User</a></div>
        <div class="add"><a href="add_user.html">Add User</a></div>
        
        <h3 class="user-h">User</h3>

        

        <div class="user-board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Level</td>
                        <td>Role</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php                   
                        $query = "SELECT name, role, level FROM user";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td class="user">
                            <h5 class="user-n"><?php echo $row['name']; ?></h5>
                        </td>

                        <td class="user-id">
                            <h5><?php echo $row['level']; ?></h5>
                        </td>

                        <td class="user-role">
                            <p><?php echo $row['role']; ?></p>
                        </td>

                        <td class="v-e">
                            <?php
                                if($row['role']=="manager") {
                            ?>
                            <a href="Manager.php">View</a></td>
                            <?php
                                }
                            ?>

                            <?php
                                if($row['role']=="student") {
                            ?>
                            <a href="student.php">View</a></td>
                            <?php
                                }
                            ?>

                            <?php
                                if($row['role']=="admin") {
                            ?>
                            <a href="admin.php">View</a></td>
                            <?php
                                }
                                $id =  $row['name'];
                            ?>
                        <td class="v-e"><?php echo '<a href="edit_user.php?val=' . $id . '">Edit</a>'; ?></td>
                    </tr>

                    <?php
                        }}
                        mysqli_close($con);
                    ?>

                </tbody>
            </table>
        </div>

    </section>
</body>
</html>