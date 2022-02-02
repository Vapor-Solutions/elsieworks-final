<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
  Change
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Change <strong>{{ basename($bg)}}</strong></h5>
                    </div>
            <div class="modal-body align-items-center text-center">
                <div class="container-fluid">
                    @if ($photo)

                    <img src="{{ $photo->temporaryUrl() }}" alt="">
                    @else

                    <img src="{{ '/'.$bg }}" alt="">
                    @endif

                </div>
                <button class="btn btn-sm btn-info text-xs" onclick="document.getElementById('this').click()">
                    change
                </button>
                <input type="file" hidden id="this" wire:model="photo">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="save({{ $bg }})">Save</button>
            </div>
        </div>
    </div>
</div>

