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
      <input type="text" name="name" value="{{$user->name}}">
      <h3>Company :</h3>
      <input type="text" name="id_company" value="{{$user->id_company}}">
      <h3>Phone :</h3>
      <input type="text" name="phone" value="{{$user->phone}}">
      <h3>Email : </h3>
      <input type="text" name="email" value="{{$user->email}}"><br>
      <input type="radio" name="type" value="internal">internal<br>
      <input type="radio" name="type" value="external">external<br>
      <input type="submit" name="submit" value="OK">
    </form>
  </body>
</html>
