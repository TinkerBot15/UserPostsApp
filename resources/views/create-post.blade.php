<!DOCTYPE html>
<html>
<head>
    <title>Create New Post</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Create New Post</h1>
        <form method="post" action="/store-post">
            @csrf <!-- CSRF Token -->

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" name="body" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="userId">User ID:</label>
                <input type="number" class="form-control" name="userId" required>
            </div>

           <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
        <a href="/user-posts" class="btn btn-secondary mt-3">Back to User Posts</a>
    </div>
</body>
</html>
