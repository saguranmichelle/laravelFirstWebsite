<h1>shoutout to: {{$text}} </h1>

@if($text=="gwapo")
<h1>Gwapo</h1>
@else if($text=="gwapa")
<h1>Gwapa</h1>
@endif

{{ $colors[0]}}
<br />
{{ $colors[1]}}
<br />
{{ $colors[3]}}

@foreach($colors as $colors)
@if($color == "blue")
{{ $color}} 
@else
{{ $color}}
@endif
<br />
@endforeach