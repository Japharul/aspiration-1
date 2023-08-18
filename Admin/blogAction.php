<?php
include 'session.php';
include 'header-1.php';
include 'database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $sub = $_POST['sub'];
    $content = $_POST['content'];
    $images = $_FILES['images'];
    $image_paths = [];

    foreach ($images['name'] as $index => $image_name) {
        $image_tmp = $images['tmp_name'][$index];
        $image_path = "img/" . $image_name; // Update the directory name to "img"

        move_uploaded_file($image_tmp, $image_path);
        $image_paths[] = $image_path;
    }

    $image_paths_json = json_encode($image_paths);

    $sql = "INSERT INTO blogs (title, images, sub, content) VALUES ('$title', '$image_paths_json', '$sub', '$content')";

    if (mysqli_query($conn, $sql)) {
        echo 'Blog created successfully.';
    } else {
        echo 'Error creating blog: ' . mysqli_error($conn);
    }
}
$conn->close();
?>
