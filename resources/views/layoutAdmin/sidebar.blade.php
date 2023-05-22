

<section>
    <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
      <div class="sidebar-brand">
          <a href="" style="text-decoration: none; color: white;">
              <h2><span class=""><ion-icon name="school-outline"></ion-icon></span>AssistStar</h2>
          </a>
      </div>
      <div class="sidebar-menu" >
          <ul >
              <li style=" font-weight: bold;">
                  <a href="#" class="active"><span class="las la-home"></span>
                  <span>Accueil</span></a>
              </li>

              <li style="margin-top:17%; font-weight: bold;">
                  <a href="{{route('user.index')}}"><span class=""><ion-icon name="person-circle-outline"></ion-icon></span>
                  <span>Users</span></a>
              </li>

              <li style="margin-top:17%;  font-weight: bold;">
                  <a href="{{route('services.create')}}"><span class=""> <ion-icon name="settings-outline"></ion-icon></span>
                  <span>Services </span></a>
              </li>

              <li style="margin-top:17%;  font-weight: bold;">
                  <a href="{{route('contacts.create')}}"><span class=""> <ion-icon name="mail-unread-outline"></ion-icon></span>
                  <span>Messages </span></a>
              </li>

          </ul>

      </div>
  </div>
</section>
