<?php 

$email = htmlspecialchars(trim($_POST['email']));

$emailVerify = \app\Subscribe::validate($email);

$response = [
    'success' => true,
    'message' => ''
];

if (!$emailVerify) {

    $mail = \app\Mail::sendMail($email, 
                                $smtp['smtp_login'], 
                                $smtp['smtp_password'],
                                $smtp['smtp_host'], 
                                'MAYBESMART', 'Вы успешно подписались на рассылку');
    
    if (!$mail) {
        $response['message'] = 'Ошибка при отправке письма';
        $response['success'] = false;
    }

} else {
    $response['success'] = false;
    $response['message'] =  $emailVerify;
}

echo json_encode($response);