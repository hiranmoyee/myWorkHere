<!-- resources/views/emails/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body>
    <h1>New Contact Message</h1>
    <p><strong>Name:</strong> {{ $data['name'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] ?? 'N/A' }}</p>
</body>
</html>
