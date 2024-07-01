<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="#about">About Us</a>
                <a class="btn btn-link" href="#contact">Contact Us</a>
                <a class="btn btn-link" href="#menu">Menu</a>
            </div>
            <div class="col-lg-6 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Gbazango Plaza, Arab Rd, near Customary Court, Kubwa, 901101, Federal Capital Territory</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+234 813 717 2816</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>bigcubes1@gmail.com</p>
                {{-- <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://wa.me/+2348137172816?text=Hello! Welcome to BigCubes, how can we be of service to you?" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                </div> --}}
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>4PM - 09PM</p>
            </div>
        </div>
    </div>
    <p class="text-sm text-center p-3">Developed by <a style="text-decoration: none; color:#fb923c" href="https://wa.me/+2347063137059?text=Hi my name is Samuel, it's nice meeting you. How can I be of service to you?" target="_blank">Samuel</a></p>
</p>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('front/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('front/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('front/js/main.js')}}"></script>

@livewireScripts


<script>
$(document).ready(function () {
  // Add smooth scrolling to all links
  $("a").on("click", function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        800,
        function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        }
      );
    } // End if
  });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const minusBtns = document.querySelectorAll('.js-btn-minus');
    const plusBtns = document.querySelectorAll('.js-btn-plus');
    const quantityInputs = document.querySelectorAll('.form-control.text-center');

    minusBtns.forEach((minusBtn, index) => {
        minusBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInputs[index].value);
            if (currentValue > 1) {
                quantityInputs[index].value = currentValue - 1;
            }
        });
    });

    plusBtns.forEach((plusBtn, index) => {
        plusBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInputs[index].value);
            quantityInputs[index].value = currentValue + 1;
        });
    });
});
</script>

</body>

</html>
