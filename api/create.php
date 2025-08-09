<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Initialize API
include_once('../core/initialize.php');

// Instantiate Post
$post = new Post($db);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

// Make sure data is not empty
if(!empty($data->title) && 
   !empty($data->body) && 
   !empty($data->author) && 
   !empty($data->category_id)) {
    
    $post->title = $data->title;
    $post->body = $data->body;
    $post->author = $data->author;
    $post->category_id = $data->category_id;

    // Create post
    if($post->create()) {
        echo json_encode(
            array('message' => 'Post Created')
        );
    } else {
        echo json_encode(
            array('message' => 'Post Not Created')
        );
    }
} else {
    echo json_encode(
        array('message' => 'Missing Required Parameters')
    );
}
?>