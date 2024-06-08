

<!DOCTYPE html>
<html lang="en">
  @include('layouts.user.head')

  <body>
    @include('layouts.user.nav')
    @yield('content')
    @include('layouts.user.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>

