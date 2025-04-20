<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/admin/css/soft-ui-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  @stack('styles')
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcCAMAAADUMSJqAAAAsVBMVEX///8gR37HxsUgSX8iSoMAACoQN2XDw8MAAAB1dHFoaGjJycnR0dHh4OBfXltiYmJQUFAIL2L4+Pi5ubmkpKScnJyxsbGVlZUYQ3zX19eqqqpidJ3Z3uMAO3jT2eFxgqQANnfr6+uHh4cAH00RN2oALGNMZo1nep0vUYKYpLy0vs7L0Nl3iqq/xtMAIWqIm7IALXWQnr2IlK+os8RGXotWb5MADWmaprZqg6A3UokAAA1y1hQmAAACVElEQVRoge2Vi26bMBRAnTQbaaFrZxPz8AtnHWAMzYJh7fb/HzaTkKqVSoI0VZo0HxJy78UcXRtHAOBwOBwOh8PhcFxm82Uud/eTRBPy628Pn2fxsEbB+yThzZT86+pqFqv17dTs/TPyxSyc3Mk/Wh4PvNa8zf5K/j0npCjY4upkKVX/nn2QU045f7m10hJektegMeCRMRYzZrtmMTcZs79sTIfvcNXKV7sfuwyOd+5b0epLy5LBfN82nKqW61hQXhpDNCeKUs4KSoXgvONcCivXIJO8KQpJCanKriGH5JycQQ1FD8s9ENzAummMKUyjV6CUBPaiBbVulC7IYc0zCSpVKCUqWlegrhpF9uc7j/Mup48dUMZAY8yTqrTiDP6kPSgXHbAlZbL4JCdqv5O7RdM2oG6IatsLa85YBURGDX3WlX6StOIaPgEF7AR4a0s7KrvDbmkeFShq0j3vi7Yj9JcQdV6e67wjfRwT0sWszllWE9b3sbA5yXuSCcKYIBkh5UEuKQVAUwo1h/ZsM5tc2Ofj3h6Dwyc+BafSP/gPdXIn/y/kM1nLKXkwJb/5/Wkm6/u7Ce6n5MlyNt4kydScPhjpBa+S4RQc35PDE4SHglz6x8sQvoz0xxEXSNEmwDDESRqkPoJLFIHIJl7oIRR5oY8lwBh5SHre0ktt4KcAo/Q2wWGAMDwvx8s0RBL70RZvcArDEIFNsr1GaBMFm9SLMAIIBVsPbtOlTVCYYrhJfRltt7aDGd2PC4EAfFsZApyMheMxhsch8ELjDofD4XA4HA7HC38Aro9WZ1yiPnMAAAAASUVORK5CYII=" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Freelancer Tasfia </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

    @include("layout.admin.aside")
{{-- 
    <div class="sidenav-footer mx-3 ">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')"></div>
        <div class="card-body text-start p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold">Please check our docs</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
          </div>
        </div>
      </div>
      <a class="btn btn-primary mt-3 w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree">Upgrade to pro</a>
    </div> --}}
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include("layout.admin.nav")
    <div class="container-fluid py-4">
      <div>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

      </div>
        @yield('content')
        @include("layout.admin.footer")
      </div>
 
  </main>
  {{-- <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn btn-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn btn-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div> --}}
  <!--   Core JS Files   -->
  <script src="{{asset('assets/admin/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/chartjs.min.js')}}"></script>

   
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
    @stack('scripts')
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/admin/js/soft-ui-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="https://kit.fontawesome.com/d479b27924.js" crossorigin="anonymous"></script>
</body>

</html>