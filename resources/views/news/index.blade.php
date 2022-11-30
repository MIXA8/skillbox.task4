@extends('layouts.news')

@section('content')
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <p class="card-text">{{ $post->title }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('post.application',$post->slug) }}" type="submit" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">{{ \Carbon\Carbon::create($post->created_at)->format('d F, Y год. Время: H:i') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>



@endsection
