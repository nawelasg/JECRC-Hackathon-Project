<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="global_form.css" />
    <link rel="stylesheet" href="form.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="tv-1">
      <div class="main">
        <div class="div-1">
          <b class="file-the-fir">FILE THE FIR</b>
          <div class="lorem-ipsum-is">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.
          </div>
        </div>
        <div class="form">
          <form class="form-child" method="POST" action="{{ route('submit-form') }}">
            @csrf
            <b class="register-your-fir">Register your FIR</b>
            <div class="fields">
              <div class="name-button">
                <input
                  class="name-button-child"
                  name="Full Name"
                  placeholder="Full Name"
                  type="text"
                />
              </div>
              <div class="father-name-button">
                <input
                  class="name-button-child"
                  name="Father's Name"
                  placeholder="Father's Name"
                  type="text"
                />
              </div>
              <div class="address-incident-button">
                <textarea
                  class="address-incident-button-child"
                  name="Address of Incident"
                  placeholder="Address of Incident"
                ></textarea>
              </div>
              <div class="incident-information-button">
                <textarea
                  class="address-incident-button-child"
                  name="Incident Information"
                  placeholder="Incident Information"
                ></textarea>
              </div>
              <div class="district-button">
                <input
                  class="district-button-child"
                  name="District"
                  placeholder="District"
                  type="text"
                />
              </div>
              <div class="city-button">
                <input
                  class="district-button-child"
                  name="City"
                  placeholder="City"
                  type="text"
                />
              </div>
              <div class="state-button">
                <input
                  class="district-button-child"
                  name="State"
                  placeholder="State"
                  type="text"
                />
              </div>
              <div class="nationality-button">
                <input
                  class="district-button-child"
                  name="Nationality"
                  placeholder="Nationality"
                  type="text"
                />
              </div>
              <div class="state-button1">
                <input
                  class="district-button-child"
                  name="Phone No."
                  placeholder="Phone No."
                  type="number"
                />
              </div>
              <div class="alternate-phone-no">
                <input
                  class="district-button-child"
                  name="Alternate Phone No."
                  placeholder="Alternate Phone No."
                  type="text"
                />
              </div>
              <div class="aadhar-card">
                <input
                  class="name-button-child"
                  name="Aadhar Card"
                  placeholder="Aadhar Card"
                  type="text"
                />
              </div>
            </div>
            <div class="browse-button">
              <button class="browse-button-child"></button>
              <button class="browse">Browse</button>
              <div class="upload-signature">Upload Signature</div>
            </div>
            <div class="submit-button">
              <button class="submit-button-child"></button>
              <button class="submit">SUBMIT</button>
            </div>
          </form>
</div>

      </div>
      <div class="footer">
        <div class="footer-child"></div>
        <div class="departments">Departments</div>
        <div class="profile">Profile</div>
        <img
          class="rajasthan-police-logo-2-icon"
          alt=""
          src="./public/rajasthan-police-logo-2@2x.png"
        />

        <div class="home">Home</div>
        <div class="contact-us">Contact Us</div>
        <div class="help-section">Help Section</div>
        <div class="fir-status">FIR Status</div>
        <div class="careers">Careers</div>
        <div class="case-studies">Case Studies</div>
        <div class="copyright-2018">
          Copyright © 2018 Police. | All rights reserved.
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Departments</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Language
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">English</a></li>
                  <li><a class="dropdown-item" href="#">Hindi</a></li>
                  
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
