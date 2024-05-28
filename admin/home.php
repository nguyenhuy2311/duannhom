<div class="page-content-wrapper">
      <div class="page-content">
      <div class="container-fluid xyz">
               <div class="row">
                  <div class="col-lg-12">
                  <h1 class="display-4">TRANG ADMIN CỦA HTQ-BOOK</h1>
                  </div>
               </div>   
            </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
      function toggle() {
            $('.sidebar').toggleClass('active');
            $('.page-content-wrapper').toggleClass('active');
      }

      $(document).ready(function() {
            $(window).bind('resize', function() {
                  if ($(this).width() < 992) {
                        $('.sidebar,.page-content-wrapper').addClass('active');
                        $('.search-bar,.toggler').hide();
                  } else {
                        $('.sidebar,.page-content-wrapper').removeClass('active');
                        $('.search-bar,.toggler').show();
                  }
            }).trigger('resize');
      });
</script>