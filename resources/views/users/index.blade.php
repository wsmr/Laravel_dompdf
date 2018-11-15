<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron text-center">
        <h3>Generate PDF and Download or Stream(view online) in Laravel 5</h3>
    </div>
    <div class="container">
        <div class="row pull-right">
            <a href="{{ route('view-pdf') }}" type="button" class="btn btn-info">View PDF</a>
            <a href="{{ route('download-pdf') }}" type="button" class="btn btn-success">Download PDF</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
