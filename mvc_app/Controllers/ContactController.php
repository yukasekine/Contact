<?php
require_once ROOT_PATH . 'Controllers/Controller.php';
require_once ROOT_PATH . 'Models/Contact.php';

class ContactController extends Controller
{
    public function index()
    {
        $post = $_SESSION['post'] ?? [];
        $errorMessages = $_SESSION['errorMessages'] ?? [];
        unset($_SESSION['errorMessages']);
        $csrf_token = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $csrf_token;
        $contact = new Contact();
        $inquiries = $contact->getAll();
        $this->view('contact/create', [
            'post' => $post,
            'inquiries' => $inquiries,
            'csrf_token' => $csrf_token,
            'errorMessages' => $errorMessages
        ]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
                die('CSRFトークンが無効です。');
            }

            $errorMessages = [];

            if (empty($_POST['name']) || mb_strlen($_POST['name']) > 10) {
                $errorMessages['name'] = '氏名は10文字以内で入力してください。';
            }

            if (empty($_POST['kana']) || mb_strlen($_POST['kana']) > 10) {
                $errorMessages['kana'] = 'フリガナは10文字以内で入力してください。';
            }

            if (!empty($_POST['tel']) && !preg_match('/^[0-9]*$/', $_POST['tel'])) {
                $errorMessages['tel'] = '電話番号は数字のみを入力してください。';
            }

            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errorMessages['email'] = '正しいメールアドレスを入力してください。';
            }

            if (empty($_POST['body'])) {
                $errorMessages['body'] = 'お問い合わせ内容を入力してください。';
            }

            if (!empty($errorMessages)) {
                $_SESSION['errorMessages'] = $errorMessages;
                $_SESSION['post'] = $_POST;
                header('Location: /contact/index');
                exit();
            } else {
                $_SESSION['post'] = $_POST;
                header('Location: /contact/confirm');
                exit();
            }
        }
    }

    public function confirm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_SESSION['post'])) {
                $this->view('contact/confirm', [
                    'post' => $_SESSION['post'],
                    'csrf_token' => $_SESSION['csrf_token']
                ]);
            } else {
                header('Location: /contact/index');
                exit();
            }
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header('Location: /contact/complete');
            exit();
        } else {
            header('Location: /contact/index');
            exit();
        }
    }

    public function complete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
            $contact = new Contact();
            $result = $contact->create(
                $_SESSION['post']['name'],
                $_SESSION['post']['kana'],
                $_SESSION['post']['tel'],
                $_SESSION['post']['email'],
                $_SESSION['post']['body']
            );

            if ($result) {
                unset($_SESSION['post']);
                unset($_SESSION['csrf_token']);
                $this->view('contact/complete');
            } else {
                $_SESSION['errorMessages'] = ['database' => 'お問い合わせの保存に失敗しました。'];
                header('Location: /contact/index');
                exit();
            }
        } else {
            header('Location: /contact/index');
            exit();
        }
    }

    public function edit($id)
    {
        $contact = new Contact();
        $inquiry = $contact->getById($id);
        $csrf_token = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $csrf_token;
        $this->view('contact/edit', [
            'inquiry' => $inquiry,
            'csrf_token' => $csrf_token
        ]);
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
                die('CSRFトークンが無効です。');
            }

            $errorMessages = [];

            if (empty($_POST['name']) || mb_strlen($_POST['name']) > 10) {
                $errorMessages['name'] = '氏名は10文字以内で入力してください。';
            }

            if (empty($_POST['kana']) || mb_strlen($_POST['kana']) > 10) {
                $errorMessages['kana'] = 'フリガナは10文字以内で入力してください。';
            }

            if (!empty($_POST['tel']) && !preg_match('/^[0-9]*$/', $_POST['tel'])) {
                $errorMessages['tel'] = '電話番号は数字のみを入力してください。';
            }

            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errorMessages['email'] = '正しいメールアドレスを入力してください。';
            }

            if (empty($_POST['body'])) {
                $errorMessages['body'] = 'お問い合わせ内容を入力してください。';
            }

            if (!empty($errorMessages)) {
                $_SESSION['errorMessages'] = $errorMessages;
                $_SESSION['post'] = $_POST;
                header('Location: /contact/edit/' . $id);
                exit();
            } else {
                $contact = new Contact();
                $result = $contact->update(
                    $id,
                    $_POST['name'],
                    $_POST['kana'],
                    $_POST['tel'],
                    $_POST['email'],
                    $_POST['body']
                );

                if ($result) {
                    header('Location: /contact/index');
                    exit();
                } else {
                    $errorMessages['database'] = '更新に失敗しました。';
                    $_SESSION['errorMessages'] = $errorMessages;
                    $_SESSION['post'] = $_POST;
                    header('Location: /contact/edit/' . $id);
                }
            }
        } else {
            $contact = new Contact();
            $inquiry = $contact->getById($id);
            $csrf_token = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32));
            $_SESSION['csrf_token'] = $csrf_token;
            $this->view('contact/edit', [
                'inquiry' => $inquiry,
                'csrf_token' => $csrf_token
            ]);
        }
    }

    public function deleteConfirm($id)
    {
        $contact = new Contact();
        $inquiry = $contact->getById($id);
        $this->view('contact/delete', [
            'inquiry' => $inquiry,
            'csrf_token' => $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32))
        ]);
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact = new Contact();
            $contact->delete($id);
            header('Location: /contact/index');
            exit();
        } else {
            header('Location: /contact/index');
            exit();
        }
    }
}
