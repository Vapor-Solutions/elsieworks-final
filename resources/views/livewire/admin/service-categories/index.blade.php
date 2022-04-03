<div>
    <x-slot name="header">
        <h5>
            Service Categories
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Service Categories</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Service Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td scope="row">{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->service->title }}</td>
                                <td>
                                    <a href="{{ route('admin.service_categories.edit', $category->id) }}" class="btn btn-info">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                <div class="d-flex flex-row">
                    <div class="flex-col">
                        <a href="{{ route('admin.service_categories.create') }}" class="btn btn-primary">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
