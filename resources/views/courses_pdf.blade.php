<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Print Course Report</title>
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
        <h5>Courses Data Report</h5>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Course Picture</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($courses as $c)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $c->nama_course }}</td>
                <td>{{ $c->long_desc }}</td>
                <td>{{ $c->harga }}</td>
                <td><img width="150" src="{{'storage/'.$c->course_pic}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>