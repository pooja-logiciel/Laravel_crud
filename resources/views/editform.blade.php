<html>
    <head>
        <title>First crud</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
          print_r($result);
          echo "</pre>";
         ?>
       <div style="width:500px; height:200px; margin:100px;">
    <form action="update_data" method="get" >
      @csrf
      <div class="mb-3">
        <h3><b><i>Update your data</i></b></h3>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control " value="{{$result->email}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div  class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" value="{{$result->name}}" class="form-control " >
      </div>
      <input type="hidden" value="{{$result->id}}" name="id" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
</body>
</html>