<?php
$filename = 'index.php';
if (file_exists($filename)) {
    $content = htmlspecialchars(file_get_contents($filename));
    echo '<pre>' . $content . '</pre>';
} else {
    echo 'Файл ' . $filename . ' не найден';
}
?>