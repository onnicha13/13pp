<!doctype html>
<html lang="en">

<head>
  <title>Province</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <p class="h2">จังหวัด</p>
  </div>






  <div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif


    @if(session()->has('Success'))
    <div class="alert alert-success" role="alert">
      <strong>{{ session()->get('Success') }}</strong>
    </div>
    @elseif(session()->has('Update'))
    <div class="alert alert-warning" role="alert">
      <strong>{{ session()->get('Update') }}</strong>
    </div>
    @elseif(session()->has('Delete'))
    <div class="alert alert-danger" role="alert">
      <strong>{{ session()->get('Delete') }}</strong>
    </div>
    @endif



    <table class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>จังหวัด</th>
          <th>อำเภอ</th>
          <th>ตำบล</th>
          <th>รหัสไปรษณีย์</th>
          <th>การจัดการ</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $val)
        <tr>
          <td>{{ $val->id }}</td>
          <td>{{ $val->province }}</td>
          <td>{{ $val->amphoe }}</td>
          <td>{{ $val->district }}</td>
          <td>{{ $val->zipcode }}</td>
          <td>

            <a href="{{ route('insert') }}" class="btn btn-success btn-sm">Insert</a>
            <a href="{{ route('update') }}" class="btn btn-warning btn-sm">Update</a>
            <a href="{{ route('delete') }}" class="btn btn-danger btn-sm">Delete</a>
            <a href="{{ route('validates') }}" class="btn btn-info btn-sm">validate</a>
            <a href="{{ route('SweetAlert2') }}" class="btn btn-primary btn-sm">SweetAlert2</a>
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#Add">Modal</button>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>


<!-- Modal -->
<div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        Body
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if(session()->has('SweetAlert2'))
  <script>
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  </script>
  @endif

</body>

</html>