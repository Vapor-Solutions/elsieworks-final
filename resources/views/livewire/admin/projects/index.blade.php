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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td scope="row">{{ $project->id }}</td>
                                <td>{{ $project->client->name }}</td>
                                <td>{{ $project->service->title }}</td>
                                <td>KES {{ number_format($project->project_cost->cost_kes, 2) }}</td>
                                <td>Completed</td>
                                <td>{{ $project->user->name }} ({{ Carbon\Carbon::parse($project->created_at)->format("jS \of M,Y h:i:s A") }})</td>
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
