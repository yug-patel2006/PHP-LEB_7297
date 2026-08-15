<?php
// Server-side search suggestions endpoint (used by 5.9)
$items = ["PHP", "MySQL", "JavaScript", "jQuery", "AJAX", "HTML", "CSS", "Python", "Java", "Laravel", "React", "Node.js"];

$query = isset($_GET['term']) ? strtolower(trim($_GET['term'])) : "";
$matches = [];

if ($query !== "") {
    foreach ($items as $item) {
        if (strpos(strtolower($item), $query) !== false) {
            $matches[] = $item;
        }
    }
}

header("Content-Type: application/json");
echo json_encode($matches);
?>
