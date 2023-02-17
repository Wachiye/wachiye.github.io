<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<?php session_start() ?>
<?php
include './config.php';
// if (!isset($_SESSION['login_id']))
//     header('location:login.php');
// include 'db_connect.php';
ob_start();
// if (!isset($_SESSION['system'])) {

//     $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
//     foreach ($system as $k => $v) {
//         $_SESSION['system'][$k] = $v;
//     }
// }
ob_end_flush();

include INC_DIR . '/head.php'
?>

<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER ALL -->

    <div class="sira_tm_all_wrap" data-magic-cursor="show">

        <?php include INC_DIR . "/mobile-menu.php"; ?>
        <?php include INC_DIR . "/header/header.php"; ?>
        <?php include INC_DIR . "/hero.php"; ?>
        <?php include INC_DIR . "/partners.php"; ?>
        <?php include INC_DIR . "/features.php"; ?>
        <?php include INC_DIR . "/skills.php"; ?>
        <?php include INC_DIR . "/counter.php"; ?>
        <?php include INC_DIR . "/about.php"; ?>
        <?php include INC_DIR . "/testimonials.php"; ?>
        <?php include INC_DIR . "/faq.php"; ?>
        <?php include INC_DIR . "/freelance.php"; ?>
        <?php include INC_DIR . "/contact.php"; ?>
        <!-- CURSOR -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /CURSOR -->

    </div>
    <!-- / WRAPPER ALL -->

    <?php include INC_DIR . "/footer/footer.php" ?>