<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feed-back-Question</title>
    <link href="{{ asset('css/question.css') }}" rel="stylesheet">
</head>
<?php
    // Retrieve the URL variables (using PHP).
    $subject = $_GET['subject'];
    $subjectcode = $_GET['subjectcode'];
    $registernumber = $_GET['registernumber'];
    
 
?>
<body>
	<form action="/feedback" method="#" class="form">
        <div class="title-div">
            <div class="">
                <h1>Faculty feed back form</h1>
                <select  name="registernumber" id="subject">
                        <option value="{{$registernumber}}">{{$registernumber}}</option>
        
                    </select>
                <p>subject : {{$subject}}</p>       
            </div>

            <div class="email-part">
                <div class="validate-account">
                    <span class="mail-id">20cs001@acetcbe.edu.in</span>
                    <a href="https://accounts.google.com/AccountChooser?continue=https://docs.google.com/forms/d/e/1FAIpQLSd0miXZ8qrPnnnJDmtwyk-ZdrvKdjD0uPDq9lKeUG259WmqAw/viewform?edit_requested%3Dtrue&service=wise">Switch account</a>
                </div>
                <div class="draft">
                    <img src="" alt="#">
                    <span>Draft saved</span>
                </div>
            </div>
            <p>Your email will be recorded when you submit this form</p>
            <p class="required">*Required</p>
        </div>

        <div class="menus">
                    <label for="subject" name="choosen" class="satisfy-num">Subject</label>
                    <select  name="subject" id="subject">
                        <option value="{{$subject}}">{{$subject}}</option>
        
                    </select>
                </div>

                <div class="menus">
                    <label for="subjectcode" name="choosen" class="satisfy-num">Subjectcode</label>
                    <select  name="subjectcode" id="subjectcode">
                        <option value="{{$subjectcode}}">{{$subjectcode}}</option>
        
                    </select>
                </div>
    <div class="name-div">
			<div class="name">Punctuality<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="one" name="choosen" class="satisfy-num">1</label>
                    <input id="one" type="radio" name="answer" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="one" name="choosen" class="satisfy-num">2</label>
                    <input id="one" type="radio" name="answer" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="one" name="choosen" class="satisfy-num">3</label>
                    <input id="one" type="radio" name="answer" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="one" name="choosen" class="satisfy-num">4</label>
                    <input id="one" type="radio" name="answer" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="one" name="choosen" class="satisfy-num">5</label>
                    <input id="one" type="radio" name="answer" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
		<div class="name-div">
			<div class="name">Accessibility/Availability<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="two" name="choosen" class="satisfy-num">1</label>
                    <input id="two" type="radio" name="answer-1" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="two" name="choosen" class="satisfy-num">2</label>
                    <input id="two" type="radio" name="answer-1" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="two" name="choosen" class="satisfy-num">3</label>
                    <input id="two" type="radio" name="answer-1" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="two" name="choosen" class="satisfy-num">4</label>
                    <input id="two" type="radio" name="answer-1" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="two" name="choosen" class="satisfy-num">5</label>
                    <input id="two" type="radio" name="answer-1" value=5  placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Discipline/Behavior<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="three" name="choosen" class="satisfy-num">1</label>
                    <input id="three" type="radio" name="answer-2" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="three" name="choosen" class="satisfy-num">2</label>
                    <input id="three" type="radio" name="answer-2" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="three" name="choosen" class="satisfy-num">3</label>
                    <input id="three" type="radio" name="answer-2" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="three" name="choosen" class="satisfy-num">4</label>
                    <input id="three" type="radio" name="answer-2" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="three" name="choosen" class="satisfy-num">5</label>
                    <input id="three" type="radio" name="answer-2" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Power of explanation<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="four" name="choosen" class="satisfy-num">1</label>
                    <input id="four" type="radio" name="answer-3" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="four" name="choosen" class="satisfy-num">2</label>
                    <input id="four" type="radio" name="answer-3" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="four" name="choosen" class="satisfy-num">3</label>
                    <input id="four" type="radio" name="answer-3" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="four" name="choosen" class="satisfy-num">4</label>
                    <input id="four" type="radio" name="answer-3" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="four" name="choosen" class="satisfy-num">5</label>
                    <input id="four" type="radio" name="answer-3" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Subject knowledge<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="five" name="choosen" class="satisfy-num">1</label>
                    <input id="five" type="radio" name="answer-4" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="five" name="choosen" class="satisfy-num">2</label>
                    <input id="five" type="radio" name="answer-4" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="five" name="choosen" class="satisfy-num">3</label>
                    <input id="five" type="radio" name="answer-4" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="five" name="choosen" class="satisfy-num">4</label>
                    <input id="five" type="radio" name="answer-4" value=4  placeholder="">
                </div>
                <div class="input-div">
                    <label for="five" name="choosen" class="satisfy-num">5</label>
                    <input id="five" type="radio" name="answer-4" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Method of teaching<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="six" name="choosen" class="satisfy-num">1</label>
                    <input id="six" type="radio" name="answer-5" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="six" name="choosen" class="satisfy-num">2</label>
                    <input id="six" type="radio" name="answer-5" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="six" name="choosen" class="satisfy-num">3</label>
                    <input id="six" type="radio" name="answer-5" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="six" name="choosen" class="satisfy-num">4</label>
                    <input id="six" type="radio" name="answer-5" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="six" name="choosen" class="satisfy-num">5</label>
                    <input id="six" type="radio" name="answer-5" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Completion of syllabus<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="seven" name="choosen" class="satisfy-num">1</label>
                    <input id="seven" type="radio" name="answer-6" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="seven" name="choosen" class="satisfy-num">2</label>
                    <input id="seven" type="radio" name="answer-6" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="seven" name="choosen" class="satisfy-num">3</label>
                    <input id="seven" type="radio" name="answer-6" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="seven" name="choosen" class="satisfy-num">4</label>
                    <input id="seven" type="radio" name="answer-6" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="seven" name="choosen" class="satisfy-num">5</label>
                    <input id="seven" type="radio" name="answer-6" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Practice & revision<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="eight" name="choosen" class="satisfy-num">1</label>
                    <input id="eight" type="radio" name="answer-7" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eight" name="choosen" class="satisfy-num">2</label>
                    <input id="eight" type="radio" name="answer-7" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eight" name="choosen" class="satisfy-num">3</label>
                    <input id="eight" type="radio" name="answer-7" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eight" name="choosen" class="satisfy-num">4</label>
                    <input id="eight" type="radio" name="answer-7" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eight" name="choosen" class="satisfy-num">5</label>
                    <input id="eight" type="radio" name="answer-7" value=5 placeholder="">
                </div>
                <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
			<div class="name">Tests and evaluation<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="nine" name="choosen" class="satisfy-num">1</label>
                    <input id="nine" type="radio" name="answer-8" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="nine" name="choosen" class="satisfy-num">2</label>
                    <input id="nine" type="radio" name="answer-8" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="nine" name="choosen" class="satisfy-num">3</label>
                    <input id="nine" type="radio" name="answer-8" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="nine" name="choosen" class="satisfy-num">4</label>
                    <input id="nine" type="radio" name="answer-8" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="nine" name="choosen" class="satisfy-num">5</label>
                    <input id="nine" type="radio" name="answer-8" value=5 placeholder="">
                </div>
                    <div>
                    <span>excellent</span>
                </div>
            </div>
		</div>
        <div class="name-div">
            <div class="name">Professionalism<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="ten" name="choosen" class="satisfy-num">1</label>
                    <input id="ten" type="radio" name="answer-9" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="ten" name="choosen" class="satisfy-num">2</label>
                    <input id="ten" type="radio" name="answer-9" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="ten" name="choosen" class="satisfy-num">3</label>
                    <input id="ten" type="radio" name="answer-9" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="ten" name="choosen" class="satisfy-num">4</label>
                    <input id="ten" type="radio" name="answer-9" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="ten" name="choosen" class="satisfy-num">5</label>
                    <input id="ten" type="radio" name="answer-9" value=5 placeholder="">
                </div>
                    <div>
                    <span>excellent</span>
                </div>
            </div>

        </div>
        <div class="name-div">
            <div class="name">Motivation & extracurricular<span class="required">*</span></div>
            <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="eleven" name="choosen" class="satisfy-num">1</label>
                    <input id="eleven" type="radio" name="answer-10" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eleven" name="choosen" class="satisfy-num">2</label>
                    <input id="eleven" type="radio" name="answer-10" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eleven" name="choosen" class="satisfy-num">3</label>
                    <input id="eleven" type="radio" name="answer-10" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eleven" name="choosen" class="satisfy-num">4</label>
                    <input id="eleven" type="radio" name="answer-10" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="eleven" name="choosen" class="satisfy-num">5</label>
                    <input id="eleven" type="radio" name="answer-10" value=5 placeholder="">
                </div>

                    <div>
                    <span>excellent</span>
                </div>
            </div>    
        </div>
        <div class="name-div">
                <div class="name">Overall feedback<span class="required">*</span></div>
                <div class="remark-forum">
                <div>Satisfactory</div>               
                <div class="input-div">
                    <label for="twelve" name="choosen" class="satisfy-num">1</label>
                    <input id="twelve" type="radio" name="answer-11" value=1 placeholder="">
                </div>
                <div class="input-div">
                    <label for="twelve" name="choosen" class="satisfy-num">2</label>
                    <input id="twelve" type="radio" name="answer-11" value=2 placeholder="">
                </div>
                <div class="input-div">
                    <label for="twelve" name="choosen" class="satisfy-num">3</label>
                    <input id="twelve" type="radio" name="answer-11" value=3 placeholder="">
                </div>
                <div class="input-div">
                    <label for="twelve" name="choosen" class="satisfy-num">4</label>
                    <input id="twelve" type="radio" name="answer-11" value=4 placeholder="">
                </div>
                <div class="input-div">
                    <label for="twelve" name="choosen" class="satisfy-num">5</label>
                    <input id="twelve" type="radio" name="answer-11" value=5 placeholder="">
                </div>
                    <div>
                    <span>excellent</span>
                    </div>
                </div>
		    
        </div>
		<div class="hit-submit">
			<input class="btn" type="submit" name="Submit">
            <div>
                <p class="clear-form">Clear form</p>
            </div>
		</div>
		<div class="last-div">
			<p class="never">This form was created inside of Akshaya College of Engineering & Technology.</p>
			<a href="">Report abuse</a>
		</div>
	</form>
</body>
</html>