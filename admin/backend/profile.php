<?php
include "../backend/includes_backend/header.php";
include "../backend/includes_backend/navigation.php";

if (isset($_POST['update_profile'], $_SESSION['username'])) {
    $the_user_name = $_SESSION['username'];

    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_username = $_POST['username'];
    $user_password = $_POST['password'];
    $user_email = $_POST['email'];

    // $post_image = $_FILES['post_image']['name'];
    // $post_image_temp = $_FILES['post_image']['tmp_name'];
    // move_uploaded_file($post_image_temp, "../images/$post_image");

       
        $password = md5($user_password); 
    
    
    // Update a User.
    $query = "UPDATE tbl_users SET ";
    $query .= "user_firstname='$user_firstname', ";
    $query .= "user_lastname='$user_lastname', ";
    $query .= "user_name='$user_username', ";
    $query .= "user_password='$password', ";
    $query .= "user_email='$user_email' ";
    $query .= "WHERE user_name='$the_user_name'";

    $update_user_query = mysqli_query($connection, $query);
    if (!$update_user_query) {
        die("Query Failed: " . mysqli_error($connection));
    }
    header("Location: ../backend/users.php");
}

?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin
                    <small><?php echo $_SESSION['username'] ?></small>
                </h1>
            </div>
            <div class="col-xs-12">
                <?php
                if (isset($_SESSION['username'])) {

                    $the_user_name = $_SESSION['username'];
                    $query = "SELECT * FROM tbl_users WHERE user_name='$the_user_name'";
                    $fetch_data = mysqli_query($connection, $query);
                    while ($Row = mysqli_fetch_assoc($fetch_data)) {
                        $user_id = $Row['user_id'];
                        $firstname = $Row['user_firstname'];
                        $lastname = $Row['user_lastname'];
                        $username = $Row['user_name'];
                        $password = $Row['user_password'];
                        $email = $Row['user_email'];
                        ?>

                        <form action="" method="post">

                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" name="firstname" value='<?php echo $firstname; ?>'>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" name="lastname" value='<?php echo $lastname; ?>'>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" value='<?php echo $username; ?>' >
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" value='<?php echo $password; ?>'>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value='<?php echo $email; ?>'>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">
                            </div>
                        </form>
                <?php }
                }

                ?>
            </div>
        </div>
    </div>
</div>

<?php include "../backend/includes_backend/footer.php"; ?>