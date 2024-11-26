<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['error' => 'File upload error.']);
        exit;
    }

    // Check file size (max 2MB)
    if ($file['size'] > 2 * 1024 * 1024) {
        echo json_encode(['error' => 'File size exceeds the 2MB limit.']);
        exit;
    }

    // Check file type
    $fileType = mime_content_type($file['tmp_name']);
    if ($fileType !== 'text/plain') {
        echo json_encode(['error' => 'Invalid file type. Only plain text files are allowed.']);
        exit;
    }

    $numbers = file($file['tmp_name'], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $apiUrl = "https://phonevalidation.abstractapi.com/v1/";
    $apiKey = "YOUR_FREE_API_KEY";

    $results = [];
    foreach ($numbers as $number) {
        $url = "{$apiUrl}?api_key={$apiKey}&phone={$number}";
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        $results[] = [
            'number' => $number,
            'valid' => $data['valid'] ?? false,
            'carrier' => $data['carrier'] ?? 'Unknown',
        ];
    }

    echo json_encode($results);
    exit;
}

echo json_encode(['error' => 'Invalid request.']);
?>
