<?php
if (isset($_POST['update_project'], $_GET['p_id'])) {
    $the_project_id = $_GET['p_id'];

    $project_title = base64_encode($_POST['title']);
    $project_title_thai = base64_encode($_POST['title_thai']);
    $project_title_china = base64_encode($_POST['title_china']);
    $project_subtitle = base64_encode($_POST['subtitle']);
    $project_subtitle_thai = base64_encode($_POST['subtitle_thai']);
    $project_subtitle_china = base64_encode($_POST['subtitle_china']);
    $project_link_url = $_POST['link_url'];
    $project_category_id = $_POST['project_category'];
    $project_status = $_POST['project_status'];
    $project_pin = $_POST['project_pin'];
    $project_content = base64_encode($_POST['project_content']);

    $project_date = date("Y-m-d H:i:s"); //date('d-m-y');    

    $project_image_old = $_POST['project_image_old'];

    $project_image_temp = $_FILES['project_image']['tmp_name'];
    if (strlen($project_image_temp) > 0) {
        $path = $_FILES['project_image']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $project_image = strtotime(date("Y-m-d H:i:s")) . '.' . $ext;

        unlink("../projects/$project_image_old");
        move_uploaded_file($project_image_temp, "../projects/$project_image");
    } else {
        $project_image = $project_image_old;
    }

    // Update a Post.
    $query = "UPDATE tbl_projects SET ";
    $query .= "project_category_id='$project_category_id', ";
    $query .= "project_title='$project_title', ";
    $query .= "project_title_thai='$project_title_thai', ";
    $query .= "project_title_china='$project_title_china', ";
    $query .= "project_subtitle='$project_subtitle', ";
    $query .= "project_subtitle_thai='$project_subtitle_thai', ";
    $query .= "project_subtitle_china='$project_subtitle_china', ";
    $query .= "project_link='$project_link_url', ";
    $query .= "project_pin='$project_pin', ";
    $query .= "project_date='$project_date', ";
    $query .= !empty($project_image) ? "project_image='$project_image', " : null;
    $query .= "project_content='$project_content', ";
    $query .= "project_status='$project_status' ";
    $query .= "WHERE project_id=$the_project_id";

    //   $query = mysqli_real_escape_string($connection, $query);
    $update_project_query = mysqli_query($connection, $query);
    if (!$update_project_query) {
        die("Query Failed: " . mysqli_error($connection));
    }
    header("Location: projects.php");
    //= echo "<p class='alert alert-success'>Post updated successfully. <a href='../post.php?p_id=$the_post_id'>View Post</a></p>";
}
?>


<?php
if (isset($_GET['p_id'])) {
    $the_project_id = $_GET['p_id'];
    $query = "SELECT * FROM tbl_projects WHERE project_id=$the_project_id";
    $fetch_data = mysqli_query($connection, $query);
    while ($Row = mysqli_fetch_assoc($fetch_data)) {
        $project_id = $Row['project_id'];
        $project_title = base64_decode($Row['project_title']);
        $project_title_thai = base64_decode($Row['project_title_thai']);
        $project_title_china = base64_decode($Row['project_title_china']);
        $project_subtitle = base64_decode($Row['project_subtitle']);
        $project_subtitle_thai = base64_decode($Row['project_subtitle_thai']);
        $project_subtitle_china = base64_decode($Row['project_subtitle_china']);
        $project_link_url = $Row['project_link'];
        $project_category_id = $Row['project_category_id'];
        $project_status = $Row['project_status'];
        $project_pin = $Row['project_pin'];
        $project_image_old = $Row['project_image'];
        $project_image = $Row['project_image'];
        $project_date = $Row['project_date'];
        $project_content = base64_decode($Row['project_content']);
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <!--                        <div class="form-group">
                                        <img src='../images/<?php echo $post_image ?>' alt='image' width='100px'>
                                        <input type="file" name="post_image">
                                        <input type="hidden" id="post_image_old" name="post_image_old" value="<?php echo $post_image_old; ?>">
                                    </div>-->
            <!--x-->
            <div class="form-group col-lg-12">
                <label for="project_image" class="d-block">Project Image</label>
                <div>
                    <label for="project_image" class="upload-icon">
                        <span style="margin-left: 8px ;">เลือกไฟล์รูปภาพ</span> <i class="fa fa-file-image-o" aria-hidden="true" style="font-size: 2.3rem;"></i>
                    </label>
                    <input type="file" name="project_image" id="project_image" style="display: none;" accept="image/*">
                    <input type="hidden" id="project_image_old" name="project_image_old" value="<?php echo $project_image_old; ?>">
                </div>
                <div id="preview-container">
                    <!-- หากมี post_image_old ให้แสดงรูปเก่าหากไม่มีให้แสดงเป็น "no-image" -->
                    <img id="preview-image" src='../projects/<?php echo $project_image ? $project_image : '#'; ?>' alt="Preview Image" class="img-post" style="display: <?php echo $project_image ? 'block' : 'none'; ?>;">
                </div>
            </div>

            <script>
                document.getElementById('project_image').addEventListener('change', function (event) {
                    const previewImage = document.getElementById('preview-image');
                    const file = event.target.files[0]; // ดึงไฟล์ที่เลือก
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewImage.src = e.target.result; // แสดงรูปใน img
                            previewImage.style.display = 'block'; // ทำให้ img ปรากฏ
                        };
                        reader.readAsDataURL(file); // อ่านไฟล์เป็น Data URL
                    }
                });
            </script>
            <div class="form-group col-lg-12">
                <label for="link">Link Url</label>
                <input type="text" class="form-control" value="<?php echo $project_link_url ?>" name="link_url">
            </div>
            <div class="form-group col-lg-4">
                <label for="project_category">Project Category ID</label>
                <select class="form-control" name="project_category" id="project_category">
                    <?php
                    $query = "SELECT * FROM tbl_project_cat where id_project>1";
                    $fetch_data = mysqli_query($connection, $query);
                    while ($Row = mysqli_fetch_assoc($fetch_data)) {
                        $cat_id = $Row["id_project"];
                        $cat_title = $Row["title_name"];
                        $cat_title_thai = $Row["title_name_th"];
                        $cat_title_cn = $Row["title_name_cn"];
                        $selected = ($cat_id == $project_category_id) ? 'selected' : '';
                        if (isset($cat_title)) {
                            echo "<option value='" . $cat_id . "' " . $selected . ">" . $cat_title . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="project_status">Project Status</label>
                <select class="form-control" name="project_status" id="project_category">
                    <option value='<?php echo $project_status; ?>'><?php echo $project_status; ?></option>
                    <?php if ($project_status === "Published") { ?>
                        <option value='Draft'>Draft</option>
                    <?php } else { ?>
                        <option value='Published'>Published</option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="project_pin">Project Pin</label>
                <select class="form-control" name="project_pin" id="project_category">
                    <option value='<?php echo $project_pin; ?>'><?php echo ($project_pin === "1") ? "Important" : "Unimportant"; ?></option>
                    <?php if ($project_pin === "1") { ?>
                        <option value='0'>Unimportant</option>
                    <?php } else { ?>
                        <option value='1'>Important</option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group  col-lg-6">
                <label for="title">Project Title</label>
                <input type="text" class="form-control" value="<?php echo $project_title; ?>" name="title">
            </div>
            <div class="form-group  col-lg-6">
                <label for="subtitle">Project subtitle</label>
                <input type="text" class="form-control" value="<?php echo $project_subtitle; ?>" name="subtitle">
            </div>
            <div class="form-group  col-lg-6">
                <label for="title">[ภาษาไทย] Project Title</label>
                <input type="text" class="form-control" value="<?php echo $project_title_thai; ?>" name="title_thai">
            </div>
            <div class="form-group  col-lg-6">
                <label for="subtitle">[ภาษาไทย] Project subtitle</label>
                <input type="text" class="form-control" value="<?php echo $project_subtitle_thai; ?>" name="subtitle_thai">
            </div>
            <div class="form-group  col-lg-6">
                <label for="title">[ภาษาจีน] Project Title</label>
                <input type="text" class="form-control" value="<?php echo $project_title_china; ?>" name="title_china">
            </div>
            <div class="form-group  col-lg-6">
                <label for="subtitle">[ภาษาจีน] Project subtitle</label>
                <input type="text" class="form-control" value="<?php echo $project_subtitle_china; ?>" name="subtitle_china">
            </div>
          <div class="form-group col-lg-12">
                <label id="my-ckeditor" for="project_content">Project Content</label>
                <textarea id="editor" name="project_content" class="form-control">
                    <?php echo $project_content; ?>
                </textarea>
                <script>
                    CKEDITOR.dtd.$removeEmpty['i'] = false;
                    CKEDITOR.dtd.$removeEmpty['span'] = false;
                    CKEDITOR.replace('editor');
                    CKEDITOR.config.width = "100%";
                    CKEDITOR.config.height = "300px";
                </script>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update_project" value="Update">
            </div>
        </form>
        <?php
    }
}
?>