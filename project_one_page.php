<?php
if (isset($_GET["page"])) {
      $page = $_GET['page'];
      if ($page == 1) { //All
            echo "<script>location.href='3_projects.php';</script>";
      }
} else {
      $page = 1;
}

//       if($page>1){
$query = mysqli_query($connection, "select count(project_id) from tbl_projects where project_category_id =  $page");
//        }else{
//              $query=mysqli_query($connection,"select count(project_id) from tbl_projects");   
//        }          

$row = mysqli_fetch_row($query);

$rows = $row[0];
$page_rows = 3;
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
//        echo   $sql = "select * from tbl_projects $limit";
//    exit;



//       if($page>1){

$nquery = mysqli_query($connection, "select * from tbl_projects where project_category_id =  $page $limit ");
//     }else{
//                 $nquery=mysqli_query($connection,"select * from tbl_projects $limit");

//       }         





$paginationCtrls = '';

if ($last != 1) {

      if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=$page&pn=' . $previous . '" class="btn btn-default"><i class="fa-solid fa-angle-left"></i></a> &nbsp; &nbsp; ';

            for ($i = $pagenum - 3; $i < $pagenum; $i++) {
                  if ($i > 0) {
                        $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $page . '&pn=' . $i . '" class="btn btn-default">' . $i . '</a> &nbsp; ';
                  }
            }
      }

      $paginationCtrls .= '' . $pagenum . ' &nbsp; ';

      for ($i = $pagenum + 1; $i <= $last; $i++) {
            $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $page . '&pn=' . $i . '" class="btn btn-default">' . $i . '</a> &nbsp; ';
            if ($i >= $pagenum + 3) {
                  break;
            }
      }

      if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= ' &nbsp; &nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $page . '&pn=' . $next . '" class="btn btn-default"><i class="fa-solid fa-angle-right"></i></a> ';
      }
}
