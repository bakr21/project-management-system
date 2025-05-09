<?php
require_once './../helper/functions.php';

session_start();

$name = $_POST['name'];

$description = $_POST['description'];

$fileName = uploadFile('file');

$newProject = ['id' => uniqid(), 'name' => $name, 'description' => $description, 'image' => $fileName];

createNewProject($newProject);

$_SESSION['success'] = "تم إنشاء المشروع بنجاح.";

header('Location: ./../create.php');

// redirectWithMessage('location', ['key', 'value']);