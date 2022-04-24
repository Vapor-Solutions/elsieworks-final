<div>
    <x-slot name="header">
        Edit Existing Project
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Edit a new Completed Project</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model="project.title" type="text" name="title" id="title" class="form-control"
                                placeholder="Enter the title of the Project" aria-describedby="title">
                            @error('project.title')
                                <small id="title" class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea wire:model="project.description" class="form-control" name="description" id="description"
                                rows="3"></textarea>
                            @error('project.description')
                                <small id="title" class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="client_id" class="form-label">Client Name</label>
                            <select wire:model="project.client_id" class="form-control" name="client_id" id="client_id">
                                <option selected>Choose a Client</option>
                                @foreach (App\Models\Client::all() as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                @endforeach
                            </select>
                            @error('project.client_id')
                                <small id="title" class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service Type</label>
                            <select wire:model="project.service_id" class="form-control" name="service_id" id="service_id">
                                <option selected>Choose the type of service offered</option>
                                @foreach (App\Models\Service::all() as $service)
                                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                                @endforeach
                            </select>
                            @error('project.service_id')
                                <small id="title" class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="" class="form-label">Photos</label>
                          <input wire:model="photos" type="file" class="form-control" name="" id="" placeholder="Add Your Photos" aria-describedby="fileHelpId" multiple>
                          @error('photos')
                                <small id="title" class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="cost_kes" class="form-label">Total Cost</label>
                          <input wire:model="project_cost.cost_kes" type="number" name="cost_kes" id="cost_kes" class="form-control" placeholder="Input the amount paid for this project" aria-describedby="cost_kes">
                          @error('project_cost.cost_kes')
                                <small id="title" class="text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button wire:click="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
