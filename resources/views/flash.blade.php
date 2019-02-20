<script>

    @if ($message = Session::get('error'))
        swal("Error", "{{ $message }}", "error");
    @endif


    @if ($message = Session::get('success'))
        swal("Success", "{{ $message }}", "success");
    @endif

    @if ($message = Session::get('info'))
        swal("Information", "{{ $message }}", "info");
    @endif
</script>