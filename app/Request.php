<?php

namespace app;

class Request 
{
    public static function validate($name, $phone, $email, $comment, $check)
    {

        if (mb_strlen($name) < 2) {
            return 'Имя обязательно для заполнения';
        }

        if (!preg_match("/^[0-9]{10,11}+$/", $phone)) {
            return 'Телефон указан в неверном формате';
        }

        if (mb_strlen($email) < 3 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Неккоректно заполнен Email';
        }

        if (mb_strlen($comment) < 5) {
            return 'Укажите комментарий обращения (не менее 5 символов)';
        }

        if ($check == 'false') {
            return 'Согласитесь с условиями обработки персональных данных';
        }

        return false;
    }
}