<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Company</title>
  </head>
  <body>
    <form  action="{{URL::current()}}" method="post">
      {{csrf_field()}}
      <h3>Company Name :</h3>
      <input type="text" name="name" value="{{old('name')}}">
      <h3>Address :</h3>
      <input type="text" name="address" value="{{old('address')}}">
      <h3>Phone :</h3>
      <input type="text" name="phone" value="{{old('phone')}}">
      <h3>Email : </h3>
      <input type="text" name="email" value="{{old('email')}}">
      <input type="submit" name="submit" value="OK">
    </form>
  </body>
</html>
