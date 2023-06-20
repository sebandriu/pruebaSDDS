<?php
require_once('db-connect.php');
$action = isset($_GET['action']) ? $_GET['action'] : ''; 

/**
 * Fetch All Members
 */

function get_data(){
    global $conn;
    $sql = "SELECT * FROM `members` order by `id` asc";

    $qry = $conn->query($sql);
    $data = [];
    if($qry->num_rows > 0){
        while($row = $qry->fetch_assoc()){
            $data[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'contact' => $row['contact'],
                'comentario' => $row['comentario'],
                'action' => $row['id']
            ];
        }
    }
    $conn->close();
    return json_encode($data);
}

/**
 * Insert/Update Member
 */

function save_member(){
    global $conn;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $name = addslashes($conn->real_escape_string($_POST['name']));
        $comentario = addslashes($conn->real_escape_string($_POST['comentario']));
        $contact = addslashes($conn->real_escape_string($_POST['contact']));
        if(empty($id) || !is_numeric($id)){
            $sql = "INSERT INTO `members` (`name`, `contact`, `comentario`)
                VALUES ('{$name}', '{$contact}', '{$comentario}')";
        }else{
            $sql = "UPDATE `members` set `name` = '{$name}', `contact` = '{$contact}', `comentario` = '{$comentario}' where `id` = '{$id}' ";
        }
        $save = $conn->query($sql);
        if($save){
            $resp['status'] ='success';
        }else{
            $resp['status'] ='failed';
            $resp['error'] =$conn->error;
        }
    }else{
        $resp['status'] = 'failed';
        $resp['error'] = "Request must be using POST Method.";
    }
    $conn->close();
    return json_encode($resp);
}

/**
 * Fetch Single Member Data
 */
function get_single(){
    global $conn;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $sql = "SELECT * FROM `members` where id = '{$id}'";
        $get = $conn->query($sql);
        if($get->num_rows > 0){
            $resp['status'] = 'success';
            $resp['data'] = $get->fetch_assoc();
        }else{
            $resp['status'] = 'failed';
            $resp['error'] = "Member ID does not exists.";
        }
    }else{
        $resp['status'] = 'failed';
        $resp['error'] = "Request must be using POST Method.";
    }
    $conn->close();
    return json_encode($resp);
}

/**
 * Delete Member Data
 */
function delete_member(){
    global $conn;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $sql = "DELETE FROM `members` where id = '{$id}'";
        $delete = $conn->query($sql);
        if($delete){
            $resp['status'] = 'success';
        }else{
            $resp['status'] = 'failed';
            $resp['error'] = $conn->error;
        }
    }else{
        $resp['status'] = 'failed';
        $resp['error'] = "Request must be using POST Method.";
    }
    $conn->close();
    return json_encode($resp);
}

if(!empty($action)){
    if(function_exists($action)){
       $exec = $action();
       echo $exec;
    }else{
        $resp['status'] = 'failed';
        $resp['error'] = 'Invalid Given Action';
        return $resp;
    }
}else{
    $resp['status'] = 'failed';
    $resp['error'] = 'Action must not be empty';
    return $resp;
}
?>