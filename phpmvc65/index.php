<?php
require_once 'Config/database.php';
require_once 'App/Controllers/UserController.php';

$dbConnection = getDBConnection();
$controller = new UserController($dbConnection);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

switch ($action) {
    case 'show':
        $controller->show($id);
        break;
    case 'create':
        require_once 'App/Views/createUserView.php';
        break;
    case 'store':
        $controller->store();
        break;
        case 'delete':
            $controller->delete($id);
            break;
            case 'edit':
                $controller->edit($id);
                break;
            case 'update':
                $controller->update($id);
                break;
    default:
        $controller->index();
        break;
}
