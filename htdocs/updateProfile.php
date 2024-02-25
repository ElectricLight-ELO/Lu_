<?php
// Проверяем, были ли отправлены данные формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $bio = $_POST['bio'];

    // Формируем строку для записи в файл
    $dataToWrite = $firstName . ':' . $lastName . ':' . $email . ':' . ':' . $newPassword . ':' . $bio;

    // Открываем файл для записи, если файл не существует, он будет создан
    $file = fopen("profileData.txt", "a");

    // Записываем данные в файл
    fwrite($file, $dataToWrite . PHP_EOL);

    // Закрываем файл
    fclose($file);

    // Перенаправляем пользователя обратно на страницу редактирования профиля
    header("Location: editProfile.html");
    exit;
} else {
    // Если данные не были отправлены через POST, перенаправляем на страницу редактирования профиля
    header("Location: editProfile.html");
    exit;
}
?>
