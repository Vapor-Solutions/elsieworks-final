<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-6">
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
                                {{ number_format(500000, 2) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card" style="height: 145px">
                    <div class="card-header">
                        <h4 class="text-info">
                            Unpaid Invoices
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            KES
                            <h2>
                                {{ number_format(126000, 2) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card" style="height: 145px">
                    <div class="card-header">
                        <h4 class="text-info">
                            Completed Projects
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            <h2>
                                {{ number_format(35, 0) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card" style="height: 145px">
                    <div class="card-header">
                        <h4 class="text-info">
                            Unresponded Contact Requests
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right align-bottom">
                            <h2>
                                {{ number_format(110, 0) }}
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
                        <div class="card-category">
                            <h5>Daily Earnings Chart</h5>
                        </div>
                        <div class="card-title">
                            <h3>
                                <i class="tim-icons icon-money-coins text-success"></i>
                                {{ number_format(127565.30,2) }}
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="daily-earnings">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
