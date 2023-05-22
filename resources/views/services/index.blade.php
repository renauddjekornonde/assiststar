@extends('layouts.app')

@section('title')

@endsection

@section('content')
<h2 style="height:200px; margin-top:5%; margin-left:0px;
color:	#8c642f; font-family:'Lato',Sans-serif;">

<strong>New Business Review</strong>
    </h2>

    <p style="margin-top:-150px">
         <span style="font-size:13.5pt;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:#7a7a7a;margin-top:-150px;">
            STARTUP ASSIST SEN may be able to provide guidance on creating a business plan and developing a strategy to achieve your goals.</span>
    </p>

    <p style="margin-top:30px">
        <span style="font-size:13.5pt;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:#7a7a7a;margin-top:-150px;">
            Please add the details you want to share with an experienced Business Specialist.</span>
   </p>


   <form action="{{ route('services.store')}}" method="post">
    @csrf


    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

    <label for="nom" style="color:#734d1f;">Your Name</label>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Ex: Maimouna">

    </div>

    <label for="email" style="color:#734d1f;">Your Email</label>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Ex: startupAssist@gmail.com">

    </div>

    <label for="titre" style="color:#734d1f;">Business title</label>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="titre" id="titre" placeholder="Ex: startupAssist">

    </div>

    <label for="id2" style="color:#734d1f;">Description</label>
    <div class="form-floating mb-3">
       <textarea name="description" id="id2" class="form-control" placeholder="Description" rows="3">
       </textarea>

    </div>

    <label for="id3" style="color:#734d1f;">Business avantages</label>
    <div class="form-floating mb-3">
        <textarea name="avantage" id="id3" class="form-control" placeholder="Avantages" rows="3">
        </textarea>

     </div>

     <label for="id4" style="color:#734d1f;">Business reasons</label>
     <div class="form-floating mb-3">
        <textarea name="raison" id="id4" class="form-control" placeholder="raisons" rows="3">
        </textarea>

     </div>

     <label for="id5" style="color:#734d1f;">Solo Trader or Limited Companies</label>
     <div class="form-floating mb-3">
    <select name="type" id="id5" class="form-control" >
    <option value="solo trader">Solo Trader</option>
    <option value="limited companies">Limited Companies</option>
    <option value="Undecided">Undecided</option>
    </select>
     </div>


     <label for="id6" style="color:#734d1f;">Target market / Potential Costumers</label>
     <div class="form-floating mb-3">
         <input type="text" class="form-control" name="cible" id="id6" placeholder="Ex: startupAssist">

     </div>


     <label for="id7" style="color:#734d1f;">Do you have a website ?</label>
     <div class="form-floating mb-3">
    <select name="website" id="id7" class="form-control" >
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>
     </div>


     <label for="id8" style="color:#734d1f;">Do you have a written Business plan ?</label>
     <div class="form-floating mb-3">
    <select name="business_plan" id="id8" class="form-control" >
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>
     </div>

     <label for="id9" style="color:#734d1f;">Do you need funding to progress your business ?</label>
     <div class="form-floating mb-3">
    <select name="fond" id="id9" class="form-control" >
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>
     </div>


     <div class="d-grid gap-2">
        <button class="btn" type="submit" style="background-color:	#8c642f; color:white">
            Submit details</button>
        </div>






   </form>

@endsection

