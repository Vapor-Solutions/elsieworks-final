<script src="/client/js/vendor/jquery.js"></script>
<script src="/client/js/vendor/modernizer.min.js"></script>
<script src="/client/js/vendor/feather.min.js"></script>
<script src="/client/js/vendor/slick.min.js"></script>
<script src="/client/js/vendor/bootstrap.js"></script>
<script src="/client/js/vendor/text-type.js"></script>
<script src="/client/js/vendor/wow.js"></script>
<script src="/client/js/vendor/aos.js"></script>
<script src="/client/js/vendor/particles.js"></script>
<!-- main JS -->
<script src="/client/js/main.js"></script>
<script src="/js/main.js"></script>

<script src="/client/js/vendor/lightbox.js"></script>
<script src="/client/js/vendor/glightbox.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>
@stack('scripts')
