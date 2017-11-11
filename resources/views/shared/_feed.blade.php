@if (count($feed_items))
<ol class="statuses">
  @foreach ($feed_items as $status)
    @include('statuses._status', ['user' => $status->user])
  @endforeach

<div class="pull pull-center">
  {{ $feed_items->render() }}
</div>
</ol>
@endif
