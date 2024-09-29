<?php
// comments.php
$file = 'comments.txt';

// Проверяем, было ли отправлено сообщение
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $comment = htmlspecialchars(trim($_POST['comment']));
    
    if (!empty($name) && !empty($comment)) {
        $entry = "$name: $comment\n"; // Формат комментария
        file_put_contents($file, $entry, FILE_APPEND); // Записываем в файл
    }
}

// Читаем и отображаем комментарии
if (file_exists($file)) {
    $comments = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($comments as $comment) {
        echo "<div class='comment'>" . htmlspecialchars($comment) . "</div>";
    }
}
?>
