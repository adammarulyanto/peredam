<?php
include('header.php')
?>
<!-- Product section-->
<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 zoom-container"><img class="card-img-top mb-5 mb-md-0 zoom-image" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">Shop item template</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <input type="hidden" value='Nama' id="productName">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" id="whatsappButton">
                                <i class="bi bi-whatsapp me-1"></i>
                                Chat to Whatsapp
                            </button>
                            <script>
                            document.getElementById("whatsappButton").addEventListener("click", function() {
                                var contactNumber = "088809329788"; // Replace with the recipient's actual phone number
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include('footer.php')
?>