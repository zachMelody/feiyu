@if (count($thread->tags()))
    <div class="thread-info-tags">
        @foreach ($thread->tags() as $tag)
            <a href="{{ route('forum.tag', $tag->slug()) }}">
                <span class="label label-default" style="background-color: rgb(239, 86, 79);">{{ $tag->name() }}</span>
            </a>
        @endforeach
    </div>
@endif