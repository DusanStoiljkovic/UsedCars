<?php
session_start();

$_page_view = [
    'page_title' => "",
    'message' => [],
    'error' => []
];

// Rutiranje
$module = $_GET['module'] ?? "";
$module_filename = "";

if ($module == "") {
    $module = "home";
}

$module_filename = "./module/module-" . $module . ".php";

if (!file_exists($module_filename)) {
    $module_filename = "./template/view-error404.php";
}

include "template/page-base.php";
include "template/page-header.php";
include $module_filename;
include "template/page-footer.php";

?>
