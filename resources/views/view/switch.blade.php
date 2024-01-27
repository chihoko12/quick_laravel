@switch($random)
  @case(5)
    <p>Very lucky day!</p>
    @break
  @case(4)
    <p>You may have luck</p>
    @break
  @case(3)
    <p>Normal day.</p>
    @break
  @case(2)
    <p>Stay calm.</p>
    @break
  @default
    <p>umm....</p>
@endswitch


