<div>
    <x-slot name='header'>
        <h5>Service Categories</h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5> Create a new Service Category</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service Type</label>
                            <select wire:model="category.service_id" class="form-control bg-dark" name="service_id" id="service_id">
                                <option selected>Choose one Service Type</option>
                                @foreach (App\Models\Service::all() as $service)
                                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                                @endforeach
                            </select>
                            @error('category.service_id')
                              <small id="helpId" class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input wire:model='category.title' type="text" name="title" id="title" class="form-control bg-dark" placeholder="Enter the title of Your new Category" aria-describedby="helpId">
                          @error('category.title')
                              <small id="helpId" class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                          <label for="description" class="form-label">Description <small>(Optional)</small></label>
                          <textarea wire:model='category.description' class="form-control" name="description" id="description" rows="3"></textarea>
                          @error('category.description')
                              <small id="helpId" class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                </div>
                <div wire:click="submit" class="d-flex-flex-column">
                    <button class="btn btn-secondary">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
