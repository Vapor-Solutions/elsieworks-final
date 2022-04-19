<div>
    {{-- Do your work, then step back. --}}
    <x-slot name="header">
        {{ __('Administrators\' List') }}
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Administrators Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email Address
                                    </th>
                                    <th>
                                        Level
                                    </th>
                                    <th class="text-center">
                                        Number of Projects Done
                                    </th>
                                    <th class="text-center">
                                        Total Earnings
                                    </th>
                                    <th class="text-center">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $item)

                                    <tr>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->role->title }}
                                        </td>
                                        <td class="text-center">
                                            16
                                        </td>
                                        <td class="text-center">
                                            KES3,738
                                        </td>
                                        <td class="text-right">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <a href="{{ route('admin.admins.edit', $item->id) }}"
                                                        class="btn btn-secondary">
                                                        <i class="fa fa-edit"></i>

                                                    </a>
                                                </div>
                                                @if (auth()->user()->id != $item->id)
                                                <div class="col-md-6 col-12" >
                                                    <button class="btn btn-danger" onclick="confirm('Are you sure you want to delete this Admin?')||event.stopImmediatePropagation()" wire:click="delete({{ $item->id }})">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <a href="{{ route('admin.admins.create') }}" class="btn btn-primary">
                                Add New Admin
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
