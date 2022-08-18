@extends('./layouts/app')

@section('content')
  

        <section class="contentb text-left">

    <h2 class="m-0">Dear {{ $data["main"]["user_name"] }},</h2>
    <p>Thank you for contacting the Upscale Advisory team.
We  shall get in touch with you as soon as possible
</p>
    
<br/>
<br/>
<br/>
<p >
Best regards,
Your Upscale Team.
</p>
        </section>
     
 

</div>
@endsection