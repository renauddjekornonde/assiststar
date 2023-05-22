@extends('layouts.app')

@section('title','Contacts')
    
@section('content')

<h2 style="height:200px; margin-top:5%; margin-left:0px;
color:	#8c642f; font-family:'Lato',Sans-serif;">Contact Us </h2>

<p style="margin-top:-140px">
    <span style="font-size:13.5pt;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:#7a7a7a;margin-top:-150px;">
        If you are seeking information, advice, or contacts that can be helpful for your 
        new business or idea, don't hesitate to reach out to us. 
        We are always available and eager to hear from you.</span>
</p>


@if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif

<form action="{{route('contacts.store')}}" method="post">
    @csrf


   


   


    <label for="id1" style="color:#734d1f;">Your Name</label>
    <div class="form-floating mb-3">
        <input style="width: 50%;" type="text" class="form-control" name="nom" id="id1" placeholder="Ex: Simon Glain">
    </div>

    <label for="id2" style="color:#734d1f;"> Your Email</label>
    <div class="form-floating mb-3">
        <input style="width: 50%;" type="email" class="form-control" name="email" id="id2" placeholder="Ex: maimouna@gmail.com">
    </div>

    <label for="id3" style="color:#734d1f;">Message</label>
    <div class="form-floating mb-3">
       <textarea style="width: 50%; height:200px"  name="message" id="id3" class="form-control" placeholder="Message" rows="6">
       </textarea>
       </div>

       
       @if(Session::has('success'))
       <div class="alert alert-success">
           {{Session::get('success')}}
       </div>
   @endif
       <div class="d-grid gap-2">
        <button class="btn" type="submit" style="background-color:	#8c642f; color:white;width:50%;">
            Submit informations</button>
        </div>




</form>

@endsection