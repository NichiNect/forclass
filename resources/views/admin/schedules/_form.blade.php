@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
@endpush

@if (isset($schedule))
    <div class="form-group">
        <label for="subject" class="form-label">Subject Name</label>
        <select type="text" name="subject" id="subject" class="form-control select2" style="width: 50%">
            <option value="" disabled>-- Choose the subject name --</option>
            @foreach ($subjects as $subject)
                {{-- <option value="{{ $subject->id }}" selected>{{ $subject->id . ' - ' . $subject->name }}</option> --}}
                <option value="{{ $subject->id }}" @if ($schedule->subject_id == $subject->id) selected @endif>{{ $subject->id . ' - ' . $subject->name }}</option>
            @endforeach
        </select>
        @error('subject')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="day" class="form-label">Subject Name</label>
        <select type="text" name="day" id="day" class="form-control select2" style="width: 50%">
            <option value="" selected disabled>-- Choose the day --</option>
            @foreach ($days as $day)
                <option value="{{ $day->id }}" @if ($schedule->day_id == $day->id) selected @endif>{{ $day->id . ' - ' . $day->day }}</option>
            @endforeach
        </select>
        @error('day')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="start_time" class="form-label">Start Time</label>
        <input type="time" name="start_time" id="start_time" class="form-control" placeholder="Fill the start time.." value="{{ $schedule->start_time }}">
        @error('start_time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="finish_time" class="form-label">Finish Time</label>
        <input type="time" name="finish_time" id="finish_time" class="form-control" placeholder="Fill the finish time.." value="{{ $schedule->end_time }}">
        @error('finish_time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@else
    <div class="form-group">
        <label for="subject" class="form-label">Subject Name</label>
        <select type="text" name="subject" id="subject" class="form-control select2" style="width: 50%">
            <option value="" selected disabled>-- Choose the subject name --</option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->id . ' - ' . $subject->name }}</option>
            @endforeach
        </select>
        @error('subject')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="day" class="form-label">Day Name</label>
        <select type="text" name="day" id="day" class="form-control select2" style="width: 50%">
            <option value="" selected disabled>-- Choose the day --</option>
            @foreach ($days as $day)
                <option value="{{ $day->id }}">{{ $day->id . ' - ' . $day->day }}</option>
            @endforeach
        </select>
        @error('day')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="start_time" class="form-label">Start Time</label>
        <input type="time" name="start_time" id="start_time" class="form-control" placeholder="Fill the start time..">
        @error('start_time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="finish_time" class="form-label">Finish Time</label>
        <input type="time" name="finish_time" id="finish_time" class="form-control" placeholder="Fill the finish time..">
        @error('finish_time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif

@push('script')
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush