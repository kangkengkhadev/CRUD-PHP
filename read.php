<table>
    <tbody>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>name</th>
            <th>lastname</th>
        </tr>
        <?php
        $link = mysqli_connect("localhost", "root", "");
        $sql = "use crud";
        $result = mysqli_query($link, $sql);
        $sql = "select * from member ;";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr>
                        <td><?php echo   $row['id']; ?></td>
                        <td><?php echo   $row['email']; ?></td>
                        <td><?php echo   $row['name']; ?></td>
                        <td><?php echo   $row['lastname']; ?></td>
                        <td>
                            <?php

                            echo "<a  href='update.php?id=" . $row['id'] . "' > update </a>";
                            echo "<a   href='delete.php?id=" . $row['id'] . "' >delete</a>"; ?>
                        </td>
                        </td>
                    </tr>
        <?php }
            }
        }
        ?>
    </tbody>
   
</table>
<a href="create.php">create member</a>