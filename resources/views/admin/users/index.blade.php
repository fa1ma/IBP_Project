<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="dashbaord_hotel/assets/img/favicon.png">
    <link rel="stylesheet" href="dashbaord_hotel/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashbaord_hotel/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dashbaord_hotel/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="dashbaord_hotel/assets/css/feathericon.min.css">
    <link rel="stylesheet" href="dashbaord_hotel/assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="dashbaord_hotel/assets/css/style.css">
</head>
<body>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                </tr>
                                </thead>
                                @foreach($users as $user)
                                    <tbody>
                                    <tr>
                                        <td>{{$user['id']}}</td>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td><a href="{{ url('/admin/users/edit',['id' => $user->id])}}">Edit</a></td>
                                        <td><a href="{{ url('/admin/users/delete',['id' => $user->id])}}">Delete</a></td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
