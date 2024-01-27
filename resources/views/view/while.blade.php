@php
 $i = 0;
@endphp

@while ($i < 6)
  @php
    $i++;
  @endphp
  <h{{ $i }}>No. {{ $i }} </h{{ $i }}>
@endwhile
