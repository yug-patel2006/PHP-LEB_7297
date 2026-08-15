<!DOCTYPE html>
<html>
<head><title>5.3 Retrieve Header Information</title></head>
<body>
<h3>5.3 Retrieve all header information of a resource</h3>
<button onclick="getHeaders()">Get Headers of data.txt</button>
<pre id="output" style="margin-top:15px; border:1px solid #ccc; padding:10px;"></pre>

<script>
function getHeaders() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "data.txt", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            document.getElementById("output").textContent = xhr.getAllResponseHeaders();
        }
    };
    xhr.send();
}
</script>

<h4>Server-side header info (PHP)</h4>
<?php
echo "<pre>";
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
echo "</pre>";
?>
</body>
</html>
