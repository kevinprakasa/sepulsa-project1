<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Form</title>
  </head>
  <body>
    <form  action="{{URL::current()}}" method="post">
      {{csrf_field()}}
      <h3>Your Name :</h3>
      <input type="text" name="name" value="{{old('name')}}">
      <h3>Company :</h3>
      <input type="text" name="id_company" value="{{old('address')}}">
      <h3>Phone :</h3>
      <input type="text" name="phone" value="{{old('phone')}}">
      <h3>Email : </h3>
      <input type="text" name="email" value="{{old('email')}}"><br>
      <input type="radio" name="type" value="internal">internal<br>
      <input type="radio" name="type" value="external">external<br>
      <input type="submit" name="submit" value="OK">
    </form>
  </body>
</html>
