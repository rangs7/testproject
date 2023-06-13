<!DOCTYPE html>
<html>
<head>
  <title>HTML Table with Border Example</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  
<button type="buttom"><a href="/create_role_index">Create New</a></button>
<button type="buttom"><a href="/get_role_list/status/NA/Active">List Active Role</a></button>
<button type="buttom"><a href="/get_role_list/status/NA/Inactive">List Inactive Role</a></button>
<button type="buttom"><a href="/get_role_list/ALL/NA/ALL">List All Role</a></button>

<table>
  <tr>
    <th>SL NO.</th>
    <th>RoleName</th>
    <th>Status</th>
    <th>Actions</th>

  </tr>
  @foreach ($response_data as $i=> $data)
  <tr>
    <td>{{$i+1}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->status}}</td>
    <td> 
        <button type="buttom"><a href="/edit_role/{{$data->id}}">Edit</a></button>
        <button type="buttom"><a href="/delete_role/{{$data->id}}">Delete</a></button>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
