@extends ('layout')
@section ('title', 'Registration')
@section ('content')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<style>
/* Inline styles go here */
.file-the-fir {
  position: absolute;
  top: 0;
  left: 0;
  display: inline-block;
  width: 439.44px;
  height: 81.03px;
}

.div-1,
.lorem-ipsum-is {
  position: absolute;
  left: 0;
  width: 607.73px;
}

.lorem-ipsum-is {
  top: 109.03px;
  font-size: 24px;
  font-family: 'Montserrat', sans-serif;
  display: inline-block;
  height: 413.46px;
}

.div-1 {
  top: 36.17px;
  height: 522.49px;
}

.form-child {
  position: absolute;
  top: 0;
  left: calc(50% - 263px);
  border-radius: 20px;
  background-color: #d5cea3;
  width: 526px;
  height: 869px;
}

.register-your-fir {
  position: absolute;
  top: 23px;
  left: 82px;
}

.name-button-child {
  border: 0;
  background-color: #1a120b;
  border-radius: 40px;
}

.name-button,
.name-button-child {
  position: absolute;
  top: 0;
  left: 0;
  width: 447px;
  height: 33px;
  color: #d5cea3;
}

.address-incident-button-child,
.father-name-button {
  position: absolute;
  top: 53px;
  left: 0;
  width: 447px;
  height: 33px;
}

.address-incident-button-child {
  border: 0;
  background-color: #1a120b;
  top: 0;
  border-radius: 15px;
  height: 130px;
}

.address-incident-button {
  position: absolute;
  top: 106px;
  left: 0;
  width: 447px;
  height: 130px;
}

.district-button-child,
.incident-information-button {
  position: absolute;
  top: 419px;
  left: 0;
  width: 447px;
  height: 130px;
}

.district-button-child {
  border: 0;
  background-color: #1a120b;
  top: 0;
  border-radius: 40px;
  width: 208px;
  height: 33px;
}

.city-button,
.district-button,
.nationality-button,
.state-button {
  position: absolute;
  top: 313px;
  left: 0;
  width: 208px;
  height: 33px;
}

.city-button,
.nationality-button,
.state-button {
  left: 239px;
}

.nationality-button,
.state-button {
  top: 366px;
  left: 0;
}

.nationality-button {
  left: 239px;
}

.aadhar-card,
.alternate-phone-no,
.fields,
.state-button1 {
  position: absolute;
  top: 569px;
  left: 0;
  width: 208px;
  height: 33px;
}

.aadhar-card,
.alternate-phone-no,
.fields {
  left: 239px;
}

.aadhar-card,
.fields {
  top: 257px;
  left: 0;
  width: 447px;
}

.fields {
  top: 98px;
  left: 39px;
  height: 602px;
}

.browse,
.browse-button-child {
  cursor: pointer;
  border: 0;
  padding: 0;
  position: absolute;
}

.browse-button-child {
  background-color: #1a120b;
  top: 0;
  left: 219px;
  border-radius: 40px;
  width: 208px;
  height: 33px;
}

.browse {
  background-color: transparent;
  top: 5px;
  left: 239px;
  font-size: 40px;
  font-family: 'Montserrat', sans-serif;
  color: #dcd6b0;
  text-align: left;
  display: inline-block;
  font-size: 24px;
}

.browse-button,
.upload-signature {
  position: absolute;
  top: 5px;
  left: 0;
  font-size: 24px;
}

.browse-button {
  top: 720px;
  left: 59px;
  width: 427px;
  height: 33px;
  font-size: 24px;
  font-family: 'Montserrat', sans-serif;
}

.submit,
.submit-button-child {
  cursor: pointer;
  border: 0;
  padding: 0;
  position: absolute;
}

.submit-button-child {
  background-color: #454545;
  top: 0;
  left: 0;
  border-radius: 19px;
  width: 279px;
  height: 59px;
}

.submit {
  background-color: transparent;
  top: 5px;
  left: 57px;
  font-size: 40px;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
  color: #fff;
  text-align: left;
  display: inline-block;
}

.submit-button {
  position: absolute;
  top: 783px;
  left: 123px;
  width: 279px;
  height: 59px;
}

.form,
.main {
  position: absolute;
  height: 869px;
}

.form {
  top: 0;
  left: calc(50% + 109.2px);
  width: 526px;
  font-size: 40px;
}

.main {
  top: 153px;
  left: 76.61px;
  width: 1270.39px;
  font-size: 64px;
  color: #3c2a21;
  font-family: 'Montserrat', sans-serif;
}

.footer-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #3c2a21;
  width: 1440px;
  height: 235.11px;
}

.departments,
.profile {
  position: absolute;
  top: 47.25px;
  left: 1269.73px;
  text-decoration: underline;
  display: inline-block;
  width: 135.32px;
  height: 25.87px;
  color: #3C2A21;
}

.profile {
  left: 1153.58px;
  width: 81.19px;
}

.rajasthan-police-logo-2-icon {
  position: absolute;
  top: 34.87px;
  left: 32.7px;
  width: 156.74px;
  height: 156.37px;
  object-fit: cover;
}

.home {
  top: 47.25px;
  left: 869.41px;
  text-decoration: underline;
  width: 75.55px;
  height: 25.87px;
}

.contact-us,
.help-section,
.home {
  position: absolute;
  display: inline-block;
}

.contact-us {
  top: 47.25px;
  left: 979.92px;
  text-decoration: underline;
  width: 138.7px;
  height: 25.87px;
}

.help-section {
  left: 1277.62px;
  width: 127.42px;
}

.careers,
.fir-status,
.help-section {
  top: 113.62px;
  text-decoration: underline;
  height: 25.87px;
}

.fir-status {
  position: absolute;
  left: 1142.3px;
  display: inline-block;
  width: 102.62px;
}

.careers {
  left: 867.16px;
  width: 77.81px;
}

.careers,
.case-studies,
.copyright-2018 {
  position: absolute;
  display: inline-block;
}

.case-studies {
  top: 113.62px;
  left: 977.67px;
  text-decoration: underline;
  width: 131.93px;
  height: 25.87px;
}

.copyright-2018 {
  top: 188.99px;
  left: calc(50% - 183.24px);
  font-size: 16px;
  width: 361.97px;
  height: 21.37px;
}

.bg,
.footer {
  position: absolute;
  top: 1065px;
  left: 0;
  width: 1440px;
  height: 235.11px;
}

.bg {
  top: 0;
  background-color: #3c2a21;
  width: 1439.63px;
  height: 89.98px;
}

.rajasthan-police-logo-1-icon {
  position: absolute;
  top: 15.75px;
  left: 16.87px;
  width: 59.61px;
  height: 59.61px;
  object-fit: cover;
}

.contact,
.departments1,
.home1 {
  position: absolute;
  top: 34.87px;
  left: 797.42px;
  display: inline-block;
  width: 95.6px;
  height: 29.24px;
}

.contact,
.departments1 {
  left: 1132.58px;
  width: 110.22px;
  height: 25.87px;
}

.departments1 {
  left: 920.01px;
  width: 182.2px;
}

.profile-bg {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 20px;
  background-color: #e5e5cb;
  width: 119.22px;
  height: 35.99px;
}

.profile1 {
  position: absolute;
  top: 4.5px;
  left: 26.99px;
  display: inline-block;
  width: 65.23px;
  height: 25.87px;
}

.profile-button {
  position: absolute;
  top: 28.12px;
  left: 1279.92px;
  width: 119.22px;
  height: 35.99px;
  text-align: center;
  color: #e5e5cb;
}

.search-bg-icon {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 20px;
  width: 444.26px;
  height: 37.12px;
}

.search {
  border: 0;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
  background-color: transparent;
  position: absolute;
  top: 8.01px;
  left: 25.39px;
  color: #e5e5cb;
  text-align: center;
  display: inline-block;
  width: 65.23px;
  height: 25.87px;
}

.nav-bar,
.search-button {
  position: absolute;
  top: 26.99px;
  left: 289.61px;
  width: 444.26px;
  height: 37.12px;
}

.nav-bar {
  top: 0;
  left: 0;
  width: 1439.63px;
  height: 89.98px;
}

.tv-1 {
  position: relative;
  background-color: #e5e5cb;
  width: 100%;
  height: 1300px;
  overflow: hidden;
  text-align: left;
  font-size: 20px;
  color: #e5e5cb;
  font-family: 'Roboto', sans-serif;
}
</style>
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
      <form class="form-child">
        <b class="register-your-fir">Register your FIR</b>
        <div class="fields">
          <div class="name-button" name="name">
            <input
              class="name-button-child"
              name="Full Name"
              placeholder="Full Name"
              type="text"
            />
          </div>
          <div class="father-name-button" name="fathersName">
            <input
              class="name-button-child"
              name="Father's Name"
              placeholder="Father's Name"
              type="text"
            />
          </div>
          <div class="address-incident-button" name="addressofincident" >
            <textarea
              class="address-incident-button-child"
              name="Address of Incident"
              placeholder="Address of Incident"
            ></textarea>
          </div>
          <div class="incident-information-button" name="incidentinformation" >
            <textarea
              class="address-incident-button-child"
              name="Incident Information"
              placeholder="Incident Information"
            ></textarea>
          </div>
          <div class="district-button" name="district" >
            <input
              class="district-button-child"
              name="District"
              placeholder="District"
              type="text"
            />
          </div>
          <div class="city-button" name="city">
            <input
              class="district-button-child"
              name="City"
              placeholder="City"
              type="text"
            />
          </div>
          <div class="state-button" name="state">
            <input
              class="district-button-child"
              name="State"
              placeholder="State"
              type="text"
            />
          </div>
          <div class="nationality-button" name="nationality">
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
          <div class="alternate-phone-no" name="altPhoneNo">
            <input
              class="district-button-child"
              name="Alternate Phone No."
              placeholder="Alternate Phone No."
              type="text"
            />
          </div>
          <div class="aadhar-card" name="aadhar">
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
      URL::asset(image.Rajasthan_Police_Logo.png)
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
  <div class="nav-bar">
    <div class="bg"></div>
    <img
      class="rajasthan-police-logo-1-icon"
      alt=""
      src="Images/Rajasthan_Police_Logo.png"
    />

    <div class="home1">Home</div>
    <div class="contact">Contact</div>
    <div class="departments1">Departments</div>
    <div class="profile-button">
      <div class="profile-bg"></div>
      <div class="profile1">Profile</div>
    </div>
    <div class="search-button">
      <img class="search-bg-icon" alt="" src="Images/search-bg.jpg" />

      <input
        class="search"
        name="Search"
        placeholder="Search"
        type="text"
      />
    </div>
  </div>
</div>
</body>
</html>

@endsection