<?php>
@isset($msg)
  <p>variable msg is {{ $msg }}</p>
@endisset

@empty($msg)
  <p>No message!</p>
@endempty

@isset($msg)
  <p>variable msg is {{ $msg }}</p>
@else
  <p>No Message!</p>
@endisset
<?>
