<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <title>迈豆钱包</title>
  <link rel="stylesheet" href="/css/weui.min.css">
  <link rel="stylesheet" href="/css/member.css">
</head>
<body>

<div>
  <img src="/image/bean/top.png" width="100%" height="60px" >
</div>
<span class="span_maidou">{{$total}}&nbsp;迈豆</span>

@foreach($items as $d1)
  <div class="weui_cells_title">{{$d1['title']}}</div>

  <div class="weui_cells">
    @foreach($d1['items'] as $index)
      <div class="weui_cell">
        <div class="weui_cell_hd"><img src="{{$index['icons']}}" alt="" class="image"></div>
        <div class="weui_cell_bd weui_cell_primary">
          <p class="time">{{$index['day']}}<br>{{$index['time']}}</p>
        </div>
        <div class="weui_cell_ft">{{$index['result']}}&nbsp;丨{{$index['action']}}</div>
      </div>
    @endforeach
  </div>
@endforeach

</body>
</html>