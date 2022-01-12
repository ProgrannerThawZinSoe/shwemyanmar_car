<div class="nav-side-menu">
    <div class="brand">ShweMyanmar CarShowRoom</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                 
                  
                </li>

                <li>
                <a href="/" target="_blank">
                   Web page
                  </a>
                </li>

                <li>
                <a href="#">
                  {{ auth()->user()->name }}
                  </a>
                </li>
                

                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="#"><i class="fa fa-phone fa-lg"></i> Contact From Seller <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">All</a></li>
                    <li><a href="#">New</a></li>
                    <li><a href="#">Approve</a></li>
                    <li><a href="#">On Market</a></li>
                    <li><a href="#">Sold Out</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Order <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>All</li>
                  <li>New</li>
                  <li>Success</li>
                  <li>History</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Category and Car List <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="/admin/category">Category</a></li>   
                  <li>Car List</li>
                </ul>

                <li data-toggle="collapse" data-target="#member" class="collapsed">
                  <a href="#"><i class="fa fa-user fa-lg"></i> Member <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="member">
                    <li> <a href="/admin/member/all">Member List </a></li>
                  <li>Buyer</li>
                </ul>
              

             
                
                <li data-toggle="collapse" data-target="#web" class="collapsed">
                  <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Web Setting <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="web">
               
                  <li>Page Content</li>
                  <li>SEO</li>
                  <li>Privacy Page</li>
                  <li>Color and Fonts</li> 
                </ul>

                <li data-toggle="collapse" data-target="#acc" class="collapsed">
                  <a href="#"><i class="fa fa-sliders fa-lg"></i> Setting <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="acc">
                  <li>Account Setting</li>
                  <li> <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                </ul>

            </ul>
     </div>
</div>