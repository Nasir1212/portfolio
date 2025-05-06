<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <div class="text-center">
        <div class="author-img" style="background-image: url({{asset("Storage/$site_info->profile_img")}});"></div>
        <h1 id="colorlib-logo"><a href="#">{{ $site_info->name }}</a></h1>
        <span class="position"><a href="#"> {{ $site_info->slug }} </a> </span>
    </div>
    @if (Request::is('/')) 
   
    @include('layout.user.nav')
    @else

    @include('layout.user.about')
@endif
    <hr>
    <div class="colorlib-footer">
        <p><small>&copy; </small> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <script>document.write(new Date().getFullYear());</script>
  FreelancerTasfia.com. 
  <br/>
  All rights reserved.
  </p>

        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://wa.me/1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a></li>

            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div>

</aside>