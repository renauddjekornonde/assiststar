
<section>
    <div class="cards">
             {{-- <div class="card-single">
                 <div>
                     <h1>{{$materiels->count()}}</h1>
                     <span>Services</span>
                 </div>
                 <div>
                     <span class=""><ion-icon name="logo-steam"></ion-icon></span>
                 </div>
             </div> --}}

             <div class="card-single">
                 <div>
                     <h1>{{$messages->count()}}</h1>
                     <span style=" font-weight: bold;">Messages</span>
                 </div>
                 <div>
                     <span class=""><ion-icon name="mail-unread-outline"></ion-icon></span>
                 </div>
             </div>

             <div class="card-single">
                 <div>
                     <h1>{{$users->count()}}</h1>
                     <span style=" font-weight: bold;">User</span>
                 </div>
                 <div>
                     <span class=""><ion-icon name="person-circle-outline"></ion-icon></span>
                 </div>
             </div>

             <div class="card-single">
                 <div>
                     <h1>{{$services->count()}}</h1>
                     <span style=" font-weight: bold;">Services</span>
                 </div>
                 <div>
                     <span class=""><ion-icon name="settings-outline"></ion-icon></span>
                 </div>
             </div>

         </div>
</section>
