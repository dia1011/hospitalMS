<div>
    <div class="content">
        <div class="container">
            <div class="row page-title row">
                <div class="col">
                    <h3 class="text-info">{{ env('APP_NAME') }} HOD's</h3>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" wire:click="show_create_form">Add New</button>
                </div>
            </div>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                    <hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __("All  HOD's") }}</div>
                    <table class="table table-all table-hover" id="">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Doctor</th>
                                <th class="text-center">Dpartment</th>
                                <th class="text-center">Dated</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hods as $hod)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $hod->doctor?->employee?->name ?? 'N/A' }}</td>
                                    <td class="text-center">{{ $hod->doctor?->department?->name ?? 'N/A' }}</td>
                                    <td class="text-center">{{ $hod->created_at }}</td>
                                    <td class="text-center">
                                        <button wire:click="show_edit_form({{ $hod->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $hod->id }})"
                                            class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></button>

                                    </td>
                                </tr>
                            @empty
                                <!-- <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                </tr> -->
                            <tr>
                                <td colspan="7" class="text-warning text-center">
                                {{ __("No Hod's data found.") }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $hods->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
