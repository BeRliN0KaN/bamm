<?php
// Delete Post.
if (isset($_GET["deleteProject"])) {
    echo 'aaaaa';
    exit;
    $project_id = $_GET['deleteProject'];
    $project_image = $_GET['image'];
    $query = "DELETE FROM tbl_projects WHERE project_id=$project_id";
    $delete_query = mysqli_query($connection, $query);
    header("Location: projects.php");
    if (!$delete_query) {
        die("Query Failed: " . mysqli_error($connection));
    }
}

if (isset($_POST["apply"])) {
    if (isset($_POST["checkBoxArray"])) {
        foreach ($_POST["checkBoxArray"] as $checkBoxValue) {
            $bulk_option = $_POST['bulk_option'];
            switch ($bulk_option) {
                case 'Published':
                    $query = "UPDATE tbl_projects SET project_status = '$bulk_option' WHERE project_id=$checkBoxValue";
                    $update_project = mysqli_query($connection, $query);
                    echo "<p class='alert alert-success'>Project published successfully.</p>";
                    if (!$update_project) {
                        die("Query Failed: " . mysqli_error($connection));
                    }
                    break;
                case 'Draft':
                    $query = "UPDATE tbl_projects SET project_status = '$bulk_option' WHERE project_id=$checkBoxValue";
                    $update_project = mysqli_query($connection, $query);
                    echo "<p class='alert alert-success'>Project draftted successfully.</p>";
                    if (!$update_project) {
                        die("Query Failed: " . mysqli_error($connection));
                    }
                    break;
                case 'Important':
                    $query = "UPDATE tbl_projects SET project_pin = '1' WHERE project_id=$checkBoxValue";
                    $update_project = mysqli_query($connection, $query);
                    echo "<p class='alert alert-success'>Project important successfully.</p>";
                    if (!$update_project) {
                        die("Query Failed: " . mysqli_error($connection));
                    }
                    break;
                case 'Unimportant':
                    $query = "UPDATE tbl_projects SET project_pin = '0' WHERE project_id=$checkBoxValue";
                    $update_project = mysqli_query($connection, $query);
                    echo "<p class='alert alert-success'>Project unimportant successfully.</p>";
                    if (!$update_project) {
                        die("Query Failed: " . mysqli_error($connection));
                    }
                    break;
                case 'Delete':
                    $query = "DELETE FROM tbl_projects WHERE project_id = $checkBoxValue";
                    $update_project = mysqli_query($connection, $query);
                    echo "<p class='alert alert-success'>Project deleted successfully.</p>";
                    if (!$update_project) {
                        die("Query Failed: " . mysqli_error($connection));
                    }
                    break;
                default:
                    echo "<p class='alert alert-danger'>Please an option.</p>";
                    break;
            }
        }
    } else {
        echo "<p class='alert alert-danger'>Please select project.</p>";
    }
}
?>

<form action="" method="POST">
    <table class="table table-bordered table-hover" id="viewposts">
        <div class="row">
            <div class="col-sm-4">
                <select class="form-control" name="bulk_option">
                    <option value="">Select Options</option>
                    <option value="Published">Publish</option>
                    <option value="Draft">Draft</option>
                    <option value="Important">Important</option>
                    <option value="Unimportant">Unimportant</option>
                    <option value="Delete">Delete</option>
                </select>
            </div>
            <div class="form-group col-xs-4">
                <input type="submit" class="btn btn-success" name="apply" value="Apply">
                <a class="btn btn-primary" href="projects.php?source=add_project">Add New</a>
            </div>
        </div>
        <thead>
            <tr>
                <th colspan="8">
                    <div style="display: flex; align-items: center; ">
                        <label for="filter" style="margin-right: 10px;">Show:</label>
                        <form action="" method="post" style="display: inline-block; margin-left: 10px;">
                            <select class="form-control text-center" style="height:30px; width:7%; padding:4px 4px;" name="page_rows" onchange="this.form.submit()">
                                <option value="10" <?php echo (isset($_POST['page_rows']) && $_POST['page_rows'] == '10') ? 'selected' : ''; ?>>10</option>
                                <option value="20" <?php echo (isset($_POST['page_rows']) && $_POST['page_rows'] == '20') ? 'selected' : ''; ?>>20</option>
                                <option value="30" <?php echo (isset($_POST['page_rows']) && $_POST['page_rows'] == '30') ? 'selected' : ''; ?>>30</option>
                                <option value="40" <?php echo (isset($_POST['page_rows']) && $_POST['page_rows'] == '40') ? 'selected' : ''; ?>>40</option>
                                <option value="50" <?php echo (isset($_POST['page_rows']) && $_POST['page_rows'] == '50') ? 'selected' : ''; ?>>50</option>
                            </select>
                        </form>
                    </div>
                </th>
            </tr>
            <tr>
                <th><input type='checkbox' id='selectAllBoxes' onclick="selectAll(this)"></th>
                <th style="width:40px;padding-right:0;">ID </th>
                <th style="width: 300px;">Title[EN] / Title[TH]</th>
                <!-- <th style="width: 150px;">[ภาษาไทย] Title</th> -->
                <th style="width: 300px;">Category[EN] / Category[TH]</th>
                <!-- <th style="width: 150px;">[ภาษาไทย] Category</th> -->
                <th>Status </th>
                <!-- <th style="width:48px ;padding-right:0;">Pin </th> -->
                <th style="width:100px">Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query_page = "SELECT COUNT('project_id') FROM tbl_projects";
            $result_page = mysqli_query($connection, $query_page);
            $row = mysqli_fetch_row($result_page);
            $rows = $row[0];
            $page_rows = 2;
            if (isset($_POST['page_rows']) && is_numeric($_POST['page_rows'])) {
                $page_rows = intval($_POST['page_rows']);
            }
            $last = ceil($rows / $page_rows);
            if ($last < 1) {
                $last = 1;
            }
            $pagenum = 1;
            if (isset($_GET['pn'])) {
                $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
            }
            if ($pagenum < 1) {
                $pagenum = 1;
            } else if ($pagenum > $last) {
                $pagenum = $last;
            }
            $limit = 'LIMIT ' . ($pagenum - 1) * $page_rows . ',' . $page_rows;
            $nquery = "SELECT * FROM tbl_projects ORDER BY project_id DESC $limit";;
            $nresult = mysqli_query($connection, $nquery);
            $pagiantionCtrls = '';
            if ($last != 1) {
                if ($pagenum > 1) {
                    $previous = $pagenum - 1;
                    $pagiantionCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"
                    class="btn btn-info ">Previous</a>&nbsp';
                    // for ($i = $pagenum - 5; $i < $pagenum; $i++) {
                    //     if ($i > 0) {
                    //         $pagiantionCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $i . '"
                    //             class="btn btn-primary rounded-3">' . $i . '</a>&nbsp ';
                    //     }
                    // }
                }
                $pagiantionCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $pagenum . '"
                             class="btn btn-primary rounded-3">' . $pagenum . '</a> ';

                // $pagiantionCtrls .= '' . $pagenum . '&nbsp';
                // for ($i = $pagenum + 1; $i <= $last; $i++) {
                //     $pagiantionCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $i . '"
                //             class="btn btn-primary">' . $i . '</a>&nbsp ';
                //     if ($i >= $pagenum + 5) {
                //         break;
                //     }
                // }
                if ($pagenum != $last) {
                    $next = $pagenum + 1;
                    $pagiantionCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $next . '"
                class="btn btn-info">Next</a>';
                }
            }
            $count = 1;
            while ($Row = mysqli_fetch_assoc($nresult)) {
                $the_project_id = $Row['project_id'];
                $the_project_image = $Row['project_image'];
                // $the_project_pin = $Row['project_pin'];
                $the_project_title = base64_decode($Row['project_title']);
                $the_project_title_thai = base64_decode($Row['project_title_thai']);
                $the_project_title_china = base64_decode($Row['project_title_china']);
                $datetime_from_db = $Row['project_date'];

                $date = new DateTime($datetime_from_db);
                $date_time = $date->format("d/m/Y");

                echo "<td><input type='checkbox' name='checkBoxArray[]' value='{$the_project_id}'></td>
                    <td>{$the_project_id}</td>
                    <td><a href='../project.php?lang=en&p_id=$the_project_id'><i class='bi bi-search'></i>
                    </i>
                    $the_project_title</a><br>
                     <a href='../project.php?lang=th&p_id=$the_project_id'><i class='bi bi-search'></i>$the_project_title_thai</a><br>
                    <a href='../project.php?lang=cn&p_id=$the_project_id'><i class='bi bi-search'></i>$the_project_title_china</a></td>";

                $cat_id = $Row['project_category_id'];
                $query = "SELECT * FROM tbl_project_cat WHERE id_project=$cat_id";
                $fetch_cat_data = mysqli_query($connection, $query);
                while ($Cat = mysqli_fetch_assoc($fetch_cat_data)) {
                    $cat_title = $Cat["title_name"];
                    $cat_title_thai = $Cat["title_name_th"];
                    $cat_title_china = $Cat["title_name_cn"];
                    if (isset($cat_title)) {
                        echo "<td>$cat_title / $cat_title_thai/ $cat_title_china </td>";
                        // echo "<td>$cat_title_thai</td>";
                    }
                }
                echo "<td>{$Row['project_status']}</td>";

                // if ($the_project_pin === "1") {
                //     echo "<td><img src='../projects/pin.png' alt='image'  width='20px' height='20px'></td>";
                // } else {
                //     echo "<td></td>";
                // }

                echo "<td><img src='../projects/$the_project_image ' alt='image' width='150px' height='auto' style='object-fit: contain; text-align:center; '></td>
                    <td>$date_time</td>
                    <td class='text-center'>
                        <a href='projects.php?source=edit_project&p_id=$the_project_id'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></a> | 
                        <a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='projects.php?deleteProject=$the_project_id&image=$the_project_image'><i class='fa fa-trash-o fa-lg' aria-hidden='true'></i></a> 
                    </td>
                </tr>";
                $footer_table = "Show $pagenum to $last of $count entries (filtered from $rows tatol entries)";
                $count++;
            }
            ?>
            <tr>
                <td colspan="8">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <!-- Filter ที่อยู่ซ้าย -->
                        <h6><?php echo  $footer_table; ?></h6>
                        <!-- Pagination Controls ที่อยู่ขวา -->
                        <span style="margin-left: 20px;"><?php echo $pagiantionCtrls ?></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</form>