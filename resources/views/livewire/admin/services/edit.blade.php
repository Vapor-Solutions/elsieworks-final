<div>
    <x-slot name="header">
        <h5>
            Edit Service No. {{ $service->id }}
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Edit Service <strong>{{ $service->title }}</strong></h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" wire:model="service.title" name="title" id="title" class="form-control" placeholder="Enter your Title" aria-describedby="title">
                  @error('service.title')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="category_id" class="form-label">Category</label>
                  <select wire:model="service.service_category_id" class="form-control bg-dark" name="category_id" id="category_id">
                    <option>Choose a category</option>
                    @foreach (App\Models\ServiceCategory::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                  </select>
                  @error('service.category_id')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea wire:model='service.description' class="form-control" name="description" id="description" rows="3"></textarea>
                  @error('service.title')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <button class=" btn btn-primary" wire:click='submit'>Submit</button>
            </div>
        </div>
    </div>
</div>
