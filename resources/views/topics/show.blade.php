
@extends('layouts.app')
@section('title', $topic->title)
@section('description', $topic->excerpt)
@section('content')
<div class="row">
  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="text-center">作者：{{ $topic->user->name }}</div>
        <hr/>
        <div class="media">
          <div align="center"><a href="{{ route('users.show', $topic->user->id) }}"><img src="{{ $topic->user->avatar }}" width="300px" height="300px" class="thumbnail img-responsive"/></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1 class="text-center">{{ $topic->title }}</h1>
        <div class="article-meta text-center">
          {{ $topic->created_at->diffForHumans() }}
          ⋅<span aria-hidden="true" class="glyphicon glyphicon-comment"></span>{{ $topic->reply_count }}
        </div>
        <div class="topic-body">{!! $topic->body !!}</div>
        <div class="operate">
          <hr/><a href="{{ route('topics.edit', $topic->id) }}" role="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i>編輯</a><a href="#" role="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i>刪除</a>
        </div>
      </div>
    </div>
  </div>
</div>@stop