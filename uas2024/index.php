<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Travel Planner</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Add new task..." required>
            <input type="text" name="location" placeholder="Location...">
            <button type="submit">Add</button>
        </form>
        <ul class="task-list">
            <?php include 'get_tasks.php'; ?>
        </ul>
    </div>
</body>
</html>



















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL SHORTENER</title>
    <link rel="stylesheet" href= style.css>
</head>
<body>
    <div class="wrapper">
        <form action="#">
        <i class ="url-icon uil uil-link">
            <input type="text" placeholder="Enter or paste a long url" required>
            <button>Shorten</button>
        </i>
    </form>
    <div class="count">
        <span>Total Links: <span>10</span> & Total Clicks: <span>140</span>
    </div>
    <div class="urls-area">
        <li>Shorten URL</li>
        <li>Original URL</li>
        <li>Clicks</li>
        <li>Action</li>
    </div>
    <div class="data">
        <li><a href="#">example.com/xyz234</a>/</li>
        <li>https://www.codingnepalweb.com/p/about-us.html</li>
        <li>16</li>
        <li><a href="#">Delete</a></li>
    </div>
    </div>
</div>

<div class="blur-effect">
    <div class="popup-box">
        <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved it.
            <form action="#">
                <label>Edit your shorten URL</label>
                <input type="text" spellcheck="false" value="example.com/xyz234">
                <i class ="copy-icon uil uil-copy-alt"></i>
                <button>Save</button>
            </form>
        </div>
    </div>

</div>
    

</body>
</html> -->
