<table >
            <thead class="heading">
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Register number</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>Subject</th>
                    <th>Punctuality</th>
                    <th>Availability</th>
                    <th>Discipline</th>
                    <th>Explanation</th>
                    <th>Subjectknowledge</th>
                    <th>Methodofteaching</th>
                    <th>CompletionofSyllabus</th>
                    <th>Practice</th>
                    <th>Tests</th>
                    <th>Professionalism</th>
                    <th>Motivation</th>
                    <th>Overallfeedback</th>
  
                </tr>
            </thead>
            <tbody class="count-row">
            @foreach($feedback as $f)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$f->name}}</td>
                    <td>{{$f->email}}</td>
                    <td>{{$f->registernumber}}</td>
                    <td>{{$f->department}}</td>
                    <td>{{$f->semester}}</td>
                    <td>{{$f->subject}}</td>
                    <td>{{$f->punctuality}}</td>
                    <td>{{$f->availability}}</td>
                    <td>{{$f->discipline}}</td>
                    <td>{{$f->explanation}}</td>
                    <td>{{$f->subjectknowledge}}</td>
                    <td>{{$f->methodofteaching}}</td>
                    <td>{{$f->completionofsyllabus}}</td>
                    <td>{{$f->practice}}</td>
                    <td>{{$f->tests}}</td>
                    <td>{{$f->professionalism}}</td>
                    <td>{{$f->motivation}}</td>
                    <td>{{$f->overallfeedback}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>