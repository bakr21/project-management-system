<?php
require_once './../helper/functions.php';
session_start();

$id = $_POST['id'];

$imageDeleted = deleteProject($id);

if ($imageDeleted) {
    $_SESSION['success'] = "تم حذف المشروع والصورة بنجاح.";
} else {
    $_SESSION['success'] = "تم حذف المشروع بنجاح.";
}

header('Location: ./../index.php');
