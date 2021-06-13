@push('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
@endpush

@if (isset($picket))
    <div class="form-group">
        <label for="student" class="form-label">Student Name</label>
        <select type="text" name="student" id="student" class="form-control select2" style="width: 50%">
            <option value="" selected disabled>-- Choose the student name --</option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}" @if ($picket->student_id == $student->id) selected @endif>{{ $student->no_absen . ' - ' . $student->name }}</option>
            @endforeach
        </select>
        @error('student')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="day" class="form-label">Day Name</label>
        <select type="text" name="day" id="day" class="form-control select2" style="width: 50%">
            <option value="" selected disabled>-- Choose the day --</option>
            @foreach ($days as $day)
                <option value="{{ $day->id }}" @if ($picket->day_id == $day->id) selected @endif>{{ $day->id . ' - ' . $day->day }}</option>
            @endforeach
        </select>
        @error('day')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@else
    <div class="form-group">
        <label for="student" class="form-label">Student Name</label>
        <select type="text" name="student" id="student" class="form-control select2" style="width: 50%">
            <option value="" selected disabled>-- Choose the student name --</option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->no_absen . ' - ' . $student->name }}</option>
            @endforeach
        </select>
        @error('student')
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
@endif

@push('script')
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush