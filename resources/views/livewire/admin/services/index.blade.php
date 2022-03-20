<div>
    <x-slot name="header">
        Services Table
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Services</h5>
            </div>
            <div class="card-body ">
                <table class="table table-hover">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td scope="row">{{ $service->id }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->category }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div class="flex-col m-1">
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                                class="btn btn-xs btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="flex-col m-1">
                                            <button class="btn btn-xs btn-danger" wire:click='delete({{ $service->id }})'><i
                                                    class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                <a href="{{ route('admin.services.create') }}" class="btn btn-warning">
                    <i class="fas fa-plus">
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>
