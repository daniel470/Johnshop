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

<h3>Students Orders</h3>
<div class ="row">
<div class="col-md-12">
  <br/>
  <table class="table table-borderd">
    <tr>
      <th> First Name </th>
      <th> Last Name  </th>
      <th> ID         </th>
      <th> Location </th>
      <th> Other Details</th>
      <th> Delete       </th>
    </tr> 
    @foreach ($data as $value)
     <tr>
       <td> {{$row['Fname']}}</td>
       <td> {{$row['Lname']}}</td>
       <td> {{$row['ID#']}}</td> 
       <td> {{$row['location']}}</td>  
       <td> {{$row['otherdetails']}}</td>
       <td></td>
     </tr>
    @endforeach
  </table>
</div>
<?php if (!empty($Fname)) { ?>

<?php echo $Fname; ?>  
  <?php} ?>

}
</body>
</html>
@endsection