<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Tracing</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        
    </head>
    <body>

    <h1 style="text-align: center; margin-top: 15px;">We Detect</h1>
    <h5 style="text-align: center;">Contact Tracing</h5>

    <h5 style="margin: 15px;">Admin</h5>

        <table id="table_list" class="display">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>QR ID</th>
                    <th>Complete Name</th>
                    <th>Email Address</th>
                    <th>Home Address</th>
                    <th>Phone Number</th>
                    <th>Body Temp</th>
                    <th>Age</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($user_info as $user_data)
                @foreach ($user_qr as $user_code)
                <tr>
                    <td>{{ $user_code->id }}</td>
                    <td>{{ $user_code->qr }}</td>
                    <td>{{ $user_data->name }}</td>
                    <td>{{ $user_data->email }}</td>
                    <td>{{ $user_data->address }}</td>
                    <td>{{ $user_data->phone_number }}</td>
                    <td>{{ $user_data->body_temp }}</td>
                    <td>{{ $user_data->age }}</td>
                    <td>{{ $user_code->created_at }}</td>
                    <td>{{ $user_code->updated_at }}</td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
    jQuery(document).ready(function(){
        jQuery('#table_list').DataTable();
    });
    </script>
</html>

