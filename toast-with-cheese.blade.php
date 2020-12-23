@if ($message = session()->get('info'))
<div id="toastwithcheese"  class="bg-gray-500 py-6 text-center">
    <button type="button" onclick="closeToast(event)" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

{{-- rimane invisibile sulla schermata (rivedere) --}}

@push('scripts')
<script>
    (function toast() {
      setTimeout(() => {
        const toast = document.getElementById("toastwithcheese");

        // choose delay
        // const time = 3000; // short
        const time = 5500; // long

        let timeClass = time == 5500 ? "show2" : "show";

        toast.classList.add(timeClass);
        setTimeout(function(){
          toast.className = toast.className.replace(timeClass, "");
        }, time);
      }, 500);
    })()
    function closeToast(e){
      e.target.parentElement.classList.remove('show2');
      e.target.parentElement.classList.remove('show');
    }
</script>
@endpush
