<div>
    <x-slot name="header">
        Projects' list
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Projects</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Client Name</th>
                            <th>Project Type</th>
                            <th>Total Cost</th>
                            <th>status</th>
                            <th>Updated By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td scope="row">{{ $project->id }}</td>
                                <td>{{ $project->client->name??'NOT SET' }}</td>
                                <td>{{ $project->service->title }}</td>
                                <td>KES {{ number_format($project->project_cost->cost_kes??0, 2) }}</td>
                                <td>Completed</td>
                                <td>{{ $project->user->name }} ({{ Carbon\Carbon::parse($project->created_at)->format("jS \of M,Y h:i:s A") }})</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div class="flex-col">
                                            <a href="{{ route('admin.projects.edit') }}" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="flex-col">
                                            <button wire:click='delete({{ $project->id }})' class="btn btn-danger">
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
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>

    </div>
</div>
