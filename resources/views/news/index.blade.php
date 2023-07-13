<h2>News list</h2>
@forelse($newsList as $news)
    <div>
        <h4><a href="{{route('news.show', ['id'=>$news['id']])}}">{{$news['title']}}</a> </h4>
        <br>
        <img src="{{$news['image']}}" alt="news image"/>
        <p><em>{{$news['author']}}</em> &nbsp; ({{$news['created_at']}})</p>
        <p>{!! $news['description']!!}</p>
    </div><hr/> <br/>
@empty
    <h2>Новостей нет</h2>
@endforelse

