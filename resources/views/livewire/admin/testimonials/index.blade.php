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
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-default">
                                <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Text</th>
                                    <th>Image</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td scope="row">{{ $testimonial->client_id }}</td>
                                        <td>{{ $testimonial->client->name }}</td>
                                        <td>{{ $testimonial->text }}</td>
                                        <td>
                                            <img src="{{ $testimonial->image_url ?? ($testimonial->client->image ?? $testimonial->client->image_url) }}"
                                                class="img-thumbnail rounded-circle" width="75px" height="75px" alt="">
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-center">
                                                <div class="flex-col mx-1">
                                                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-col mx-1">
                                                    <button wire:click='delete({{ $testimonial->id }})' class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
