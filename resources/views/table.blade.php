<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="{{url('public/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <link href="{{url('public/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <link href="{{url('public/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

    <link href="{{url('public/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{url('public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
    <div id="" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables For All Registered User </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Team ID</th>
                                <th>Event Id</th>
                                <th>Team Name ID</th>
                                <th>More Info</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($tr as $td)
                                    <tr class="odd gradeX">
                                        <td>{{$td->teamId}}</td>
                                        <td>{{$td->eventId}}</td>
                                        <td>{{$td->teamName}}</td>
                                        <td><button class="btn btn-info" type="button" onclick="" >More Info</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{url('public/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{url('public/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- DataTables JavaScript -->
<script src="{{url('public/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('public/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{url('public/dist/js/sb-admin-2.js')}}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
