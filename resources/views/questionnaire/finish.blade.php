@extends('questionnaire.main')

@section('css')
  <style>
    .background-img {
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      background-color: rgb(140, 207, 239);
    }
  </style>
@endsection

@section('content')
  <div style="z-index: -1">
    <img class="background-img" src="/image/questionnaire/背景-2.png" alt="">
  </div>
  <a style="z-index: 9999" href="#">
    <img class="img-responsive" src="/image/questionnaire/finish.png" alt="完成调查问卷">
  </a>
@endsection