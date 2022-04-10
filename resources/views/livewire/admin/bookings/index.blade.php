<div>
    <x-slot name="header">
        <h5>
            Bookings
        </h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>
                    List of Bookings Made
                </h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover ">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Contact Info</th>
                            <th>Service Type</th>
                            <th>Special Request</th>
                            <th>Rate Chosen</th>
                            <th>Date and Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td scope="row">{{ $booking->id }}</td>
                                <td>{{ $booking->client->name }}</td>
                                <td>{{ $booking->rate->service->title }}</td>
                                <td><small>{{ $booking->special_requests??"NOT GIVEN" }}</small></td>
                                <td>{{ $booking->rate->title }} - KES {{ $booking->rate->price }}
                                    {{ $booking->rate->price_type->title }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->booking_time)->format('jS \of M, Y h:i A') }}
                                </td>
                                <td>{{ $booking->is_confirmed ? 'Confirmed' : 'Not Confirmed' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-12"><a href="{{ route('admin.bookings.create') }}"
                            class="btn btn-primary">Add New</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
