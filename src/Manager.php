<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <section class="dashboard">
        <h2 class="bar">Manager dashboard</h2>
        <div class= "add"><p><a href='logout.php'>LOGOUT</a></p></div>
        <h3 class="user-h">Application List</h3>

        <div class="user-board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>ID</td>
                        <td>Application form</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php                   
                        $query = "SELECT name, ID FROM application";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td class="user">
                            <h5 class="user-n"><?php echo $row['name']; ?></h5>
                        </td>

                        <td class="user-id">
                            <h5><?php echo $row['ID']; ?></h5>
                        </td>
                        <?php $id =  $row['name']; ?>
                        <td class="v-e"><?php echo '<a href="manager_view.php?val=' . $id . '">View</a>'; ?></td>
                        <td class="v-e"><a href="validate.php">Approve</a></td>
                        <td class="v-e"><a href="validate.php">Reject</a></td>
                        <td class="v-e"><?php echo '<a href="delete_app.php?val=' . $id . '">Delete</a>'; ?></td>
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