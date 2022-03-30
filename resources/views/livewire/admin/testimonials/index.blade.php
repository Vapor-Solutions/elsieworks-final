<div>
    <x-slot name="header">
        <h5>
            Client's Testimonials
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Clients Testimonials</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-default">
                                <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Text</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td scope="row">{{ $testimonial->client_id }}</td>
                                        <td>{{ $testimonial->client->name }}</td>
                                        <td>{{ $testimonial->text }}</td>
                                        <td>
                                            <img src="" class="img-thumbnail rounded-circle" alt="">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            Client's not given Testimonials
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead class="thead-default">
                                <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
