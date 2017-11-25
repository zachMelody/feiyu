@php($subTitle = isset($activeTag) ? $activeTag->name() : null)
@title('Forum' . (isset($subTitle) ? ' > ' . $subTitle : ''))

@extends('layouts.default')

@section('content')
    <h1>找需求</h1>
    <hr>

    <div class="row forum">
        <div class="col-md-3">
            {{ Form::open(['route' => 'forum', 'method' => 'GET']) }}
                <div class="form-group">
                    {{ Form::text('search', $search ?? null, ['class' => 'form-control', 'placeholder' => 'Search for threads...']) }}
                </div>
                <button class="btn btn-success btn-block" type="submit">搜索</button>
            {{ Form::close() }}

            <!--a class="btn btn-success btn-block" href="{{ route('threads.create') }}">创建我的需求</a-->

            @include('layouts._ads._forum_sidebar')

            <h3>Tags</h3>
            <div class="list-group">
                <a href="{{ route('forum') }}" class="list-group-item {{ active('forum*', ! isset($activeTag) || $activeTag === null) }}">All</a>

                @foreach (App\Models\Tag::orderBy('name')->get() as $tag)
                    <a href="{{ route('forum.tag', $tag->slug()) }}"
                       class="list-group-item{{ isset($activeTag) && $tag->matches($activeTag) ? ' active' : '' }}">
                        {{ $tag->name() }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            @include('layouts._ads._carbon')

            @if (count($threads))
                <style type="text/css">.diy-box{margin-bottom: 50px;box-shadow: 0 4px 12px 0 rgba(62,116,162,0.15);}</style>
                @foreach ($threads as $thread)
                    <div class="panel panel-default diy-box">
                        <div class="panel-heading thread-info">
                            @if (count($thread->replies()))
                                @include('forum.threads.info.avatar', ['user' => $thread->replies()->last()->author()])
                            @else
                                @include('forum.threads.info.avatar', ['user' => $thread->author()])
                            @endif

                            <div class="thread-info-author">
                                @if (count($thread->replies()))
                                    @php($lastReply = $thread->replies()->last())
                                    <a href="{{ route('profile', $lastReply->author()->username()) }}" class="thread-info-link">{{ $lastReply->author()->name() }}</a> 回复于
                                    {{ $lastReply->createdAt()->diffForHumans() }}
                                @else
                                    <a href="{{ route('profile', $thread->author()->username()) }}" class="thread-info-link">{{ $thread->author()->name() }}</a> 发布于
                                    {{ $thread->createdAt()->diffForHumans() }}
                                @endif
                            </div>

                            @include('forum.threads.info.tags')
                        </div>

                        <div class="panel-body">
                            <a href="{{ route('thread', $thread->slug()) }}">
                                <span class="badge pull-right" style="background-color: #03a9f4;">{{ count($thread->replies()) }}</span>
                                <h4 class="media-heading">{{ $thread->subject() }}</h4>
                                <hr />
                                <p>{{ $thread->excerpt() }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="text-center">
                    {!! $threads->render() !!}
                </div>
            @else
                <div class="alert alert-info text-center">
                    No threads were found!
                    <a href="{{ route('threads.create') }}" class="alert-link">Create a new one.</a>
                </div>
            @endif
        </div>
    </div>
@endsection
