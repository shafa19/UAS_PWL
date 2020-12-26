<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Print Service Report</title>
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
        <h5>Services Data Report</h5>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Service Name</th>
                <th>Detail</th>
                <th>Service Picture</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($services as $s)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $s->nama_service }}</td>
                <td>{{ $s->keterangan }}</td>
                <td><img width="100" src="{{'storage/'.$s->service_pic}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>