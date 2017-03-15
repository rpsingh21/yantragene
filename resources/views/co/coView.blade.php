<!DOCTYPE html>
<html>
<head>
    <title>cohtml</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
    <style type="text/css" class="init">

    </style>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js">
    </script>
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#example').DataTable( {
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [ {
                    className: 'control',
                    orderable: false,
                    targets:   0
                } ],
                order: [ 1, 'asc' ]
            } );
        } );

    </script>

</head>
<body>
<div class="container">
    <div class="row">
        <br><br>
        <div class="col-md-4">

            <!-- div for profle image -->
            <div class="row text-center">
                <img border="0" src="{{url('public/images/csi.png')}}">
            </div>
            <br>
        </div>
        <!--div for profie detail-->
        <div class="col-md-8 text-center ">
            <br>
            <div class="row">
                <div class="col-md-4 header"> co-Name </div>
                <div class="col-md-8">Rohit Prakash Singh</div>
            </div><br>
            <div class="row">
                <div class="col-md-4 header">Email </div>
                <div class="col-md-8">Rohit Prakash Singh</div>
            </div><br>
            <div class="row">
                <div class="col-md-4 header">Phone </div>
                <div class="col-md-8">Rohit Prakash Singh</div>
            </div><br>
            <div class="row">
                <div class="col-md-4 header">Co-event</div>
                <div class="col-md-8">Rohit Prakash Singh</div>
            </div><br>
        </div>
    </div>
    @yield('table');
</div>
</body>
</html>