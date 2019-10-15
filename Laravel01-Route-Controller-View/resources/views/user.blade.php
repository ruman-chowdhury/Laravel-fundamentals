<?php
$arr = array('Ruman chowdhury', 'dhaka', 25);

?>

{{-- this is blade template --}}
@foreach ($arr as $value)
    {{ $value }}<br>
@endforeach
