<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
} else {
    http_response_code(404);
    echo json_encode(['error' => "No es tipo POSST"]);
}
