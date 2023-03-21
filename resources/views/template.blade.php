<html>
    <head>
        <title>First crud</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
      
    <div style="width:500px; height:200px; margin:100px;">
    <form action="update" method="get" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <h3><b><i>Enter your data</i></b></h3>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control " name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div  class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control " >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @if($data)
      @foreach ($data as $user)
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <p>{{ $user->id}}</p>
            <div class="ms-3">
              <p class="fw-bold mb-1">{{ $user->name }}</p>
              <p class="text-muted mb-0">{{ $user->name }}</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">{{ $user->email }}</p>
          <p class="text-muted mb-0">{{ $user->email }}</p>
        </td>
        <td>
          <a href=" delete/{{$user->id}}"><button type="button" class="btn btn-link btn-sm btn-rounded">
            delete
          </button></a>
        </td>
        <td>
          <a href=" edit/{{$user->id}}"><button type="button" class="btn btn-link btn-sm btn-rounded">
            edit
          </button>
          </a>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
    </table>
    </body>
</html>