<!-- $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer'); -->

<!DOCTYPE html>
<html lang="en">
     <head>
       @include('layouts.Partials.Head')
     </head>
     <body>
       <!-- Page Wrapper -->
      <div id="wrapper">
        @include('layouts.Partials.Sidebar')
        @include('layouts.Partials.Topbar')
        @yield('content')
        @include('layouts.Partials.Footer')
      </div>
      @include('layouts.Partials.Footer-Scripts')

     </body>
</html>