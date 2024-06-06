<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 10%;
        }

        .code {
            font-size: 48px;
            color: #dd4b39;
            margin-bottom: 10px;
        }

        .error-code {
            font-size: 120px;
            color: #dd4b39;
            margin-bottom: 10px;
        }

        .error-message {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
        }

        .back-link {
            padding: 8px 12px;
            background-color: #dd4b39;
            border-radius: 10px;
            font-size: 18px;
            color: whitesmoke;
            text-decoration: none;
        }

        .back-link:hover {
            background-color: #333;
            color: #dd4b39;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="code">- 404 -</div>
        <div class="error-code">Waduh!</div>
        <div class="error-message">Jauh amat ampe sini</div>
        <a href="<?= base_url(); ?>" class="back-link">Pulang!</a>
    </div>
</body>

</html>
