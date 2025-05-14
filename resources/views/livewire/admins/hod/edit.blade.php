<div>
    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="update()">
        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
            {{ __('Edit HOD') }}</div>
            <div class="form-group">
            <label for="department">Choose Department</label>
            <select name="department" wire:model="department" class="form-control">
                <option value="">{{ __('-- Select Department --') }}</option>
                @foreach ($departments as $dept)
                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="doctor">Choose Doctor</label>
            <select name="doctor" wire:model.lazy="doctor" class="form-control">
                <option value="">{{ __('-- Select Doctor --') }}</option>
                @forelse ($doctors as $doc)
                    <option value="{{ $doc->id }}">{{ $doc->employee->name }}</option>
                @empty
                    <option value="">{{ __('No Doctor Found!') }}</option>
                @endforelse
            </select>
            @error('doctor')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>
        <center>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </center>
        <center>
            <div class="form-group">
                <a wire:click="show_index" href="#">Cancel</a>
            </div>
        </center>
    </form>
</div>
