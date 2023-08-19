<!DOCTYPE html>
<html>
<head>
    <title>User Posts</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>User Posts</h1>
        <a href="/create-post" class="btn btn-primary mt-3">Create New Post</a>
        <ul class="list-group">
            @foreach ($userPosts as $post)
                <li class="list-group-item">
                    <h5>{{ $post['title'] }}</h5>
                    <p>{{ $post['body'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
