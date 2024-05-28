</div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script>
      function toggle() {
        $(".sidebar").toggleClass("active");
        $(".page-content-wrapper").toggleClass("active");
      }

      $(document).ready(function () {
        $(window)
          .bind("resize", function () {
            if ($(this).width() < 992) {
              $(".sidebar,.page-content-wrapper").addClass("active");
              $(".search-bar,.toggler").hide();
            } else {
              $(".sidebar,.page-content-wrapper").removeClass("active");
              $(".search-bar,.toggler").show();
            }
          })
          .trigger("resize");
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>