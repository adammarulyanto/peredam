
        <!-- Footer-->
        <!-- Footer-->
        <section class="bg-light p-0 m-0 border-top overflow-hidden">
            <div class="container">
              <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5">
                <div class="col mb-3">
                  <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img class="logo-footer" src="assets/img/logo_header.png">
                  </a>
                  <p class="text-body-secondary">&copy; 2023</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                  <h5>Social</h5>
                  <ul class="nav list-unstyled social">
                  <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter text-dark"></i></a></li>
                  <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram text-dark"></i></a></li>
                  <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook text-dark"></i></a></li>
                </ul>
                </div>

                <div class="col mb-3">
                  <h5>Menu</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Layanan</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Proyek</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Berita</a></li>
                  </ul>
                </div>

                <div class="col mb-3">
                  <h5>Layanan</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQ</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Syarat & Ketentuan</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
                  </ul>
                </div>
              </footer>
            </div>
        </section>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Bertanya</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    </body>
    <script>
        const zoomContainer = document.querySelector('.zoom-container');
        const zoomImage = document.querySelector('.zoom-image');

        zoomContainer.addEventListener('mousemove', (e) => {
        const { left, top, width, height } = zoomContainer.getBoundingClientRect();
        const x = (e.clientX - left) / width;
        const y = (e.clientY - top) / height;

        zoomImage.style.transform = `scale(2) translate(-${x * 50}%, -${y * 50}%)`;
        });

        zoomContainer.addEventListener('mouseleave', () => {
        zoomImage.style.transform = 'scale(1) translate(0%, 0%)';
        });
    </script>
    <script>
        document.getElementById("whatsappButton").addEventListener("click", function() {
            var contactNumber = "+6288809329788"; // Replace with the recipient's actual phone number
            var productName = document.getElementById("productName").value;
            var quantity = document.getElementById("inputQuantity").value;
            var message = "Hello, Saya ingin Bertanya perihal product "+productName+"\nSebanyak: "+quantity;
            
            // Encode the message and contact number for the URL
            var encodedMessage = encodeURIComponent(message);
            
            // Construct the WhatsApp URL
            var whatsappUrl = "https://api.whatsapp.com/send?phone=" + contactNumber + "&text=" + encodedMessage;
            
            // Open the WhatsApp chat window
            window.open(whatsappUrl);
        });
    </script>
</html>