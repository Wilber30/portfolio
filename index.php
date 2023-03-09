<?php include 'templates/layout/head.php' ?>

<?php include 'templates/layout/topnav.php' ?>

<?php include 'templates/layout/sidenav.php' ?>

  <!-- Page content -->
  <main>
    <!-- <div id="full-page"> -->

      <div id="banner">

        <div class="type-container">

          <div id="arrow_alignment">
            <div id="close"><i class="fas fa-arrow-circle-up home_close"></i></div>
            <div id="reveal"><i class="fas fa-arrow-circle-down home_reveal"></i></div>
          </div>

          <div class="typewriter">
            <h1 id="app"></h1>
          </div>
          <div class="fade-in">
            <p class="me">I am a Web Developer</p>
          </div>

          <div class="align_scroll">

            <div class="scroll-down">
              <a href="#port">
                <p id="scroll">Scroll Down<br>
                  <i class="fas fa-chevron-down"></i>
                </p>
              </a>
            </div>

          </div>


        </div>
      </div>

    <!-- Project cards -->
    <div class="inner port_section">
      <div class="container">

        <h1 id="port">Portfolio</h1>

        <div class="card_wrapper top_row">
            <h2>Coming Soon!</h2>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="contact_section">
      <div class="contact_inner">
        <div class="container contact_container">

          <div class="sm_contact_text">
            <h2>Get In Touch</h2>
            <p>Email address: 
              <a class="email_address" href="mailto:wilbersears@gmail.com">wilbersears@gmail.com</a>
            </p>
            <p class="contact_detail">You can also contact me via the above email address.</p>
          </div>

          <div id="contact" class="contact_wrapper">

            <div class="contact_text">
              <h2 class="contact_header">Get In Touch</h2>
              <p class="info">Please feel free to get in touch with me via the contact form.</p>
              <h3 class="email_header">Email address:</h3>
              <a class="email_address" href="mailto:wilbersears@gmail.com">wilbersears@gmail.com</a>
              <p class="contact_detail">You can also contact me via the above email address.</p>
            </div>

            <div id="form">
              <div id="response"></div>
              <div id="error"></div>
              <div class="user">
                <input id="name" type="text" name="name" placeholder="Name:" required="required">
                <input id="email" name="email" type="text" placeholder="Email:" required="required">
              </div>
              <input id="cc" class="input" name="cc" placeholder="Cc:">
              <input id="subject" class="input" type="text" name="subject" placeholder="Subject" required="required">
              <textarea id="message" name="message" rows="8" cols="80" placeholder="Message:" required></textarea>
              <div class="btn_container">
                 <button id="sub_btn" type="submit" name="Submit">Submit</button>
              </div>
            </div>

          </div> <!-- contact_wrapper end -->

        </div>
      </div>
    </div>
  </main>
  <footer>

    <div class="inner">
      <div class="container">
        <a id="up" href="#">
          <p class="up"><i class="fas fa-chevron-up"></i>
            Back to the top<br></p>
        </a>
      </div>
    </div>

  </footer>
  <script src="src/js/dist/core.js"></script>
  <script src="main.js"></script>
</body>

</html>
