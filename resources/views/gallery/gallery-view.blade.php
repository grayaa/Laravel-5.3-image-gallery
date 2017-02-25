@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $gallery->name  }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="gallery_images">
                <ul>
                    @foreach($gallery->images as $image)
                        <li>
                            <a data-lightbox="mygallery" href="{{ url($image->file_path) }}" target="_blank">
                                <img src="{{ url( 'gallery/images/thumbs/',$image->file_name) }}">
                            </a>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('image/do-upload') }}" class="dropzone" id="addImages">
                {{ csrf_field() }}

                <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
            </form>
            <br>
            <a href="{{ url('gallery/list') }}" class="btn btn-raised btn-primary">Back</a>

        </div>
    </div>

@endsection