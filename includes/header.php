<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
  } elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'th';
  }
include "lang_" . $_SESSION['lang'] . ".php";
include "includes/db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>A.X.W INTERNATIONAL CO.,LTD.</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="images/logo1.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="aos/aos.css" />
    <link href="css/date-time-picker-component.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" />
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">
    <?php include "svg.php"; ?>
    <div id="bodywrap" class="overflow-hidden">
        <nav id="header-nav" class="navbar navbar-expand-lg p-3 py-2 container-fluid border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo-文字版.png" class="logo" />
                </a>
                <button class="navbar-toggler d-flex d-lg-none order-3 p-2 shadow-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="navbar-icon text-black">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 pb-0">
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"
                            data-bs-target="#bdNavbar"></button>
                    </div>
                    <div class="offcanvas-body">
<<<<<<< HEAD
                        <ul id="navbar"
                            class="navbar-nav text-titlecase fw-bold justify-content-lg-center justify-content-md-end align-items-center text-center flex-grow-1 text-hover">
                            <li class="nav-item me-5">
                                <a class="nav-link text-titlecase fw-bold " href="index.php">Home</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link text-titlecase fw-bold" href="about.php">About</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link text-titlecase fw-bold" href="projects.php">Projects</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link text-titlecase fw-bold" href="services.html">Services</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link text-titlecase fw-bold" href="blog.html">News</a>
                            </li>
                            <li class="nav-item dropdown me-5">
                                <a class="nav-link text-titlecase fw-bold dropdown-toggle pe-0" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false">Pages</a>
                            </li>
=======
                        <ul id="navbar" class="navbar-nav text-titlecase fw-bold justify-content-lg-center justify-content-md-end align-items-center text-center flex-grow-1 text-hover">
                            <?php
                            $sql = "SELECT * FROM tbl_menu";
                            $fetch_data = $connection->query($sql);
                            if ($fetch_data->num_rows == 0) {
                            } else {
                                while ($row = $fetch_data->fetch_assoc()) {
                                    $id_menu = $row['id_menu'];
                                    $link = $row['link'];
                                    $lang = $_SESSION['lang'];
                                    switch ($lang) {
                                        case 'en':
                                            $menu_titile = $row['name'];
                                            break;
                                        case 'cn':
                                            $menu_titile = $row['menuCN'];
                                            break;
                                        default:
                                            $menu_titile = $row['menuTH'];
                                    }
                                    $sql_sub = "SELECT *FROM tbl_menu_dd WHERE id_menu = '$id_menu'";
                                    $fetch_sub = $connection->query($sql_sub);
                                    if ($fetch_sub->num_rows == 0) {
                                        // ไม่มีเมนูย่อย
                            ?>
                                        <li class="nav-item me-5">
                                            <a class="nav-link text-titlecase fw-bold " href="<?php echo $link; ?>"><?php echo $menu_titile; ?></a>
                                        </li>
                                    <?php } else {
                                        // มีเมนูย่อย
                                    ?>
                                        <li class="nav-item dropdown me-5">
                                            <a class="nav-link text-titlecase fw-bold dropdown-toggle pe-0" data-bs-toggle="dropdown" href="<?php echo $link ?>"
                                                role="button" aria-expanded="false"><?php echo $menu_titile ?><iconify-icon
                                                    icon="material-symbols:arrow-drop-down"></iconify-icon></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                while ($row_sub = $fetch_sub->fetch_assoc()) {
                                                    $id_menu = $row_sub['id_menu'];
                                                    $link_sub = $row_sub['link_dd'];
                                                    $lang = $_SESSION['lang'];
                                                    switch ($lang) {
                                                        case 'en':
                                                            $menu_subtitile = $row_sub['name_dd'];
                                                            break;
                                                        case 'cn':
                                                            $menu_subtitile = $row_sub['menuCN_dd'];
                                                            break;
                                                        default:
                                                            $menu_subtitile = $row_sub['menuTH_dd'];
                                                    }
                                                ?>
                                                    <li class="text-decoration-none">
                                                        <a href="#" onclick="change_lang('<?php echo $link_sub; ?>')" class="dropdown-item text-titlecase fw-bold"><?php echo $menu_subtitile; ?></a></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                            <?php }
                                }
                            } ?>
>>>>>>> e83ef6b311020a711e327dbd36e0b3d1eb9a93e2
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        </header>

        <script>
            function change_lang(value) {
                localStorage.setItem("lang", value);
                window.location.replace("?lang=" + value);
            }
        </script>