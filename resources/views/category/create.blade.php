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
            <h1>Add Category</h1>
            <a href="{{url('categories')}}" type="button" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
        @if (session('status'))
        <div>
        <div class="alert alert-success">{{session('status')}} </div>
        </div>
        @endif
            <form action="{{url('categories/create')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label" required>Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"required>Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
                        <label class="form-check-label" for="is_active">
                            Is Active
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
