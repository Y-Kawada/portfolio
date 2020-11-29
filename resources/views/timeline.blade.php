@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        {!! Form::open(['route' => 'timeline', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="row mb-4">
                @auth
                    {{ Form::text('tweet', null, ['class' => 'form-control col-9 mr-auto']) }}
                    {{ Form::submit('ツイート', ['class' => 'btn btn-primary col-2']) }}
                @endauth
            </div>
            {{-- エラー表示 ここから --}}
            @if ($errors->has('tweet'))
                <p class="alert alert-danger">{{ $errors->first('tweet') }}</p>
            @endif
            {{-- エラー表示 ここまで --}}
        {!! Form::close() !!}

        @if(count($tweets) == 0)
            <p class="text-secondary">まだ投稿はありません。</p>
        @endif
        @foreach ($tweets as $tweet)
            <div class="col-12 border-bottom border-dark">
                <div class="mb-1">
                    <strong>{{ $tweet->name}}</strong> {{ $tweet->created_at}}
                </div>
                <div>
                    {{$tweet->tweet}}
                </div>
                <label for="label{{$tweet->id}}" class="fold_label text-primary">コメント</label>
                <input type="checkbox" id="label{{$tweet->id}}" class="fold" />
                <div class="ml-4 fold_contents">
                    @foreach ($tweet->comments as $comment)
                        <div class="border-top">
                            <div class="mb-1">
                                <strong>{{ $comment->user->name}}</strong> {{ $comment->created_at}}
                            </div>
                            <div class="pl-3">
                                {{$comment->comment}}
                            </div>
                        </div>
                    @endforeach
                    @auth
                        {!! Form::open(['route' => 'timeline.comment', 'method' => 'POST']) !!}
                            <div class="row mb-4">
                                {{ Form::hidden('tweet_id', $tweet->id)}}
                                {{ Form::text('comment', null, ['class' => 'form-control col-6 mr-1']) }}
                                {{ Form::submit(__('comment'), ['class' => 'btn btn-primary col-2']) }}
                            </div>
                        {!! Form::close() !!}
                    @else
                        <p class="text-danger">{{__('comment_guest')}}</p>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
@endsection
