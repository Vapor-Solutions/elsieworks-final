<div>
    <x-slot name="header">
        <h5>
            Create Testimonial
        </h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Create a new Testimonial</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="client_id" class="form-label">Client</label>
                            <select wire:model='testimonial.client_id' class="form-control " name="client_id" id="client_id">
                                <option selected>Choose a new Client</option>
                                @foreach (App\Models\Client::all() as $client)
                                    @if (!$client->testimonial)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('testimonial.client_id')
                                <small id="helpId" class="form-text text-danger text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" wire:model='image' class=" form-control" name="image" id="image" aria-describedby="helpId"
                                placeholder="image">
                            @error('image')
                                <small id="helpId" class="form-text text-danger text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="testimonial" class="form-label">Testimonial</label>
                            <textarea  wire:model='testimonial.text' class=" form-control" name="testimonial" id="testimonial" rows="3"></textarea>
                            @error('testimonial.text')
                                <small id="helpId" class="form-text text-danger text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button wire:click='submit' class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
