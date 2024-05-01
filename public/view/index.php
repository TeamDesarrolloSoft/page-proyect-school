<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tech Gear</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="public\css\homePepito.css" />
    <!-- BOT -->
    <script src="https://kit.fontawesome.com/75c41b6d39.js" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="public\css\chatbot.css">

  </head>
  <body>
    <div class="head-section">
      <nav class="navbar navbar-expand-lg py-4 fixed-top" style="background-color: rgba(78, 165, 100, 0.397);">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">Techgears</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item ms-0 ms-md-3">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item ms-0 ms-md-3">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item ms-0 ms-md-3">
                <a class="nav-link" href="#">About </a>
              </li>

              <li class="nav-item ms-0 ms-md-3">
                    <a class="btn btn-outline-success justify-content-lg-end" type="button" href="./login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <header class="hero-section">
        <div class="container">
          <div class="row align-items-center py-4 g-5">
            <div class="col-12 col-md-6">
              <div class="text-center text-md-start">
                <h1 class="display-md-2 display-4 fw-bold text-dark pb-2">
                  <span class="text-primary">Discover </span>the Future of Tech
                </h1>
                <p class="lead">
                  Explore our latest gadgets and accessories designed to elevate
                  your digital lifestyle.
                </p>
                <button
                  class="btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium"
                  type="button"
                >
                  Shop Now
                </button>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <img
                src="public\img\hero.webp"
                class="img-fluid"
                alt="a man using vr gadget"
              />
            </div>
          </div>
        </div>
      </header>
    </div>

    <div class="container">
      <div class="row align-items-center gx-3 gy-5 py-5 mt-5">
        <div class="col-12 col-md-12 col-lg-5">
          <img
            src="public\img\img-1.webp"
            class="img-fluid mx-auto d-block"
            alt="a man using vr gadget"
          />
        </div>
        <div class="col-12 col-md-12 text-center text-lg-start col-lg-7">
          <h2 class="fw-bold text-primary fs-1 pb-3">About TechGear Hub</h2>
          <p class="about-text">
            TechGear Hub is at the forefront of technology innovation, curating
            a collection of the latest gadgets and accessories to elevate your
            digital lifestyle. We believe in the power of technology to enhance
            everyday experiences, and our mission is to bring cutting-edge
            products to tech enthusiasts around the world.
          </p>
          <p class="about-text">
            With a focus on quality, functionality, and style, TechGear Hub
            sources products from leading manufacturers and emerging tech
            innovators. Our team of experts carefully selects each item to
            ensure it meets our high standards and aligns with the ever-evolving
            needs of our diverse community of customers.
          </p>
          <button
            class="btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium"
            type="button"
          >
            Read More About Now
          </button>
        </div>
      </div>
    </div>
    <div class="features-section py-5">
      <div class="container">
        <h2 class="fs-1 fw-bold text-center pt-5 pb-5 text-primary">
          Key Features
        </h2>
        <div class="row g-5 pb-5">
          <div class="col-md-6 col-lg-4">
            <div class="card px-3 py-4 shadow-sm">
              <ion-icon class="ionicons" name="bulb-outline"></ion-icon>
              <h3 class="f5">Innovative Technology</h3>
              <p class="card-text lead">
                Explore products featuring the latest and most innovative
                technologies.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card px-3 py-4 shadow-sm blue-bg">
              <ion-icon
                class="ionicons"
                name="shield-checkmark-outline"
              ></ion-icon>
              <h3 class="f5">Quality Assurance</h3>
              <p class="card-text lead">
                Our team ensures that every product meets high-quality
                performance.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 offset-md-3 offset-0 offset-lg-0">
            <div class="card px-3 py-4 shadow-sm">
              <ion-icon class="ionicons" name="hourglass-outline"></ion-icon>
              <h3 class="f5">Timely Delivery</h3>
              <p class="card-text lead">
                Experience prompt and reliable delivery services to get your
                tech gear right now.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <h2 class="fs-1 fw-bold text-primary text-center pb-5">
            Our Products
          </h2>
          <ul
            class="nav nav-tabs d-flex flx-wrap justify-content-center"
            id="myTab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active me-md-3 me-1 text-dark"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home-tab-pane"
                type="button"
                role="tab"
                aria-controls="home-tab-pane"
                aria-selected="true"
              >
                All
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link me-md-3 me-1 text-dark"
                id="vr"
                data-bs-toggle="tab"
                data-bs-target="#vr-tab-pane"
                type="button"
                role="tab"
                aria-controls="profile-tab-pane"
                aria-selected="false"
              >
                Virtual Reality
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link me-md-3 me-1 text-dark"
                id="headphones-tab"
                data-bs-toggle="tab"
                data-bs-target="#headphones-tab-pane"
                type="button"
                role="tab"
                aria-controls="contact-tab-pane"
                aria-selected="false"
              >
                Headphones
              </button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active"
              id="home-tab-pane"
              role="tabpanel"
              aria-labelledby="home-tab"
              tabindex="0"
            >
              <div class="row g-4 mt-5 justify-content-center align-items-center">
                <div class="col-12 col-md-4">
                  <img
                    src="public\img\headphones-1.webp"
                    alt=""
                    class="img-fluid  d-block mx-auto"
                  />
                </div>
                <div class="col-12 col-md-4">
                  <img src="public\img\vr-1.webp" alt="" class="img-fluid  d-block mx-auto" />
                </div>
                <div class="col-12 col-md-4">
                  <img src="public\img\vr-2.webp" alt="" class="img-fluid  d-block mx-auto" />
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="vr-tab-pane"
              role="tabpanel"
              aria-labelledby="profile-tab"
              tabindex="0"
            >
              <div class="row mt-5 g-4">
                <div class="col-12 col-md-4">
                  <img src="public\img\vr-1.webp" alt="" class="img-fluid" />
                </div>
                <div class="col-12 col-md-4">
                  <img src="public\img\vr-2.webp" alt="" class="img-fluid" />
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="headphones-tab-pane"
              role="tabpanel"
              aria-labelledby="headphones-tab"
              tabindex="0"
            >
              <div class="row g-4 mt-5">
                <div class="col-12 col-md-4">
                  <img
                    src="public\img\headphones-1.webp"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5 mb-5">
      <div class="row">
        <div class="col-12">
          <h2 class="fw-bold text-primary fs-1 pb-3 text-center">
            How it works
          </h2>

          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button fs-3 text-dark fw-medium"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  How can I browse and explore products on TechGear Hub?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p class="lead">
                    Ordering your favorite tech gear from TechGear Hub is a
                    breeze. Once you've found the perfect product, simply add it
                    to your cart and proceed to checkout. Our secure and
                    efficient checkout process allows you to review your order,
                    enter shipping details, and choose from multiple payment
                    options. Rest assured, your transaction is protected, and
                    your order will be swiftly processed.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed fs-3 text-dark fw-medium"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  What is the ordering process like?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p class="lead">
                    Ordering your favorite tech gear from TechGear Hub is a
                    breeze. Once you've found the perfect product, simply add it
                    to your cart and proceed to checkout. Our secure and
                    efficient checkout process allows you to review your order,
                    enter shipping details, and choose from multiple payment
                    options. Rest assured, your transaction is protected, and
                    your order will be swiftly processed.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed fs-3 text-dark fw-medium"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  How does TechGear Hub ensure customer satisfaction?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p class="lead">
                    At TechGear Hub, customer satisfaction is our top priority.
                    We are committed to delivering high-quality products and
                    exceptional service. Our team carefully inspects and
                    packages each order, ensuring it reaches you in perfect
                    condition. Additionally, our responsive customer support is
                    ready to assist with any inquiries or concerns you may have.
                    Join our community of satisfied customers who trust TechGear
                    Hub for a seamless and enjoyable shopping experience.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- FOOTER -->
    <footer class="footer-section">
      <p class="text-center py-5 mb-0">
        &copy; 2023 TechGear Hub. All rights reserved.
      </p>
    </footer>
    <!-- BOT -->

    <button id="toggleButton"><i class="fa-solid fa-robot"></i></button>
    <div id="burbuja">
        <div class="wrapper">
            <div class="title">ChatBot "Pepito Perez"</div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="msg-header">
                        <p>Hola, ¿cómo puedo ayudarte?</p>
                    </div>
                </div>
            </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                    <button id="send-btn">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // iniciar el código ajax
                $.ajax({
                    url: './app/trigger/chatbot.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });

    document.getElementById("data").addEventListener("keyup", function(event) {
        if (event.keyCode === 13) { 
            event.preventDefault();
            document.getElementById("send-btn").click();
        }
    });

    document.getElementById("toggleButton").addEventListener("click", function() {
        var div = document.getElementById("burbuja");
        if (div.style.display === "none" || div.style.display === "") {
            div.style.display = "block"; 
            div.style.position = "fixed"; // Ajusta la posición al mostrar
            div.style.zIndex = "9999"; // Ajusta el z-index al mostrar
        } else {
            div.style.display = "none";
        }
    });
</script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
  
</html>
