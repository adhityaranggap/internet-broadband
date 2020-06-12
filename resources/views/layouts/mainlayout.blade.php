<!-- $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer'); -->

<!DOCTYPE html>
<html lang="en">
     <head>
       @include('layouts.Head')
       
     </head>
     <body>
       <!-- Page Wrapper -->
      <div id="wrapper">
        @include('layouts.Sidebar')
        @include('layouts.Topbar')
        @yield('content')
        @include('layouts.Footer')
      </div>
      @include('layouts.Footer-Scripts')
      @stack('script')
     </body>
</html>