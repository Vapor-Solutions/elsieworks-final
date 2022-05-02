<div>
    <x-slot name="header">
        <h5>Rates and Packages</h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Rates and Packages</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="thead-default">
                        <tr>
                            <th>Package ID</th>
                            <th>Title & Description</th>
                            <th>Service Type</th>
                            <th>Subcategory</th>
                            <th>Price</th>
                            <th>Billing Format</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rates as $rate)
                            <tr>
                                <td scope="row">{{ $rate->id }}</td>
                                <td><p>{{ $rate->title }} - <small>{!! $rate->description !!}</small></p></td>
                                <td>{{ $rate->service->title }}</td>
                                <td>{{ $rate->service_category->title??'NOT SET' }}</td>
                                <td>KES {{ number_format($rate->price) }} </td>
                                <td>{{ $rate->price_type->title }}</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div class="flex-col">
                                            <a href="{{ route('admin.rates.edit', $rate->id) }}"
                                                class="btn btn-xs m-1 btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="flex-col">
                                            <button class="btn btn-xs m-1 btn-danger">
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
            <div class="card-footer text-center">
                <a href="{{ route('admin.rates.create') }}" class="btn btn-primary">
                    Add New
                </a>
            </div>
        </div>
    </div>
</div>
