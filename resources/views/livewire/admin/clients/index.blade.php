<div>
    <x-slot name="header">
        {{ __('Clients\' List ') }}
    </x-slot>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            List of Clients
                        </h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-default">
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td scope="row">{{ $client->id }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->phone_number }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('admin.clients.edit', $client->id) }}"
                                                        class="btn btn-xs btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <button onclick="confirm('Are you Sure you want To delete this client?')" wire:click="delete({{ $client->id }})"
                                                        class="btn btn-xs btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.clients.create') }}" class="btn btn-primary btn-xl">
                                    Add New Client
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
