<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['phone'])) {
    $phone = $_GET['phone'];
    $apiUrl = "https://phonevalidation.abstractapi.com/v1/";
    $apiKey = "YOUR_FREE_API_KEY"; // Replace with your Abstract API key

    $url = "{$apiUrl}?api_key={$apiKey}&phone={$phone}";
    $response = file_get_contents($url);
    echo $response;
    exit;
}

echo json_encode(['error' => 'Invalid request.']);
?>
