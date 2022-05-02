<div>
    <x-slot name="header">
        <h5>Rates and Packages</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Create a new Package</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service Type</label>
                            <select wire:change='loadCategories' wire:model='rate.service_id' class="form-control "
                                name="service_id" id="service_id">
                                <option selected>Choose one Service</option>
                                @foreach (App\Models\Service::all() as $service)
                                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                                @endforeach
                            </select>
                            @error('rate.service_id')
                                <small class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service Category</label>
                            <select wire:model='rate.service_category_id' class="form-control " name="service_id"
                                id="service_id">
                                <option selected>Choose one Service Category</option>
                                @if ($service_categories)
                                    @foreach ($service_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('rate.service_category_id')
                                <small class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model="rate.title" type="text" class="form-control" name="title" id="title"
                                aria-describedby="title" placeholder="Enter yor Title">
                            @error('rate.title')
                                <small id="title" class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3" wire:ignore>
                            <label for="description" class="form-label">Description</label>
                            <div id="description-text"></div>
                            @error('rate.description')
                                <small class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="price_type" class="form-label">Billing Format</label>
                            <select wire:model="rate.price_type_id" class="form-control " name="price_type"
                                id="price_type">
                                <option>Choose your Billing Format for this package</option>
                                @foreach (App\Models\PriceType::all() as $pricetype)
                                    <option value="{{ $pricetype->id }}">{{ $pricetype->title }}</option>
                                @endforeach
                            </select>
                            @error('rate.price_type_id')
                                <small id="title" class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input wire:model="rate.price" type="number" class="form-control " name="price" id="price"
                                aria-describedby="helpId" placeholder="Enter your Price for this package">
                            @error('rate.price')
                                <small id="title" class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-secondary" wire:click='submit'>Submit</button>



                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        $('#description-text').summernote({
            height: 200,
            codemirror: {
                theme: 'monokai'
            },
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('rate.description', contents);
                }
            }
        });
    </script>
@endpush
