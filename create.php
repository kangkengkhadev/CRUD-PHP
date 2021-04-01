<?php
if (!isset($_POST['send'])) {
?>

    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
        <div class="input-group">
            <label for="id"> id </label>
            <input type="text" placeholder="id" name="id"><br>
        </div>
        <div class="input-group">
            <label for="email"> email </label>
            <input type="text" placeholder="email" name="email"><br>
        </div>
        <div class="input-group">
            <label for="name"> name </label>
            <input type="text" placeholder="name" name="name"><br>
        </div>
        <div class="input-group">
            <label for="lastname"> lastname </label>
            <input type="text" placeholder="lastname" name="lastname"><br>
        </div>
        <div class="input-group">
            <input type="submit" value="send" name="send"><br>


        </div>
    </form>

<?php
} else {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $link = mysqli_connect("localhost", "root", "", "crud");


    mysqli_query($link, "INSERT INTO member ( id, email, name, lastname)
    VALUES ( '$id', '$email', '$name', '$lastname')");
    header('location: read.php');

}
