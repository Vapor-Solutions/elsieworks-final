<div>
    <x-slot name="header">
        {{ __('Create a new Client') }}
    </x-slot>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Create a new Client
                        </h2>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='submit'>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full name</label>
                                        <input type="text" wire:model='client.name' name="name" id="name"
                                            class="form-control" placeholder="Enter your client's Full Name"
                                            aria-describedby="name">

                                        @error('client.name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" wire:model='client.email' name="email" id="email" class="form-control"
                                            placeholder="Enter your clients Email Address" aria-describedby="email">

                                        @error('client.email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input wire:model='client.phone_number' type="tel" name="phone_number" id="phone_number" class="form-control"
                                            placeholder="Enter your clients Phone Number"
                                            aria-describedby="phone_number">

                                        @error('client.phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Phone Number</label>
                                        <input wire:model='image' type="file" name="image" id="image" class="form-control"
                                            placeholder="Choose an Image"
                                            aria-describedby="image">

                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary">
                                                Save
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">
                                                Cancel
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
