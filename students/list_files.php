<?php
$directory = 'C:\wamp64\www\Nodejs_Assignment3';

if (is_dir($directory)) {
    $files = scandir($directory);
    
    $files = array_diff($files, array('.', '..'));

    echo "<h2>Files in the directory:</h2>";
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li>" . htmlspecialchars($file) . "</li>"; 
    }
    echo "</ul>";
} else {
    echo "<h2>Directory does not exist.</h2>";
}
?>