<?php

    include('config.php');
    $id = $_GET['val'];

        echo '<form action="update_user.php?val=' . $id . '" method="post">
        Name: <input type="text" name="_n" />
        Username: <input type="text" name="_u" />
        Password: <input type="text" name="_p" />
        <input type="submit" value="Edit" />
        </form>';


    ?>
