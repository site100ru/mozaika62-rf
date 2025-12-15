<?php
session_start();
$win = "true";

// Общие данные
$name = isset($_POST['form-name']) ? $_POST['form-name'] : '';
$phone = isset($_POST['form-phone']) ? $_POST['form-phone'] : '';

// Способы связи (чекбоксы)
$answer_final_1 = isset($_POST['form-answer-final-1']) ? $_POST['form-answer-final-1'] : '';
$answer_final_2 = isset($_POST['form-answer-final-2']) ? $_POST['form-answer-final-2'] : '';
$answer_final_3 = isset($_POST['form-answer-final-3']) ? $_POST['form-answer-final-3'] : '';

// Собираем способы связи в одну строку
$contact_methods = array();
if ($answer_final_1) $contact_methods[] = $answer_final_1;
if ($answer_final_2) $contact_methods[] = $answer_final_2;
if ($answer_final_3) $contact_methods[] = $answer_final_3;
$contact_methods_str = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

// Данные кухни
$answer1_kitchen = isset($_POST['form-question-1-kitchen']) ? $_POST['form-question-1-kitchen'] : 'Не указано';

// Дополнительные особенности (множественный выбор)
$features = array();
if (isset($_POST['form-answer-2-kitchen-1']) && $_POST['form-answer-2-kitchen-1']) 
    $features[] = $_POST['form-answer-2-kitchen-1'];
if (isset($_POST['form-answer-2-kitchen-2']) && $_POST['form-answer-2-kitchen-2']) 
    $features[] = $_POST['form-answer-2-kitchen-2'];
if (isset($_POST['form-answer-2-kitchen-3']) && $_POST['form-answer-2-kitchen-3']) 
    $features[] = $_POST['form-answer-2-kitchen-3'];
$features_str = !empty($features) ? implode(', ', $features) : 'Не выбрано';

// Размеры
$side1 = isset($_POST['form-side-1']) && $_POST['form-side-1'] ? $_POST['form-side-1'] . ' м' : '';
$side2 = isset($_POST['form-side-2']) && $_POST['form-side-2'] ? $_POST['form-side-2'] . ' м' : '';
$side3 = isset($_POST['form-side-3']) && $_POST['form-side-3'] ? $_POST['form-side-3'] . ' м' : '';
$bar_size = isset($_POST['form-bar-size']) && $_POST['form-bar-size'] ? $_POST['form-bar-size'] . ' м' : '';
$island_size = isset($_POST['form-island-size']) && $_POST['form-island-size'] ? $_POST['form-island-size'] . ' м' : '';

$sizes = array();
if ($side1) $sizes[] = "Сторона 1: " . $side1;
if ($side2) $sizes[] = "Сторона 2: " . $side2;
if ($side3) $sizes[] = "Сторона 3: " . $side3;
if ($bar_size) $sizes[] = "Размер барной стойки: " . $bar_size;
if ($island_size) $sizes[] = "Размер острова: " . $island_size;
$sizes_str = !empty($sizes) ? implode('<br>', $sizes) : 'Не указано';

$answer4_kitchen = isset($_POST['form-question-4-kitchen']) ? $_POST['form-question-4-kitchen'] : 'Не указано';
$answer5_kitchen = isset($_POST['form-question-5-kitchen']) ? $_POST['form-question-5-kitchen'] : 'Не указано';
$answer6_kitchen = isset($_POST['form-question-6-kitchen']) ? $_POST['form-question-6-kitchen'] : 'Не указано';

// Заголовки письма
$headers = "From: info@мозаика62.рф\r\n";
$headers .= "Reply-To: info@мозаика62.рф\r\n";
$headers .= "Return-Path: info@мозаика62.рф\r\n";
$headers .= "CC: info@мозаика62.рф\r\n";
$headers .= "BCC: info@мозаика62.рф\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

// Формируем тело письма
$email_body = "
    <h3>Новая заявка с Квиза (Кухня) с сайта мозаика62.рф</h3>
    <p><strong>Имя:</strong> " . $name . "</p>
    <p><strong>Телефон:</strong> " . $phone . "</p>
    <p><strong>Способы связи:</strong> " . $contact_methods_str . "</p>
    <h4>Параметры кухни:</h4>
    <p><strong>Планировка:</strong> " . $answer1_kitchen . "</p>
    <p><strong>Дополнительные особенности:</strong> " . $features_str . "</p>
    <p><strong>Размеры:</strong><br>" . $sizes_str . "</p>
    <p><strong>Стиль:</strong> " . $answer4_kitchen . "</p>
    <p><strong>Материал фасада:</strong> " . $answer5_kitchen . "</p>
    <p><strong>Специальное предложение:</strong> " . $answer6_kitchen . "</p>
";

/* Проверяем что заполнено поле с телефоном */
if ($_POST && $phone) {
    // Отправляем письмо
    mail(
        "sidorov-vv3@mail.ru",
        "Заявка с Квиза (Кухня) с сайта мозаика62.рф",
        $email_body,
        $headers
    );
    
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «мозаика62». Мы ответим Вам в&#160;ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    // Если поле с телефоном НЕ заполнено
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>