@foreach($news as $new)
<div class='rmarchivtbl rmarchivbox_newsbox'>
    <h3><a href="{{ url('/news', $new->id) }}">{{ $new->title }}</a></h3>
    <div class='content markdown'>
        {!! $new->news_html !!}
    </div>
    <div class='foot'>{{ trans('index.news.submit_by') }} <a href='{{ url('users', $new->user->id) }}'>{{ $new->user->name }}</a> :: <time datetime='{{ $new->created_at }}' title='{{ $new->created_at }}'>{{ \Carbon\Carbon::parse($new->created_at)->diffForHumans() }}</time> - {{ trans('index.news.comments') }}: {{ $new->comments->count() }}</div>
</div>
@endforeach