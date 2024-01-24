<?php>

@if($random < 50)
  <p>{{ $random }} is smaller than 50.</p>
@elseif($random < 70)
  <p>{{ $randome }} is greater than 50 smaller than 70.</p>
@else
  <p>{{ $random }} is greater than 70.</p>
@endif

<?>


