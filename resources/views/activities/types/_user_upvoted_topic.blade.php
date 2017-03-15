<li class="list-group-item media" >
    <div class="avatar pull-left">
        <a href="{{ route('users.show', [$activity->user->id]) }}">
            <img class="media-object img-thumbnail avatar" alt="{{ $activity->user->name }}" src="{{ $activity->user->present()->gravatar }}" />
        </a>
    </div>
    <div class="infos">
        <div class="media-heading">
            <a href="{{ route('users.show', [$activity->user->id]) }}">
                {{ $activity->user->name }}
            </a>
            @if ($activity->data['topic_type'] == 'article')
                赞了文章
            @else
                赞了话题
            @endif
             <a href="{{ $activity->data['topic_link'] }}" title="{{ $activity->data['topic_title'] }}">
                {{ str_limit($activity->data['topic_title'], '100') }}
            </a>
            <span class="meta pull-right">
                 <span class="timeago">{{ $activity->created_at }}</span>
            </span>
        </div>
    </div>
</li>