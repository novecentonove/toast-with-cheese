    @if ($message = session()->get('info'))
    <div id="snackbar"  class="bg-gray-500 py-6 text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
    
    @push('scripts')
    <script>
        (function myFunction() {
          var x = document.getElementById("snackbar");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        })()
        console.log('script');
    </script>
    @endpush
