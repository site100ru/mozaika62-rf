<?php
session_start();

// Определяем ветку квиза
$branch = isset($_POST['form-branch']) ? $_POST['form-branch'] : '';

// Общие данные
$answer1 = isset($_POST['form-question-1']) ? $_POST['form-question-1'] : 'Не указано';
$name = isset($_POST['form-name']) ? $_POST['form-name'] : '';
$phone = isset($_POST['form-phone']) ? $_POST['form-phone'] : '';

// Способы связи
$contact_methods = array();
if (isset($_POST['form-answer-final-1']) && $_POST['form-answer-final-1']) 
    $contact_methods[] = $_POST['form-answer-final-1'];
if (isset($_POST['form-answer-final-2']) && $_POST['form-answer-final-2']) 
    $contact_methods[] = $_POST['form-answer-final-2'];
if (isset($_POST['form-answer-final-3']) && $_POST['form-answer-final-3']) 
    $contact_methods[] = $_POST['form-answer-final-3'];
if (isset($_POST['form-answer-final-4']) && $_POST['form-answer-final-4']) 
    $contact_methods[] = $_POST['form-answer-final-4'];
$contact_methods_str = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

// Формируем тело письма
$email_body = "
    <h3>Новая заявка с Квиза с сайта мозаика62.рф</h3>
    <p><strong>Имя:</strong> " . $name . "</p>
    <p><strong>Телефон:</strong> " . $phone . "</p>
    <p><strong>Способы связи:</strong> " . $contact_methods_str . "</p>
    <hr>
    <p><strong>Тип мебели:</strong> " . $answer1 . "</p>
";

// ВЕТКА КУХНЯ
if ($branch === 'kitchen') {
    $answer2_kitchen = isset($_POST['form-question-2-kitchen']) ? $_POST['form-question-2-kitchen'] : 'Не указано';
    
    $features = array();
    if (isset($_POST['form-answer-3-kitchen-1']) && $_POST['form-answer-3-kitchen-1']) 
        $features[] = $_POST['form-answer-3-kitchen-1'];
    if (isset($_POST['form-answer-3-kitchen-2']) && $_POST['form-answer-3-kitchen-2']) 
        $features[] = $_POST['form-answer-3-kitchen-2'];
    if (isset($_POST['form-answer-3-kitchen-3']) && $_POST['form-answer-3-kitchen-3']) 
        $features[] = $_POST['form-answer-3-kitchen-3'];
    $features_str = !empty($features) ? implode(', ', $features) : 'Не выбрано';
    
    $sizes = array();
    if (isset($_POST['form-side-1']) && $_POST['form-side-1']) 
        $sizes[] = "Сторона 1: " . $_POST['form-side-1'] . " м";
    if (isset($_POST['form-side-2']) && $_POST['form-side-2']) 
        $sizes[] = "Сторона 2: " . $_POST['form-side-2'] . " м";
    if (isset($_POST['form-side-3']) && $_POST['form-side-3']) 
        $sizes[] = "Сторона 3: " . $_POST['form-side-3'] . " м";
    if (isset($_POST['form-bar-size']) && $_POST['form-bar-size']) 
        $sizes[] = "Размер барной стойки: " . $_POST['form-bar-size'] . " м";
    if (isset($_POST['form-island-size']) && $_POST['form-island-size']) 
        $sizes[] = "Размер острова: " . $_POST['form-island-size'] . " м";
    $sizes_str = !empty($sizes) ? implode('<br>', $sizes) : 'Не указано';
    
    $answer5_kitchen = isset($_POST['form-question-5-kitchen']) ? $_POST['form-question-5-kitchen'] : 'Не указано';
    $answer6_kitchen = isset($_POST['form-question-6-kitchen']) ? $_POST['form-question-6-kitchen'] : 'Не указано';
    $answer7_kitchen = isset($_POST['form-question-7-kitchen']) ? $_POST['form-question-7-kitchen'] : 'Не указано';
    
    $email_body .= "
        <h4>Параметры кухни:</h4>
        <p><strong>Планировка:</strong> " . $answer2_kitchen . "</p>
        <p><strong>Дополнительные особенности:</strong> " . $features_str . "</p>
        <p><strong>Размеры:</strong><br>" . $sizes_str . "</p>
        <p><strong>Стиль:</strong> " . $answer5_kitchen . "</p>
        <p><strong>Материал фасада:</strong> " . $answer6_kitchen . "</p>
        <p><strong>Специальное предложение:</strong> " . $answer7_kitchen . "</p>
    ";
}

// ВЕТКА ШКАФ
elseif ($branch === 'wardrobe') {
    $answer2_wardrobe = isset($_POST['form-question-2-wardrobe']) ? $_POST['form-question-2-wardrobe'] : 'Не указано';
    $answer3_wardrobe = isset($_POST['form-question-3-wardrobe']) ? $_POST['form-question-3-wardrobe'] : 'Не указано';
    $answer4_wardrobe = isset($_POST['form-question-4-wardrobe']) ? $_POST['form-question-4-wardrobe'] : 'Не указано';
    
    $widths = array();
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST['form-answer-5-wardrobe-' . $i]) && $_POST['form-answer-5-wardrobe-' . $i]) {
            $widths[] = $_POST['form-answer-5-wardrobe-' . $i];
        }
    }
    $widths_str = !empty($widths) ? implode(', ', $widths) : 'Не указано';
    
    $doors = array();
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST['form-answer-6-wardrobe-' . $i]) && $_POST['form-answer-6-wardrobe-' . $i]) {
            $doors[] = $_POST['form-answer-6-wardrobe-' . $i];
        }
    }
    $doors_str = !empty($doors) ? implode(', ', $doors) : 'Не указано';
    
    $answer7_wardrobe = isset($_POST['form-question-7-wardrobe']) ? $_POST['form-question-7-wardrobe'] : 'Не указано';
    
    $email_body .= "
        <h4>Параметры шкафа:</h4>
        <p><strong>Тип шкафа:</strong> " . $answer2_wardrobe . "</p>
        <p><strong>Тип дверей:</strong> " . $answer3_wardrobe . "</p>
        <p><strong>Материал фасада:</strong> " . $answer4_wardrobe . "</p>
        <p><strong>Ширина шкафа:</strong> " . $widths_str . "</p>
        <p><strong>Количество дверей:</strong> " . $doors_str . "</p>
        <p><strong>Специальное предложение:</strong> " . $answer7_wardrobe . "</p>
    ";
}

// ВЕТКА ДРУГОЕ
elseif ($branch === 'other') {
    $description = isset($_POST['form-question-2-other-description']) ? $_POST['form-question-2-other-description'] : 'Не указано';
    $email_body .= "
        <h4>Описание изделия:</h4>
        <p>" . nl2br($description) . "</p>
    ";
}

// Проверяем телефон
if ($_POST && $phone) {
    
    $to = "sidorov-vv3@mail.ru";
    $subject = "Заявка с Квиза с сайта мозаика62.рф - " . $answer1;
    
    $has_file = false;
    $file_name = '';
    $file_tmp = '';
    $file_type = '';
    
    if (isset($_FILES['file']) && isset($_FILES['file']['error']) && is_array($_FILES['file']['error'])) {
        // Проверяем первый файл в массиве
        if (isset($_FILES['file']['error'][0]) && $_FILES['file']['error'][0] == 0) {
            $has_file = true;
            $file_name = $_FILES['file']['name'][0];
            $file_tmp = $_FILES['file']['tmp_name'][0];
            $file_type = $_FILES['file']['type'][0];
            
            $email_body .= "<p><strong>Прикреплен файл:</strong> " . htmlspecialchars($file_name) . "</p>";
        }
    }
    
    // Если есть файл - отправляем с MIME
    if ($has_file && file_exists($file_tmp)) {
        $boundary = md5(time());
        
        $headers = "From: info@мозаика62.рф\r\n";
        $headers .= "Reply-To: info@мозаика62.рф\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
        
        $message = "--{$boundary}\r\n";
        $message .= "Content-Type: text/html; charset=utf-8\r\n";
        $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $message .= $email_body . "\r\n\r\n";
        
        // Прикрепляем файл
        $file_content = chunk_split(base64_encode(file_get_contents($file_tmp)));
        $message .= "--{$boundary}\r\n";
        $message .= "Content-Type: {$file_type}; name=\"{$file_name}\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"{$file_name}\"\r\n\r\n";
        $message .= $file_content . "\r\n";
        $message .= "--{$boundary}--";
        
        mail($to, $subject, $message, $headers);
    } else {
        // Обычное письмо без файла
        $headers = "From: info@мозаика62.рф\r\n";
        $headers .= "Reply-To: info@мозаика62.рф\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        
        mail($to, $subject, $email_body, $headers);
    }
    
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «мозаика62». Мы ответим Вам в&#160;ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>