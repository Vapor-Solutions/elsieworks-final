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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
