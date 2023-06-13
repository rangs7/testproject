<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  @include('common.css')
</head>
<body>
 <!-- contact section -->

 <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
              Registration Form
              </h2>
            </div>
            <form action="/register_new_user" method="POST">
              @csrf
            <p style="text-align: center;"><b>Notes:</b>{{$registration_txt}}</p>
              <div>
              <label for="full_name"><b>Full Name:</b><span class="text-danger">*</span></label>
                <input type="text" id="full_name" name="full_name" required>
              </div>
              <div>
              <label for="contact_no"><b>Contact No:</b></label>
                <input type="text" id="contact_no "name="contact_no" required>
              </div>
              <div>
              <label for="username"><b>Username (Email):</b></label>
                <input type="text" id="username "name="username" required>
              </div>
              <div>
              <label for="password"><b>Password:</b></label>
                <input type="password" id="password "name="password" required>
              </div>
                <div class="dropdown">
                <label for="role"><b>Select Role:</b></label>
                <select name="role"id="role">
                  <option value="">Select</option>
                  @foreach($role_data as $i=>$data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                  @endforeach
              </select>
              </div>
              <button type="submit"><b>Register</b></button>
            </form>
          </div>
        </div>
  </div>
</body>
</html>
