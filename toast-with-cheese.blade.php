@if ($message = session()->get('info'))
<div id="toastwithcheese"  class="bg-gray-500 py-6 text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@push('scripts')
<script>
    (function toast() {
      setTimeout(() => {
        const toast = document.getElementById("toastwithcheese");
        toast.className = "show";
        setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
      }, 500);
    })()
    console.log('script');
</script>
@endpush
