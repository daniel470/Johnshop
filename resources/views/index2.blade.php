@extends('Layouts.master')

@section('title')
Student Info
@endsection

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  
  padding: 20px;
}
</style>
</head>
<body>

<h3>Students Request</h3>

<div class="container">
    
  <form action="{{ route('product.index1') }}" method="post">
      {{ csrf_field()}}
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="Fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
	<input type="text" id="lname" name="Lname" placeholder="Your last name..">
	
	<label for="lname">Enter ID number</label>
    <input type="text" id="lD" name="ID#" placeholder="eg.. 1703254">

	<label for="lname">Location on Campus</label>
    <input type="text" id="locate" name="location" placeholder="eg Hall 1 upstairs">

    

    <label for="subject">Important Details</label>
    <textarea id="subject" name="otherdetails" placeholder="Write something for confidentiality" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<!--<table>
      <tr>
      <td>FirstName</td>
      <td>LastName</td>
      <td>ID</td>
      <td>Location</td>
      <td>OtherDetails</td>
      </tr>
    -->     


 
</table>
  </body>
</html>
@endsection