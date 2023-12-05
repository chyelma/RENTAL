<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    


</head>
<body>

<center>
<h1> Apartment Records</h1>

</center>

<center>
<form action="search_data" method="GET">
    <input type="text" name="search">
    <button type="submit"> Search</button>
</form>

</center>







<table class="table table-striped">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Address</th>
      <th scope="col">Rental Price</th>
      <th scope="col">Number of Bedrooms</th>
      <th scope="col">Square Footage</th>
      <th scope="col">Password</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
    </tr>
  </thead>


  <tbody>


@foreach($record as $records)

    <tr>
      <th >{{$records->id}}</th>
      <td>{{$records->address}}</td>
      <td>{{$records->rental_price}}</td>
      <td>{{$records->number_of_bedrooms}}</td>
      <td>{{$records->square_footage}}</td>
      <td>{{$records->password}}</td>
      <td>{{$records->created_at}}</td>
      <td>{{$records->updated_at}}</td>
<td> <a href="edit_record/{{$records->id}}"> <button class="btn btn-primary">Edit</button> </a> </td>
<td> <a href="delete_record/{{$records->id}}"> <button class="btn btn-danger">Delete</button> </a> </td>

    </tr>
@endforeach


  </tbody>
</table>
</table>

{{$record->links('pagination::bootstrap-5')}}


</body>
</html>