<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold text-center mb-5">Phone Number Validator</h1>

        <!-- Single Number Validation -->
        <div class="bg-white p-5 shadow rounded mb-5">
            <h2 class="text-lg font-semibold mb-3">Validate a Single Number</h2>
            <div class="flex items-center space-x-3">
                <input id="single-number" type="text" placeholder="Enter phone number" class="border rounded p-2 flex-grow">
                <button id="validate-btn" class="bg-blue-500 text-white px-4 py-2 rounded">Validate</button>
            </div>
            <div id="result" class="mt-3"></div>
        </div>

        <!-- Bulk Validation -->
        <div class="bg-white p-5 shadow rounded mb-5">
            <h2 class="text-lg font-semibold mb-3">Validate Multiple Numbers</h2>
            <form id="bulk-form">
                <input id="file-upload" type="file" accept=".txt" class="mb-3">
                <button id="process-file-btn" type="button" class="bg-green-500 text-white px-4 py-2 rounded">Upload & Validate</button>
            </form>
        </div>

        <!-- Validation History -->
        <div class="bg-white p-5 shadow rounded">
            <h2 class="text-lg font-semibold mb-3">Validation History</h2>
            <div id="history-container"></div>
            <div id="pagination" class="flex justify-center space-x-2 mt-4">
                <button id="prev-page" class="px-4 py-2 bg-gray-200 rounded disabled:opacity-50" disabled>Previous</button>
                <button id="next-page" class="px-4 py-2 bg-gray-200 rounded disabled:opacity-50" disabled>Next</button>
            </div>
        </div>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>

<!-- //💡In the Beginning, 🜲 PaPaGuy wrote beautiful Codes < /> 💜❤️ // -->
