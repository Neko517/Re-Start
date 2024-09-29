<?php
// Проверка метода запроса
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение и фильтрация данных
    $name = htmlspecialchars(trim($_POST['name']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    // Сохранение комментариев в файл
    $file = 'comments.txt';
    $entry = "$name: $comment\n";
    file_put_contents($file, $entry, FILE_APPEND);
}

// Отображение комментариев
if (file_exists('comments.txt')) {
    $comments = file('comments.txt', FILE_IGNORE_NEW_LINES);
    foreach ($comments as $comment) {
        echo '<p>' . htmlspecialchars($comment) . '</p>';
    }
}
?>
