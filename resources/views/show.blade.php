<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feed-back-Question</title>
    <link href="{{ asset('css/subject.css') }}" rel="stylesheet">
</head>
 


<body>
    
 <table>
 <div>
        <a class="admin-btn" href="/admin/dashboard">admin login</a>
</div>
    <thead class="heading">
        <tr>
            <td>S.NO</td>
            <td>Subjects</td>
            <td>Subject Code</td>
            <td>Submit</td>
        </tr>
    </thead>
    <tbody class="count-row">
        @foreach($subjects as $subject)
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{$subject->subjects}}  </td>
            <td>{{$subject->subjectcode}}</td>
            <td><a class="submit-btn" href='/subjects?subject={{$subject->subjects}}&subjectcode={{$subject->subjectcode}}&registernumber={{$registernumber}}'>Submit</a></td>
        <tr>
        @endforeach
    </tbody>
</table>











</body>
</html>