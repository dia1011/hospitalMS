<div>
    <div class="content">
        <div class="container">
            <div class="row page-title row">
                <div class="col">
                    <h3 class="text-info">{{ env('APP_NAME') }} Staff</h3>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" wire:click="show_create_form">Add Staff Member</button>
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

                    <div class="text-center">
                        <button type="button" wire:click="set_filter('all')"
                            class="btn {{ $selectedFilter === 'all' ? 'btn-primary' : 'btn-secondary' }} btn-sm mr-2">All</button>
                        @foreach ($positions as $filter)
                            <button type="button" wire:click="set_filter('{{ $filter }}')"
                                class="btn {{ $selectedFilter === $filter ? 'btn-primary' : 'btn-secondary' }} btn-sm mr-2">{{ ucfirst($filter) }}</button>
                        @endforeach
                    </div>


                    <hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('Staff') }}</div>
                    <table class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                                <tr wire:key="employee-{{ $employee->id }}">
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        @if ($employee->image)
                                            <a href="{{ asset('storage/' . $employee->image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $employee->image) }}"
                                                    alt="Member Photo"
                                                    style="width: 90px; height: 90px;border-radius: 50%">
                                            </a>
                                        @else
                                            <a href="#" target="_blank">
                                                <img src="https://placehold.co/600x400" alt="Placeholder"
                                                    style="width: 90px; height: 90px;border-radius: 50%">
                                            </a>
                                        @endif
                                    </td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ \Str::title($employee->position) }}</td>
                                    <td>${{ number_format($employee->salary, 2, '.', ',') }}</td>
                                    <td>{{ $employee->status }}</td>
                                    <td class="text-right">
                                        <button wire:click="show_edit_form({{ $employee->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $employee->id }})"
                                            onclick="return confirm('Are You Sure ?')"
                                            class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @empty
                            <tr>
                                <td colspan="7" class="text-warning text-center">
                                {{ __('No Staff Member found.') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
