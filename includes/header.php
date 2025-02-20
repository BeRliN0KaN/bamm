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
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $sql_title = "SELECT * FROM tbl_menu";
    $fetch_data = $connection->query($sql_title);
    while ($row_title = $fetch_data->fetch_assoc()) {

        $page_default = "A.X.W INTERNATIONAL CO.,LTD.";
        if ($fetch_data->num_rows > 0) {
            while ($row_title = $fetch_data->fetch_assoc()) {
                $menu_id = $row_title['id_menu'];
                $link = basename($row_title['link']);
                $title_lang = $_SESSION['lang'];
                switch ($title_lang) {
                    case 'en':
                        $title_name = strtoupper($row_title['name'] . " | A.X.W INTERNATIONAL CO.,LTD.");
                        break;
                    case 'cn':
                        $title_name = strtoupper($row_title['menuCN'] . " | A.X.W INTERNATIONAL CO.,LTD.");
                        break;
                    default:
                        $title_name = strtoupper($row_title['menuTH'] . " | A.X.W INTERNATIONAL CO.,LTD.");
                        break;
                }

                if ($current_page == 'index.php') {
                    $page_title = $page_default;
                } elseif ($current_page == $link) {
                    $page_title = $title_name;
                }

                $sql_sub = "SELECT * FROM tbl_menu_dd WHERE id_menu = '$menu_id'";
                $fetch_sub = $connection->query($sql_sub);

                if ($fetch_sub->num_rows > 0) {
                    while ($row_sub = $fetch_sub->fetch_assoc()) {
                        $sub_link = basename($row_sub['link_dd']);
                        $sub_title_lang = $_SESSION['lang'];
                        switch ($sub_title_lang) {
                            case 'en':
                                $sub_title_name = strtoupper($row_sub['name_dd'] . " | A.X.W INTERNATIONAL CO.,LTD.");
                                break;
                            case 'cn':
                                $sub_title_name = strtoupper($row_sub['menuCN_dd'] . " | A.X.W INTERNATIONAL CO.,LTD.");
                                break;
                            default:
                                $sub_title_name = strtoupper($row_sub['menuTH_dd'] . " | A.X.W INTERNATIONAL CO.,LTD.");
                                break;
                        }

                        if ($current_page == $sub_link) {
                            $page_title = $sub_title_name;
                        }
                    }
                }
            }
        }
    }
    echo "<title>" . $page_title . "</title>";
    ?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
        <nav id="header-nav" class="navbar navbar-expand-lg p-3 py-2 container-fluid border-bottom position-fixed">
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

                        <ul id="navbar" class="navbar-nav text-uppercase fw-bold justify-content-lg-center justify-content-md-end align-items-center text-center flex-grow-1 text-hover">
                            <?php
                            $current_page = basename($_SERVER['PHP_SELF']);
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
                                    $sql_sub = "SELECT * FROM tbl_menu_dd WHERE id_menu = '$id_menu'";
                                    $fetch_sub = $connection->query($sql_sub);
                                    if ($fetch_sub->num_rows == 0) {
                                        // ไม่มีเมนูย่อย
                            ?>
                                        <li class="nav-item me-5">
                                            <a class="nav-link text-uppercase fw-bold <?php echo $current_page == basename($link) ? 'active' : ''; ?>" href="<?php echo $link; ?>"><?php echo $menu_titile; ?></a>
                                        </li>
                                    <?php } else {
                                        // มีเมนูย่อย
                                    ?>
                                        <li class="nav-item dropdown me-5">
                                            <a class="nav-link text-uppercase fw-bold dropdown-toggle pe-0" data-bs-toggle="dropdown" href="<?php echo $link ?>"
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
                                                        <a href="<?php echo $link_sub; ?>" class="dropdown-item text-uppercase fw-bold <?php echo $current_page == basename($link) ? 'active' : ''; ?>"><?php echo $menu_subtitile; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                            <?php }
                                }
                            } ?>
                            <li class="nav-item dropdown me-5">
                                <?php
                                $lang = $_SESSION['lang'];
                                switch ($lang) {
                                    case 'en':
                                        $menu_titile = 'Language';
                                        break;
                                    case 'cn':
                                        $menu_titile = '語言';
                                        break;
                                    default:
                                        $menu_titile = 'ภาษา';
                                }
                                ?>
                                <a class="nav-link text-uppercase fw-bold dropdown-toggle pe-0" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false"><?php echo $menu_titile ?><iconify-icon
                                        icon="material-symbols:arrow-drop-down"></iconify-icon></a>
                                <ul class="dropdown-menu">
                                    <li class="text-decoration-none">
                                        <a href="#" onclick="change_lang('th')" class="dropdown-item text-uppercase fw-bold bg-white <?php echo $current_page == basename($link) ? 'active' : ''; ?>">
                                            Thailand
                                        </a>
                                    </li>
                                    <li class="text-decoration-none">
                                        <a href="#" onclick="change_lang('en')" class="dropdown-item text-uppercase fw-bold bg-white  <?php echo $current_page == basename($link) ? 'active' : ''; ?>">
                                            English
                                        </a>
                                    </li>
                                    <li class="text-decoration-none">
                                        <a href="#" onclick="change_lang('cn')" class="dropdown-item text-uppercase fw-bold bg-white  <?php echo $current_page == basename($link) ? 'active' : ''; ?>">
                                            China
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav list-unstyled d-flex align-items-center justify-content-start">
                <li class="pe-4">
                  <a href="https://www.facebook.com/profile.php?id=61568368107367&sk=about" target="_blank">
                    <svg class="facebook" width="18" height="18">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li class="pe-4">
                  <a href="https://ckbox.cloud/382e77cfc832c66adcfc/assets/3GNIHhFW2BLM/file?download=true" class="light">
                    <svg class="instagram" width="18" height="18">
                      <use xlink:href="#pdf"></use>
                    </svg>
                  </a>
                </li>
                <!-- <li class="pe-4">
                  <a href="#" class="light">
                    <svg class="linkedin" width="18" height="18">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li> -->
                <!-- <li class="pe-4">
                  <a href="#" class="light">
                    <svg class="twitter" width="18" height="18">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li> -->
                <!-- <li class="pe-4">
                  <a href="#" class="light">
                    <svg class="blogger" width="18" height="18">
                      <use xlink:href="#blogger"></use>
                    </svg>
                  </a>
                </li> -->
              </ul>
        </nav>
        
    </div>
    </header>

    <script>
        function change_lang(value) {
            localStorage.setItem("lang", value);
            window.location.replace("?lang=" + value);
        }
    </script>