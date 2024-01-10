
@extends('layouts.main')
@section('content')
    @if(Auth::user())
        @if(Auth::user()->is_admin)
            <a class="float-center d-block mt-2 mr-1 text-center text-dark text-decoration-none" href="{!! route('admin.parser')!!}">
                <h5>
                    Парсить новости
                </h5>
            </a>
            <a class="float-center d-block mt-2 mr-1 text-center text-dark text-decoration-none" href="{{route('admin.index')}}">В админку</a>
        @endif
    @endif
    @forelse ($newsList as $news)
        <div class="col">
        <div class="card shadow-sm">
            <img src="{{ Storage::url($news->image) }}" alt="">
            <div class="card-body">
                <a href="{!! route('news.show',[
            'news' => $news
            ])!!}">

                    <h5>
                        {!! $news->title !!}
                    </h5>
                </a>

                <p>Статус :<em>{!!$news->status !!}</em></p>
                <p>Автор :<em>{!!$news->author  !!}</em></p>
                <p>{!! $news->description !!}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</button>
                    </div>
                    <small class="text-muted">9 минут</small>
                </div>
            </div>

        </div>
    </div>


    @empty
        <h2>Новостей нет</h2>
    @endforelse
    {{$newsList->links()}}
@endsection




