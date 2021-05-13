<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Tracing</title>

        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Sora' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script> src="http(s)://api.qrserver.com/v1/create-qr-code/?data=[URL-encoded-text]&size=[pixels]x[pixels]"></script>
    </head>
    <body>
            <div class="text-center mt-5 mb-5">
                <div class="container">
                    <div class="">
                        <h1 class="font" style="font-size: 35px;">WE DETECT</h1>
                        <h4 class="font" style="font-size: 14px;">contact tracing</h4>
                    </div>        
                    <h5 class="font">Admin</h5>
                </div>
            </div>
       
        <div class="container table border border-primary rounded shadow-lg">
            <table id="table_details" class="table poppins">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone No.</th>
                        <th>Body Temperature</th>
                        <th>Age</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="table-primary">
                        <td>{{ $user_info->name }}</td>
                        <td>{{ $user_info->email }}</td>
                        <td>{{ $user_info->address }}</td>
                        <td>{{ $user_info->phone_number }}</td>
                        <td>{{ $user_info->body_temp }}</td>
                        <td>{{ $user_info->age }}</td>
                        <td>
                            <a href="/admin-table-list">
                            <button class="btn btn-primary" type="submit"> GO BACK </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
    jQuery(document).ready(function(){
        jQuery('#table_details').DataTable();
    });
    </script>
</html>
