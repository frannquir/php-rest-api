<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Initialize API
include_once('../core/initialize.php');

// Instantiate Post
$post = new Post($db);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

// Set ID to update
$post->id = $data->id;

// Make sure data is not empty
if(!empty($data->id) && 
   !empty($data->title) && 
   !empty($data->body) && 
   !empty($data->author) && 
   !empty($data->category_id)) {
    
    $post->title = $data->title;
    $post->body = $data->body;
    $post->author = $data->author;
    $post->category_id = $data->category_id;

    // Update post
    if($post->update()) {
        echo json_encode(
            array('message' => 'Post Updated')
        );
    } else {
        echo json_encode(
            array('message' => 'Post Not Updated')
        );
    }
} else {
    echo json_encode(
        array('message' => 'Missing Required Parameters')
    );
}
?>