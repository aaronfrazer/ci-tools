<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ base_url('assets/js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<footer class="navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
        <span>My footer here</span>
    </div>
</footer>