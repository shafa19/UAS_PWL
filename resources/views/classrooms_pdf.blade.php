<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Print Classroom Report</title>
</head>
<body>
    <style type="text/css">
        table {
        	border-collapse: collapse;
            width: 100%;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        th, td {
            text-align: left;
            padding: 16px;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        tr:nth-child(even) {
	        background-color: #f2f2f2
        }
    </style>

    <center>
        <h5>Classrooms Data Report</h5>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Classroom Name</th>
                <th>Capacity</th>
                <th>Classroom Picture</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($classrooms as $cl)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $cl->nama_ruang }}</td>
                <td>{{ $cl->kapasitas }}</td>
                <td><img width="100" src="{{'storage/'.$cl->ruang_pic}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>