<div>
    @if($mobileInService->shift->status == true)
    <div class="form-row"> 
        <fieldset class="col-6">            
            <select class="form-control" wire:model='user_id' required="required">
                <option value=""></option>
                @foreach($users as $key => $user)
                <option value="{{ $key }}">{{ $user }} </option>
                @endforeach
            </select>
            @error('user_id') <span class="error">{{ $message }}</span> @enderror
        </fieldset>
        <fieldset class="col-5">
            <select class="form-control" wire:model="job_type_id">
                <option value=""></option>
                @foreach($job_types as $jt)
                <option value="{{ $jt->id }}">{{ $jt->name }}</option>
                @endforeach
            </select>
            @error('job_type_id') <span class="error">{{ $message }}</span> @enderror    
        </fieldset>
        <fieldset class="col-1">
            @if($mobileInService->shift->status == true)
            <button wire:click="store()" class="btn btn-success"><i class="fas fa-plus"></i></button>
            @endif
        </fieldset>
    </div>
    <div class="form-row">
        <fieldset class="col-md-6 col-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="for_assumes_at">Asume:</span>
                </div>
                <input type="datetime-local" class="form-control" wire:model="assumes_at">
            </div>
            @error('assumes_at') <span class="error">{{ $message }}</span> @enderror
        </fieldset>
        <fieldset class="col-md-5 col-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="for_leaves_at">Leave:</span>
                </div>
                <input type="datetime-local" class="form-control" wire:model="leaves_at">
            </div>
            @error('leaves_at') <span class="error">{{ $message }}</span> @enderror
        </fieldset>
    </div>
    @endif

    @foreach($mobileInService->crew as $tripulant)
    <div class="form-row m-1">
        <div class="col-6">
            <li>
                {{ $tripulant->officialFullName }}
            </li>
        </div>
        <div class="col-5">
            {{ $tripulant->pivot->jobType->name }}
        </div>
        <div class="col-1">
            @if($mobileInService->shift->status == true)
            <button disabled class="btn btn-danger mx-2" wire:click="delete({{ $tripulant }})"><i class="fas fa-trash"></i></button>
            @endif
        </div>
    </div>
    @endforeach
</div>
