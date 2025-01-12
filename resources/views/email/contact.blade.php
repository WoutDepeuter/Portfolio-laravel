<!-- resources/views/emails/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
<h1>Contact Form Submission</h1>
<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Subject:</strong> {{ $subject }}</p>
<p><strong>Contents:</strong></p>
<p>{{ $contents }}</p>
</body>
</html>
