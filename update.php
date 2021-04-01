<?php


if (!isset($_POST['send'])) {
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "");
    $sql = "use crud";
    $result = mysqli_query($link, $sql);
    $sql = "SELECT * FROM member WHERE id = '$id'  ";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);
    echo "where id: " . $id;
?>
    <form action="<?php echo $_SERVER['PHP_SELF']."?id=". $id ?>" method="post">

        <div class="input-group">
            <label for="email"> email </label>
            <input type="text" placeholder="email" name="email" value=<?php echo $data['email'] ?>><br>
        </div>
        <div class="input-group">
            <label for="name"> name </label>
            <input type="text" placeholder="name" name="name" value=<?php echo $data['name'] ?>><br>
        </div>
        <div class="input-group">
            <label for="lastname"> lastname </label>
            <input type="text" placeholder="lastname" name="lastname" value=<?php echo $data['lastname'] ?>><br>
        </div>
        <div class="input-group">
            <input type="submit" value="send" name="send"><br>


        </div>
    </form>
<?php } else {
    $id = $_GET['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $link = mysqli_connect("localhost", "root", "", "crud");
    $sql = "UPDATE member SET email='$email', name='$name', lastname='$lastname' WHERE id= '$id' ";
    $result = mysqli_query($link, $sql);
    header('location: read.php');
}
