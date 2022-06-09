<div>
    <x-slot name="header">
        <h5>Replace This Client</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Choose the Client</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="client_id" class="form-label">Client</label>
                    <select wire:model="trusted_client.client_id" class="form-control" name="client_id" id="client_id">
                        <option>Choose the Client you want to replace with</option>
                        @foreach (App\Models\Client::all() as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>

                    @error('trusted_client.client_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row"><button class="btn btn-primary" wire:click="submit">Submit</button></div>
            </div>
        </div>
    </div>
</div>
