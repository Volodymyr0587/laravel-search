<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search with Relationships in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="text-center pt-4"><strong class="text-danger">Search</strong> with whereAll() & whereAny()</h1>
        <hr>

        <div class="row py-2">
            <div class="col-md-6">
                <h2><a href="" class="btn btn-secondary">Add New post</a></h2>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="/search">
                        <div class="input-group">
                            <div class="form-control">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="title" type="checkbox" value="title" {{ request()->input('title') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineCheckbox1">Title</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="description" type="checkbox" value="description" {{ request()->input('description') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineCheckbox2">Description</label>
                                </div>

                                <input class="form-control" name="search" placeholder="Search..." value="{{ request()->input('search') ? request()->input('search') : '' }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                            <a href="" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            No data found!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>
</html>
