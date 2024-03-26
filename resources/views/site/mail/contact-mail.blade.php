<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $emailData['subject'] }}</title>
    <!-- Latest Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 p-5 border rounded shadow bg-light">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary mb-4">New Message from {{ $emailData['name'] }}</h1>
                <p>Hello Ghayas Khan,</p>
                <p>You have received a new message from <strong>{{ $emailData['name'] }}</strong>
                    ({{ $emailData['email'] }}).</p>
                <p>Phone: {{ $emailData['phone'] }}</p>
                <h2 class="text-secondary mt-4 mb-2">Subject: {{ $emailData['subject'] }}</h2>
                <p>Message:</p>
                <p class="border-left pl-3">{{ $emailData['message'] }}</p>
                <p class="mt-5">Kind Regards,</p>
                <p>Team Brush Skill India</p>
            </div>
        </div>
    </div>
</body>

</html>
