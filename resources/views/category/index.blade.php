<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <h1>Category</h1>
        <a href="{{ url('categories/create') }}" class="btn btn-primary">Add Category</a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Is Active</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->description }}</td>
                  <td>{{ $item->is_active }}</td>
                  <td>
                    <a href="{{ url('categories/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
<form action="{{ url('categories/' . $item->id . '/delete') }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
