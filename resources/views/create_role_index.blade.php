<!DOCTYPE html>
<html>
<head>
  <title>Role Management</title>
  <style>
    .container {
      width: 300px;
      padding: 16px;
      background-color: #f2f2f2;
      margin: 0 auto;
      margin-top: 100px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>
 

  <div class="container">
    <h1 style="text-align: center;">Role Management</h1>
    <form action="create_role" method="post">
      @csrf
    <label for="role_name"><b>Role name</b></label>
    <input type="text" id="role_name" name="role_name" required>

    <label for="status"><b>Status:</b></label>
    <input type="radio" value="Active" id="status1" name="status" required>
    <label>Active</lable>
    <input type="radio" value="Inactive "id="status2" name="status" required>
    <label>Inactive</lable>
    <br/><br/><br/>
    <button type="submit">Login</button>
  </div>
</body>
</html>

