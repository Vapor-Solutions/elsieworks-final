<!DOCTYPE html>
<html>

<head>
    <title>ElsieWorks.com</title>

</head>

<body>
    <div class="container">
        <div class="text-center">
            <img src="/ew-secondary.png" width="150" alt="">
        </div>
        <div class="my-5">
            <h1 class="text-center">
                New Contact Needs Assistance
            </h1>
            <p>
                There is a new contact that needs assistance. Go check your admin panel to find out more.
            </p>

            <p>
                Name: <strong>{{ $details->name }}</strong>
            </p>
            <p>
                Email: <strong>{{ $details->email }}</strong>
            </p>
            <p>
                Phone Number: <strong>{{ $details->subject }}</strong>
            </p>
            <p>
                Subject: <strong>{{ $details->subject }}</strong>
            </p>
            <p>
                Message: <strong>{{ $details->message }}</strong>
            </p>

            <p>Thank you!</p>
            <small>From <strong>system@elsieworks.com</strong></small>
        </div>
    </div>
</body>

</html>
