@if (isset($article))
    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Fill the title.." value="{{ $article->title }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture" class="form-label">Thumbnail</label>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $article->getImageArticle() }}" alt="{{ $article->slug }}" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <input type="file" name="picture" id="picture" class="form-control" placeholder="Fill the picture..">
            </div>
        </div>
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control" placeholder="Fill the content..">{!! $article->content !!}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@else
    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Fill the title..">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture" class="form-label">Thumbnail</label>
        <input type="file" name="picture" id="picture" class="form-control" placeholder="Fill the picture..">
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control" placeholder="Fill the content.."></textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif


@push('script')
<script src="{{ asset('assets/vendor/ckeditor-basic-4.16.0/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endpush