<p>{{ $code }}</p>
<p>{!! $code !!}</p>
@{{ name }}

<script>
    var app = {{ Illuminate\Support\Js::from($arr) }};
</script>
<br>
@php
    $users = ["Vasya", "Petya", "Borya"];
@endphp

@foreach ($users as $user)
    @if ($loop->first)
        This is the first iteration.
    @endif
    @if ($loop->last)
        This is the last iteration.
    @endif
    <p>This is user {{ $user }}</p>
    <p>Количество итераций в цикле {{ $loop->count }}</p>
    <p>Индекс итерации {{ $loop->index }}</p>
@endforeach
    