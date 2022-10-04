<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moshiur's Assignment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div>
                <section class="content">
                    <div class="pull-right" style="padding-bottom: 10px;">
                        Mailing List Contacts
                    </div>
                    <div class="row">


                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Book</th>
                                            <th>Operating System</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(isset($users))
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->last_name}}</td>
                                                    <td>{{$user->first_name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone_number}}</td>
                                                    <td>{{$user->book_name}}</td>
                                                    <td>{{$user->os}}</td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
        </div>
    </body>
</html>
