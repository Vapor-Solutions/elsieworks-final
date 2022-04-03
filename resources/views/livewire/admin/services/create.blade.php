<div>
   <x-slot name="header">
        <h5>
            Create a new Service
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Create a new Service</h5>
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
