<div>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="card" style="height: 145px">
                    <div class="card-header">
                        <h4 class="text-info">
                            Total Earnings
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            KES
                            <h2>
                                {{ number_format($total_earnings??0, 2) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="card" style="height: 145px">
                    <div class="card-header">
                        <h4 class="text-info">
                            Completed Projects
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            <h2>
                                {{ number_format(count($projects??0), 0) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="card" style="height: 145px">
                    <div class="card-header">
                        <h4 class="text-info">
                            Number of Clients
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right align-bottom">
                            <h2>
                                {{ number_format(count($clients??0), 0) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            About Image
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="/client/images/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-9 my-auto">
                                <form action="{{ route('change_about') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">About Picture</label>
                                        <input type="file" class="form-control" name="about" id="about-image"
                                            placeholder="Choose a About " aria-describedby="fileHelpId">
                                        <button class="btn btn-primary">Change</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Maintenance Mode</h5>
                        <h6 class="text-{{ env('MAINTENANCE_MODE') ? 'success' : 'danger' }}">
                            {{ env('MAINTENANCE_MODE') ? 'ON' : 'OFF' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column mb-md-5 mb-2">
                            <button wire:click='maintenance_switch'
                                onclick="confirm('Are you sure you want switch to maintenance mode?') || event.stopImmediatePropagation()"
                                class="btn btn-{{ env('MAINTENANCE_MODE') ? 'danger' : 'success' }}">
                                Switch {{ env('MAINTENANCE_MODE') ? 'Off' : 'On' }}
                            </button>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date (Currently: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('D jS \of M, Y h:i A') }}; )</label>
                                <input wire:model='date' type="datetime-local" name="date" id="date"
                                    class="form-control"
                                    placeholder="Enter the date and time you expect for it to end"
                                    aria-describedby="helpId">
                                    @error('date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <button wire:click='change_end_maintenance' class="btn btn-primary">Change the End
                                Date</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Director's Photos
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row my-4">
                            <div class="col-3">
                                <img src="/client/images/contact/contact1.jpg" alt="">
                            </div>
                            <div class="col-9 my-auto">
                                <form action="{{ route('change_shirley') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Shirley's Picture</label>
                                        <input type="file" class="form-control" name="shirley" id="shirley-image"
                                            placeholder="Choose a Photo " aria-describedby="fileHelpId">
                                        <button class="btn btn-primary">Change</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-3">
                                <img src="/client/images/contact/contact2.jpg" alt="">
                            </div>
                            <div class="col-9 my-auto">
                                <form action="{{ route('change_wambui') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Wambui's Picture</label>
                                        <input type="file" class="form-control" name="wambui" id="wambui-image"
                                            placeholder="Choose a Photo " aria-describedby="fileHelpId">
                                        <button class="btn btn-primary">Change</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
