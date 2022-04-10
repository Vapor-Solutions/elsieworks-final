<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    @php
        $total_earnings = 0;
        $projects = App\Models\Project::all();
        $clients = App\Models\Client::all();

        for ($i = 0; $i < count($projects); $i++) {
            $total_earnings += $projects[$i]->project_cost->cost_kes;
        }

    @endphp
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
                                {{ number_format($total_earnings, 2) }}
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
                                {{ number_format(count($projects), 0) }}
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
                                {{ number_format(count($clients), 0) }}
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
                                <form action="{{ route('change_about') }}" method="POST" enctype="multipart/form-data">
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
                                <form action="{{ route('change_shirley') }}" method="POST" enctype="multipart/form-data">
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
                                <form action="{{ route('change_wambui') }}" method="POST" enctype="multipart/form-data">
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
</x-app-layout>
