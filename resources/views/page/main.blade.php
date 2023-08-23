@php
    $number1 = 333;
@endphp
{{-- Эта штука почему-то не работает. Надо разобраться! --}}
@include('page.header',['number' => '333'] )
<h1>Здесь основное содержимое</h1>
@include('page.footer')


