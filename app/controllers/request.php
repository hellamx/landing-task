<?php 

$name = htmlspecialchars(trim($_POST['name']));
$phone = htmlspecialchars(trim($_POST['phone']));
$email = htmlspecialchars(trim($_POST['email']));
$comment = htmlspecialchars(trim($_POST['comment']));
$check = htmlspecialchars(trim($_POST['check']));

$dataVerify = \app\Request::validate($name, $phone, $email, $comment, $check);

$response = [
    'success' => true,
    'message' => ''
];

if (!$dataVerify) {

    $mail = \app\Mail::sendMail($email, 
                                $smtp['smtp_login'], 
                                $smtp['smtp_password'],
                                $smtp['smtp_host'], 
                                'MAYBESMART', 'Ваше обращение зарегистрировано');
    
    if (!$mail) {
        $response['message'] = 'Ошибка при отправке письма';
        $response['success'] = false;
    }

} else {
    $response['success'] = false;
    $response['message'] =  $dataVerify;
}

echo json_encode($response);