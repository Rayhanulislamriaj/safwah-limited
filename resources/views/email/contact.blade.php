<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Form</title>
</head>

<body>
    <div class="ontainer">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h6>Hi Admin,</h6>

                        <p><b>Name : </b>{{ $user->name }}</p>
                        <p><b>Email : </b>{{ $user->email }}</p>
                        <p><b>Subject : </b>{{ $user->subject }}</p>
                        <p><b>Message : </b>{{ $user->message }}</p>

                        Thank you, <br>
                        {{ config('app.name') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
