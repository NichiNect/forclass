@if (isset($subject))
    <div class="form-group">
        <label for="subject" class="form-label">Subject Name</label>
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Fill the subject name.." value="{{ $subject->name }}">
        @error('subject')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@else
    <div class="form-group">
        <label for="subject" class="form-label">Subject Name</label>
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Fill the subject name..">
        @error('subject')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif