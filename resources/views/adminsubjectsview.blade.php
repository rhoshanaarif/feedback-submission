<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Report</title>
    <link href="{{ asset('css/subject.css') }}" rel="stylesheet">
</head>
 


<body class="sub-section">
<div>
    <table>
        <thead>
            <tr>
                <td>
                    S.no
                </td>
                <td>Subject Code</td>
                <td>Subject</td>
                <td>Generate Report</td>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$subject->subjectcode}}</td>
                <td>{{$subject->subjects}}</td>
                <td><a class = "submit-btn" href="/admin/report/{{$subject->subjectcode}}">Generate Report</a></td>
                
            </tr>
            @endforeach
            

        </tbody>
    </table>
   







</body>
</html>