<?php
header("Content-Type: application/json");
$servername = "localhost";
$username = "root";
$password = "1218";
$dbname = "android_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(array("status" => "error", "message" => "Connection failed: " . $conn->connect_error)));
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        if ($_GET['action'] == 'register') {
            registerUser($conn);
        } else if ($_GET['action'] == 'login') {
            loginUser($conn);
        }
        break;
    case 'GET':
        getUsers($conn);
        break;
    case 'PUT':
        updateUser($conn);
        break;
    case 'DELETE':
        deleteUser($conn);
        break;
    default:
        echo json_encode(array("status" => "error", "message" => "Invalid request method"));
        break;
}

function registerUser($conn) {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("status" => "success", "message" => "User registered successfully"));
    } else {
        echo json_encode(array("status" => "error", "message" => "Error: " . $conn->error));
    }
}

function loginUser($conn) {
    $data = json_decode(file_get_contents("php://input"), true);
    $email = $data['email'];
    $password = $data['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            echo json_encode(array("status" => "success", "message" => "Login successful"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Invalid password"));
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "User not found"));
    }
}

function getUsers($conn) {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode($users);
}

function updateUser($conn) {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("status" => "success", "message" => "User updated successfully"));
    } else {
        echo json_encode(array("status" => "error", "message" => "Error: " . $conn->error));
    }
}

function deleteUser($conn) {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("status" => "success", "message" => "User deleted successfully"));
    } else {
        echo json_encode(array("status" => "error", "message" => "Error: " . $conn->error));
    }
}

$conn->close();
?>
