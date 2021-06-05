<?php
    function statusOutput($status) {
        switch ($status) {
                case 'user_deleted':
                    $_SESSION['message'] = [
                        'text'   => 'Акаунт пользователя удален',
                        'status' => 'success'
                    ];
                break;
                case 'password_change':
                    $_SESSION['message'] = [
                        'text'   => 'Пароль успешно сменен',
                        'status' => 'success'
                    ];
                break;
                case 'unacceptable_symbols':
                    $_SESSION['message'] = [
                        'text'   => 'Логин содержит недопустимые символы',
                        'status' => 'error'
                    ];
                break;
                case 'users_exist':
                    $_SESSION['message'] = [
                        'text'   => 'Пользователь с таким логином уже существует',
                        'status' => 'error'
                    ];
                break;
                case 'passwords_do_not_match':
                    $_SESSION['message'] = [
                        'text'   => 'Пароль веден не верно',
                        'status' => 'error'
                    ];
                break;
                case 'Login_not_available':
                    $_SESSION['message'] = [
                        'text'   => 'Пользователь с таким логином уже существует',
                        'status' => 'error'
                    ];
                break;
                case 'Profile_changed':
                    $_SESSION['message'] = [
                        'text'   => 'Изменение профиля сохранены',
                        'status' => 'success'
                    ];
                break;
                case 'authorization_off':
                    $_SESSION['message'] = [
                        'text'   => 'Авторизация прекращена',
                        'status' => 'success'
                    ];
                break;
                case 'wrong_login_or_password':
                    $_SESSION['message'] = [
                        'text'   => 'Логин или пароль введен неверно',
                        'status' => 'error'
                    ];
                break;
                case 'signed_in':
                    $_SESSION['message'] = [
                        'text'   => 'Вход успешно выполнен',
                        'status' => 'success'
                    ];
                break;
            default:
                $_SESSION['message'] = [
                    'text'   => 'Непредвиденная ошибка',
                    'status' => 'error'
                ];
        }
    }