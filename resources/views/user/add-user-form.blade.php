<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <title>User Form</title
  </head>
  <body>
    <form  action="{{URL::current()}}" method="post">
      {{csrf_field()}}
      <h3>Your Name :</h3>
      <input type="text" name="name" value="{{old('name')}}">
      <h3>Company :</h3>
      <select class="js-example-basic-single" style="width:300px" name="id_company" placeholder="Select your company...">
        <option value="" disabled selected></option>
        @foreach ($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
      </select>
      <h3>Phone :</h3>
      <input type="text" name="phone" value="{{old('phone')}}">
      <h3>Email : </h3>
      <input type="text" name="email" value="{{old('email')}}"><br>
      <input type="radio" name="type" value="internal">internal<br>
      <input type="radio" name="type" value="external">external<br>
      <input type="submit" name="submit" value="OK">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".js-example-basic-single").select2();
        $(".js-example-basic-single").select2({
          placeholder:"Select your company... ",
          allowClear :"true"
        });
      });
    </script>

  </body>
</html>
