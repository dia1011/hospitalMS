<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Doctors</h3>
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
                    <br>
                    <hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('Doctors') }}</div>
                    <table class="table table-hover" style="" id="">
                    <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Photo</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Department Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($doctors as $index => $doctor)
                         <tr>
                         <td>{{ $loop->index + 1 }}</td>
                           <td class="text-center">
                           @if($doctor->employee && $doctor->employee->image)
                        <img src="{{ asset('storage/' . $doctor->employee->image) }}" style="width: 90px; height: 90px;border-radius: 50%">
                            @else
                          <span>No Image</span>
                            @endif
                         </td>
                         <td class="text-center">{{ $doctor->employee->name ?? 'No Name' }}</td>
                         <td class="text-center">{{ $doctor->department->name ?? 'No Department' }}</td>
                        </tr>
                          @empty
                            <tr>
                       <td colspan="7" class="text-warning text-center">{{ __('No Doctor found.') }}</td>
                        </tr>
                     @endforelse
                     </tbody>
                        </table>
                    {{ $doctors->links() }}
                </div>
            </div>
        </div>