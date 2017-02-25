@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>My Galleries</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @if( $galleries->count() )
                <table class="table table-strapped table-bordered table-responsive">
                    <thead>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($galleries as $gallery)

                        <tr>
                            <td>{{ $gallery->name  }}
                                <span class="pull-right">
                                    {{ $gallery->images()->count() }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ url('gallery/view/'.$gallery->id ) }}">View</a>
                                <span> / </span>
                                <a href="{{ url('gallery/delete/'.$gallery->id ) }}">Delete</a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            @endif
        </div>

        <div class="col-md-4">
            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form" method="post" action="{{ url('gallery/save') }}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input type="text" value="{{ old('gallery_name') }}" name="gallery_name" id="gallery_name" class="form-control" placeholder="Name Of The Gallery">
                </div>
                <button class="btn btn-raised btn-primary">Save</button>
            </form>

        </div>
    </div>

@endsection