@foreach ($collection as $item)
<div class="row">
   <div class="col-md-4 text-center">
      <h1 class="events">{{$item['strAlternate']}}</h1>
   </div>
   <div class="col-md-4 text-center">
      <h3 class="register">{{$item['strDescriptionEN']}}</h3>
   </div>
</div>
    @endforeach

