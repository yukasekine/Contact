<?php
function route($path, $httpMethod)
{
    try {
        list($controller, $method, $id) = explode('/', $path . '//');
        $case = [$method, $httpMethod];
        switch ($controller) {
            case 'home':
                $controllerName = 'HomeController';
                switch ($case) {
                    case ['index', 'get']:
                        $methodName = 'index';
                        break;
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
                break;

            case 'user':
                $controllerName = 'UserController';
                switch ($case) {
                    case ['log-in', 'get']:
                        $methodName = 'logIn';
                        break;
                    case ['sign-up', 'get']:
                        $methodName = 'signUp';
                        break;
                    case ['create', 'post']:
                        $methodName = 'create';
                        break;
                    case ['log-out', 'get']:
                        $methodName = 'logOut';
                        break;
                    case ['certification', 'post']:
                        $methodName = 'certification';
                        break;
                    case ['my-page', 'get']:
                        $methodName = 'myPage';
                        break;
                    case ['edit', 'get']:
                        $methodName = 'edit';
                        break;
                    case ['update', 'post']:
                        $methodName = 'update';
                        break;
                    case ['delete', 'get']:
                        $methodName = 'delete';
                        break;
                }
                break;

            case 'contact':
                $controllerName = 'ContactController';
                switch ($case) {
                    case ['index', 'get']:
                        $methodName = 'index';
                        break;
                    case ['create', 'post']:
                        $methodName = 'create';
                        break;
                    case ['confirm', 'post']:
                        $methodName = 'confirm';
                        break;
                    case ['complete', 'post']:
                        $methodName = 'complete';
                        break;
                    case ['edit', 'get']:
                        $methodName = 'edit';
                        break;
                    case ['update', 'post']:
                        $methodName = 'update';
                        break;
                    case ['delete', 'get']:
                        $methodName = 'deleteConfirm';
                        break;
                    case ['delete', 'post']:
                        $methodName = 'delete';
                        break;
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
                break;
            default:
                $controllerName = '';
                $methodName = '';
        }

        if ($controllerName && $methodName) {
            require_once(ROOT_PATH . "Controllers/{$controllerName}.php");

            $obj = new $controllerName();
            if (!empty($id)) {
                $obj->$methodName($id);
            } else {
                $obj->$methodName();
            }
        } else {
            throw new Exception('Route not found');
        }
    } catch (Throwable $e) {
        error_log($e->getMessage());
        header("HTTP/1.0 404 Not Found");
    }
}
