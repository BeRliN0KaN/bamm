<?php
include "includes_backend/header.php";
include "includes_backend/navigation.php";

// Add new Category.
$error_message = "";
if (isset($_POST["submit"])) {
    $title_name = $_POST['title_name'];
    $title_name_th = $_POST['title_name_th'];
    $title_name_cn = $_POST['title_name_cn'];
    $filter_name = $_POST['filter_name'];
    $title_name_sec = $_POST['title_name_sec'];
    $title_name_sec_th = $_POST['title_name_sec_th'];
    $title_name_sec_cn = $_POST['title_name_sec_cn'];
    $filter_name_sec = $_POST['filter_name_sec'];
    if (!empty($title_name) || $title_name != "") {
        $query = "INSERT INTO tbl_project_cat (title_name,title_name_th,title_name_cn,filter_name,title_name_sec,title_name_sec_th,title_name_sec_cn,filter_name_sec) ";
        $query .= "VALUES('$title_name','$title_name_th','$title_name_cn','$filter_name ','$title_name_sec','$title_name_sec_th','$title_name_sec_cn','$filter_name_sec'); ";
        $create_query = mysqli_query($connection, $query);
        if (!$create_query) {
            die("Query Failed: " . mysqli_error($connection));
        }
    } else {
        $error_message = "Category field is required.";
    }
}

// Delete Category.
if (isset($_GET["delete"])) {
    $id_project = $_GET['delete'];
    // Check exist user.
    $exist = -1;
    $queryExist = "SELECT EXISTS(SELECT * FROM tbl_projects WHERE project_category_id = $id_project) as exist";
    $fetch_data = mysqli_query($connection, $queryExist);
    while ($Row = mysqli_fetch_assoc($fetch_data)) {
        $exist = $Row['exist'];
    }

    if ($exist == 0) {
        $query = "DELETE FROM tbl_project_cat WHERE id_project=$id_project";
        $delete_query = mysqli_query($connection, $query);
        header("Location: categories_project.php");
        if (!$delete_query) {
            die("Query Failed: " . mysqli_error($connection));
        }
    } else if ($exist == 1) {
        echo "<script>alert('Found data in the system!Can not delete');</script>";
    }
}

// Update Category.
if (isset($_GET["edit"], $_POST["update_category"])) {
    $id_project = $_GET['edit'];
    $title_name = $_POST['title_name'];
    $title_name_th = $_POST['title_name_th'];
    $title_name_cn = $_POST['title_name_cn'];
    $filter_name = $_POST['filter_name'];
    $title_name_sec = $_POST['title_name_sec'];
    $title_name_sec_th = $_POST['title_name_sec_th'];
    $title_name_sec_cn = $_POST['title_name_sec_cn'];
    $filter_name_sec = $_POST['filter_name_sec'];
    $query = "UPDATE tbl_project_cat SET title_name='$title_name', ";
    $query .= "title_name_th='$title_name_th',";
    $query .= "title_name_cn='$title_name_cn',";
    $query .= "filter_name='$filter_name',";
    $query .= "title_name_sec='$title_name_sec',";
    $query .= "title_name_sec_th='$title_name_sec_th',";
    $query .= "title_name_sec_cn='$title_name_sec_cn',";
    $query .= "filter_name_sec='$filter_name_sec' ";
    $query .= "WHERE id_project=$id_project";
    $update_query = mysqli_query($connection, $query);
    header("Location: categories_project.php");
    if (!$update_query) {
        die("Query Failed: " . mysqli_error($connection));
    }
}

?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to <small><?php echo $_SESSION['username'] ?></small>
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- จัดการ Add Category และ Edit Category -->
            <div class="col-xs-12">
                <form action="" method="POST">
                    <div style="border: 2px solid gray; padding:10px;">
                        <h3>&nbsp;Add Category Project</h3>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="title_name">&nbsp;&nbsp;Category <sup style="color:red; font-size:1.5rem;">*</sup></label>
                                <input type="text" class="form-control" name="title_name" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title_name">&nbsp;&nbsp;[ภาษาไทย] Category <sup style="color:red; font-size:1.5rem;">*</sup></label>
                                <input type="text" class="form-control" name="title_name_th" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title_name">&nbsp;&nbsp;[ภาษาจีน] Category <sup style="color:red; font-size:1.5rem;">*</sup></label>
                                <input type="text" class="form-control" name="title_name_cn" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="filter_name">&nbsp;&nbsp;Category filter <sup style="color:red; font-size:1.5rem;">*</sup></label>
                                <input type="text" class="form-control" name="filter_name" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title_name">&nbsp;&nbsp;Category2</label>
                                <input type="text" class="form-control" name="title_name_sec" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title_name">&nbsp;&nbsp;[ภาษาไทย] Category2</label>
                                <input type="text" class="form-control" name="title_name_sec_th" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title_name">&nbsp;&nbsp;[ภาษาจีน] Category2</label>
                                <input type="text" class="form-control" name="title_name_sec_cn" id="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="filter_name">&nbsp;&nbsp;Category filter2</label>
                                <input type="text" class="form-control" name="filter_name_sec" id="">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="btn btn-primary" type="submit" name="submit" value="  Add Category">
                            </div>
                        </div>
                    </div>
                </form>

                <div style="height:10px"></div>
                <form action="" method="POST">
                    <?php
                    if (isset($_GET['edit'])) {
                        $id_project = $_GET['edit'];
                        $query = "SELECT * FROM tbl_project_cat WHERE id_project = $id_project";
                        $fetch_data = mysqli_query($connection, $query);
                        while ($Row = mysqli_fetch_assoc($fetch_data)) {
                            $project_title = $Row["title_name"];
                            $project_title_th = $Row["title_name_th"];
                            $project_title_cn = $Row["title_name_cn"];
                            $project_filter = $Row["filter_name"];
                            $project_title_sec = $Row["title_name_sec"];
                            $project_title_sec_th = $Row["title_name_sec_th"];
                            $project_title_sec_cn = $Row["title_name_sec_cn"];
                            $project_filter_sec = $Row["filter_name_sec"];
                            if (isset($project_title)) {
                                ?>
                                 <div style="border: 2px solid gray; padding: 10px;margin-bottom:10px;">
                                    <h3>&nbsp;Edit Category</h3>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="title_name">&nbsp;&nbsp;Category </label>
                                            <input type="text" value="<?php echo $project_title; ?>" class="form-control" name="title_name" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="title_name">&nbsp;&nbsp;[ภาษาไทย] Category</label>
                                            <input type="text" value="<?php echo $project_title_th; ?>" class="form-control" name="title_name_th" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="title_name">&nbsp;&nbsp;[ภาษาจีน] Category</label>
                                            <input type="text" value="<?php echo $project_title_cn; ?>" class="form-control" name="title_name_cn" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="filter_name">&nbsp;&nbsp;Category filter</label>
                                            <input type="text" value="<?php echo $project_filter; ?>" class="form-control" name="filter_name" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="title_name">&nbsp;&nbsp;Category2</label>
                                            <input type="text" value="<?php echo $project_title_sec; ?>" class="form-control" name="title_name_sec" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="title_name">&nbsp;&nbsp;[ภาษาไทย] Category2</label>
                                            <input type="text" value="<?php echo $project_title_sec_th; ?>" class="form-control" name="title_name_sec_th" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="title_name">&nbsp;&nbsp;[ภาษาจีน] Category2</label>
                                            <input type="text" value="<?php echo $project_title_sec_cn; ?>" class="form-control" name="title_name_sec_cn" id="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="filter_name">&nbsp;&nbsp;Category filter2</label>
                                            <input type="text" value="<?php echo $project_filter_sec; ?>" class="form-control" name="filter_name_sec" id="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="btn btn-primary" type="submit" name="update_category" value="  Edit Category">
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }
                    }
                    ?>
                </form>

                <span><?php echo $error_message; ?></span>
            </div>

        <!-- จัดตาราง ID ทางขวา -->
        <div class="col-xs-12" style="display: flex; justify-content: flex-end;">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>[ภาษาไทย] Category</th>
                        <th>[ภาษาจีน] Category</th>
                        <th>Fiter Name</th>
                        <th>Category2</th>
                        <th>[ภาษาไทย] Category2</th>
                        <th>[ภาษาจีน] Category2</th>
                        <th>Fiter Name2</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_project_cat";
                    $fetch_data = mysqli_query($connection, $query);
                    while ($Row = mysqli_fetch_assoc($fetch_data)) {
                        echo "<tr>
                                    <td>{$Row['id_project']}</td>
                                    <td>{$Row['title_name']}</td>
                                    <td>{$Row['title_name_th']}</td>
                                    <td>{$Row['title_name_cn']}</td>
                                    <td>{$Row['filter_name']}</td>
                                    <td>{$Row['title_name_sec']}</td>
                                    <td>{$Row['title_name_sec_th']}</td>
                                    <td>{$Row['title_name_sec_cn']}</td>
                                    <td>{$Row['filter_name_sec']}</td>
                                    <td>
                                        <a href='categories_project.php?edit={$Row['id_project']}'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a> |
                                        <a onClick=\"javascript: return confirm('Please confirm deletion');\"href='categories_project.php?delete={$Row['id_project']}'><i class='fa fa-trash-o fa-lg' aria-hidden='true'></i></a>
                                    </td>
                                </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php include "includes_backend/footer.php" ?>