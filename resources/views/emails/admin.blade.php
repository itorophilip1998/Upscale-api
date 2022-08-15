@extends('./layouts/app')

@section('content')
  

        <section class="contentb text-center">
    <h2 class="m-0">An Email was sent by {{$data["main"]["user_name"]}}</h2>
    <p class="text-left"><b>Email:</b>{{ $data["main"]["user_email"] }}</p>
    <p class="text-left"><b>Phone:</b>{{ $data["main"]["user_phone"] }}</p>
    <p class="text-left"><b>Selected Option:</b>{{ $data["main"]["option"] }}</p>
    <br>

    <p class="border">{{ $data["main"]["message"] }}</p>
    
     
 </section>
      
 

</div>
@endsection