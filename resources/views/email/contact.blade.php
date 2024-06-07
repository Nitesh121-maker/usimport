<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
</head>
<body>
    <div class="container">
        <h2>Contact Information</h2>
        {{-- <p><strong>IP:</strong> {{$formData['user_ip']}}</p> --}}
        <p><strong>Name:</strong> {{ $formData['name'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        <p><strong>Number:</strong> {{ $formData['number'] }}</p>
        <p><strong>Company:</strong> {{ $formData['company'] }}</p>
        <p><strong>Role:</strong> {{ $formData['role'] }}</p>
        <p><strong>Message:</strong> {{ $formData['message'] }}</p>
    </div>
</body>
</html>
