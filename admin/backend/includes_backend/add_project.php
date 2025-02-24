<script src="./ckeditor/ckeditor.js"></script>
<?php
if (isset($_POST['create_post'])) {
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

    $path = $_FILES['project_image']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $project_image = strtotime(date("Y-m-d H:i:s")) . '.' . $ext;
    $project_image_temp = $_FILES['project_image']['tmp_name'];
    $project_content = base64_encode($_POST['project_content']);

    $project_date = date("Y-m-d H:i:s");  // date('d-m-y');
    $project_comemnt_id = 0;

    move_uploaded_file($project_image_temp, "../projects/$project_image");

    // Add new Project.
    $query = "INSERT INTO tbl_projects(project_category_id, project_title, project_title_thai,project_title_china, project_date, project_image, project_content, project_status,project_subtitle,project_subtitle_thai,project_subtitle_china,project_link,project_pin) ";
    $query .= "VALUES({$project_category_id}, '{$project_title}', '{$project_title_thai}','{$project_title_china}', '{$project_date}', '{$project_image}', '{$project_content}',  '{$project_status}','{$project_subtitle}','{$project_subtitle_thai}','{$project_subtitle_china}','{$project_link_url}','{$project_pin}')";
    $create_project_query = mysqli_query($connection, $query);
    $the_project_id = mysqli_insert_id($connection);
    if (!$create_project_query) {
        die("Query Failed: " . mysqli_error($connection));
    }

    header("Location: projects.php");
    // echo "<p class='alert alert-success'>Post added successfully. <a href='../post.php?p_id=$the_post_id'>View Post</a></p>";
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group col-lg-12 ">
        <label for="project_image" class="d-block">Project Image</label>
        <div>
            <label for="project_image" class="upload-icon">
                <span style="margin-left: 8px ;">เลือกไฟล์รูปภาพ</span> <i class="fa fa-file-image-o" aria-hidden="true" style="font-size: 2.3rem;"></i>
            </label>
        </div>
        <input type="file" name="project_image" id="project_image" style="display: none;" ac]cept="image/*">

        <div id="preview-container">
            <img id="preview-image" src="#" alt="Preview Image" class="img-post">
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
        <input type="text" class="form-control" name="link_url">
    </div>
    <div class="form-group col-lg-4">
        <label for="project_category">Project Category</label>
        <select class="form-control" name="project_category" id="project_category">
            <?php
            $query = "SELECT * FROM tbl_project_cat where id_project>1";
            $fetch_data = mysqli_query($connection, $query);
            while ($Row = mysqli_fetch_assoc($fetch_data)) {
                $cat_id = $Row["id_project"];
                $cat_title = $Row["title_name"];
                if (isset($cat_title)) {
                    ?>
                    <option value='<?php echo $cat_id ; ?>'><?php echo $cat_title; ?></option>
                    <?php
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label for="project_status">Project Status</label>
        <select class="form-control" name="project_status" id="project_category">
            <option value='Draft'>Select Option</option>
            <option value='Published'>Published</option>
            <option value='Draft'>Draft</option>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label for="project_pin">Project Pin</label>
        <select class="form-control" name="project_pin" id="project_category">
            <option value='0'>Select Option</option>
            <option value='1'>Important</option>
            <option value='0'>Unimportant</option>
        </select>
    </div>

    <div class="form-group  col-lg-6">
        <label for="title">Project Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group  col-lg-6">
        <label for="subtitle">Project subtitle</label>
        <input type="text" class="form-control" name="subtitle">
    </div>
    <div class="form-group  col-lg-6">
        <label for="title">[ภาษาไทย] Project Title</label>
        <input type="text" class="form-control" name="title_thai">
    </div>
    <div class="form-group  col-lg-6">
        <label for="subtitle">[ภาษาไทย] Project subtitle</label>
        <input type="text" class="form-control" name="subtitle_thai">
    </div>

    <div class="form-group  col-lg-6">
        <label for="title">[ภาษาจีน] Project Title</label>
        <input type="text" class="form-control" name="title_china">
    </div>
    <div class="form-group  col-lg-6">
        <label for="subtitle">[ภาษาจีน] Project subtitle</label>
        <input type="text" class="form-control" name="subtitle_china">
    </div>
  <div class="form-group col-lg-12">
        <label id="my-ckeditor" for="project_content">Project Content</label>
        <textarea id="editor" name="project_content" class="form-control">
        This is some sample content.
        </textarea>
        <script>
            CKEDITOR.dtd.$removeEmpty['i'] = false;
            CKEDITOR.dtd.$removeEmpty['span'] = false;

            CKEDITOR.replace('editor');

            CKEDITOR.config.width = "100%";
            CKEDITOR.config.height = "300px";
        </script>
    </div>

    <div class="form-group col-lg-12">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish">
    </div>
</form>