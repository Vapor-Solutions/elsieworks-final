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
                            List of Trusted Clients
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
                                @foreach ($trusted_clients as $trusted_client)
                                    <tr>
                                        <td scope="row">{{ $trusted_client->client->id }}</td>
                                        <td>{{ $trusted_client->client->name }}</td>
                                        <td>{{ $trusted_client->client->email }}</td>
                                        <td>{{ $trusted_client->client->phone_number }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('admin.trusted-clients.edit', $trusted_client->client->id) }}"
                                                        class="btn btn-xs btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <button onclick="confirm('Are you Sure you want To Remove this client from Trusted List?')" wire:click="delete({{ $trusted_client->id }})"
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
                                <a href="{{ route('admin.trusted-clients.create') }}" class="btn btn-primary btn-xl">
                                    Add Client to the List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
