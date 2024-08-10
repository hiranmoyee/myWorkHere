<!DOCTYPE html>
<html>
<head>
    <title>Test Flash Message</title>
</head>
<body>
    @if(session('success'))
        <script>
            window.addEventListener('load', function() {
                alert('{{ session('success') }}');
            });
        </script>
    @endif
</body>
</html>
