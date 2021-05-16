@if (isset($student))
{{-- Edit --}}
    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Fill the name.." value="{{ $student->name }}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="no_absen" class="form-label">Absent Number</label>
        <input type="number" name="no_absen" id="no_absen" class="form-control" placeholder="Fill the absent number.." value="{{ $student->no_absen }}">
        @error('no_absen')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture" class="form-label">Picture</label>
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ $student->getImageStudent() }}" alt="{{ $student->name }}" class="img-thumbnail img-fluid">
            </div>
            <div class="col-lg-6">
                <input type="file" name="picture" id="picture" class="form-control" placeholder="Fill the picture..">
            </div>
        </div>
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label">Role</label>
        <div class="selectgroup w-100">
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Siswa Kelas" class="selectgroup-input" @if($student->student_role == 'Siswa Kelas') ? checked : '' @endif>
            <span class="selectgroup-button">Siswa Kelas</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Ketua Kelas" class="selectgroup-input" @if($student->student_role == 'Ketua Kelas') ? checked : '' @endif>
            <span class="selectgroup-button">Ketua Kelas</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Wakil Ketua Kelas" class="selectgroup-input" @if($student->student_role == 'Wakil Ketua Kelas') ? checked : '' @endif>
            <span class="selectgroup-button">Wakil Ketua Kelas</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Sekretaris" class="selectgroup-input" @if($student->student_role == 'Sekretaris') ? checked : '' @endif>
            <span class="selectgroup-button">Sekretaris</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Bendahara" class="selectgroup-input" @if($student->student_role == 'Bendahara') ? checked : '' @endif>
            <span class="selectgroup-button">Bendahara</span>
        </label>
        </div>
        @error('role')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="50">{{ $student->description }}</textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@else
{{-- Create --}}
    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Fill the name..">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="no_absen" class="form-label">Absent Number</label>
        <input type="number" min="1" max="50" name="no_absen" id="no_absen" class="form-control" placeholder="Fill the absent number..">
        @error('no_absen')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" name="picture" id="picture" class="form-control" placeholder="Fill the picture..">
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label">Role</label>
        <div class="selectgroup w-100">
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Siswa Kelas" class="selectgroup-input" checked="">
            <span class="selectgroup-button">Siswa Kelas</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Ketua Kelas" class="selectgroup-input">
            <span class="selectgroup-button">Ketua Kelas</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Wakil Ketua Kelas" class="selectgroup-input">
            <span class="selectgroup-button">Wakil Ketua Kelas</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Sekretaris" class="selectgroup-input">
            <span class="selectgroup-button">Sekretaris</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="role" value="Bendahara" class="selectgroup-input">
            <span class="selectgroup-button">Bendahara</span>
        </label>
        </div>
        @error('role')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="50"></textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif

@push('script')
<script src="{{ asset('assets/vendor/ckeditor-basic-4.16.0/ckeditor.js') }}"></script>
{{-- <script src="{{ asset('assets/vendor/ckeditor-classic-5/ckeditor.js') }}"></script> --}}
<script>
    CKEDITOR.replace('description');
    // ClassicEditor
    //     .create( document.querySelector( '#description' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
</script>
@endpush