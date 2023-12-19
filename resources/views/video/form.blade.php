<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Processing Form</title>
</head>
<body>
    <form action="{{ route('video.process') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="input_video">Choose a video file:</label>
        <input type="file" name="input_video" accept="video/*" required>
        <button type="submit">Process Video</button>
    </form>
</body>
</html>