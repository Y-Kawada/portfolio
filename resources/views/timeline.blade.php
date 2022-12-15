@extends('layouts.app')

@section('content')
    <div class="navbar navbar-expand-md navbar-light shadow-sm navbar-timeline">
        <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
        </ul>
    </div>
    {!! Form::open(['route' => 'timeline.tweet', 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="col-12 row mb-4">
            @auth
                {{ Form::textarea('tweet', null, ['class' => 'form-control col-9 mr-auto', 'rows' => 3]) }}
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
                {!! nl2br($tweet->tweet) !!}
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
                            {!! nl2br($comment->comment) !!}
                        </div>
                    </div>
                @endforeach
                @auth
                    {!! Form::open(['route' => 'timeline.comment', 'method' => 'POST']) !!}
                        <div class="row mb-4">
                            {{ Form::hidden('tweet_id', $tweet->id)}}
                            {{ Form::textarea('comment', null, ['class' => 'form-control col-6 mr-1', 'rows' => 3]) }}
                            {{ Form::submit(__('comment'), ['class' => 'btn btn-primary col-2']) }}
                        </div>
                    {!! Form::close() !!}
                @else
                    <p class="text-danger">{{__('comment_guest')}}</p>
                @endauth
            </div>
        </div>
    @endforeach
@endsection
