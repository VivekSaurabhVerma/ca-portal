@extends('dashboard.layout')

@section('javascript')
<script src="https://cdn.tiny.cloud/1/2sfihvk9cmcekl5u5pq3a8qo8a94gp6hp7tvrak5oreoj7id/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#desc'
    });
</script>
@endsection

@section('content')
<div class="container">
    <h1>Create Task</h1>
    <form action="{{ route('storeTask') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" required>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" id="desc" placeholder="Description" name="desc"></textarea>
            @error('desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="points">Points</label>
            <input type="number" class="form-control @error('points') is-invalid @enderror" id="points" placeholder="Points" name="points" required>
            @error('points')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="number">Task Number</label>
            <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" placeholder="Task Number" name="number" required>
            @error('number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="fb_link">Facebook Link</label>
            <input type="text" class="form-control @error('fb_link') is-invalid @enderror" id="fb_link" placeholder="Facebook Link" name="fb_link" required>
            @error('fb_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="insta_link">Instagram Link</label>
            <input type="text" class="form-control @error('insta_link') is-invalid @enderror" id="insta_link" placeholder="Instagram Link" name="insta_link" required>
            @error('insta_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="twitter_link">Twitter Link</label>
            <input type="text" class="form-control @error('twitter_link') is-invalid @enderror" id="twitter_link" placeholder="Twitter Link" name="twitter_link" required>
            @error('twitter_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="linkedin_link">LinkedIn Link</label>
            <input type="text" class="form-control @error('linkedin_link') is-invalid @enderror" id="linkedin_link" placeholder="LinkedIn Link" name="linkedin_link" required>
            @error('linkedin_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>

@endsection
