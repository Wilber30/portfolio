
<?php include 'includes/head.php' ?>

<?php include 'includes/topnav.php' ?>

<?php include 'includes/sidenav.php' ?>

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

            <div class="card">
              <div class="img_container">
                <a href="https://arrayreflection.william-sears.netmatters-scs.co.uk/" target="_blank">
                  <img class="project" src="Images/arrayreflection.png" alt="Array Reflection">
                </a>
              </div>
                <div class="card_text">
                  <h3 class="project_title">Array Reflection</h3>
                    <p class="project_description">A JavaScript project that assigns <br> an email address to an image loaded from UnSplash API.</p>
                  <form >
                    <button class="project_link array_btn" formaction="https://arrayreflection.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                  </form>
                </div>
              </div>

                <div class="card">
                  <div class="img_container">
                    <a href="https://netmatters.william-sears.netmatters-scs.co.uk/" target="_blank">
                      <img class="project" src="Images/Placeholder-1.png" alt="Netmatters site">
                    </a>
                  </div>
                    <div class="card_text">
                        <h3 class="project_title">Netmatters Homepage</h3>
                          <p class="project_description">A reconstruction of the Netmatters homepage and contact page.</p>
                      <form >
                        <button class="project_link net_btn" formaction="https://netmatters.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                      </form>
                    </div>
                  </div>

                  <div class="card">
                    <div class="img_container">
                      <a href="https://wordpress.william-sears.netmatters-scs.co.uk/" target="_blank">
                        <img class="project" src="Images/Placeholder-4.png" alt="Wordpress reflection task">
                      </a>
                    </div>
                      <div class="card_text">
                          <h3 class="project_title">Wordpress Reflection</h3>
                            <p class="project_description axure">A site built using Wordpress themes and plugin architecture.</p>
                        <form >
                          <button class="project_link word_btn" formaction="https://wordpress.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                        </form>
                      </div>
                    </div>

                </div>

                <div class="card_wrapper bottom_row">
                  <div class="card">
                    <div class="img_container">
                      <a href="https://3ny7nh.axshare.com/#id=w7l75t" target="_blank">
                        <img class="project" src="Images/Placeholder-3.png" alt="Axure shopping app">
                      </a>
                    </div>
                      <div class="card_text">
                          <h3 class="project_title">Axure Shopping App</h3>
                            <p class="project_description axure">A prototype for a shopping cart application, which I designed using Axure.</p>
                        <form >
                          <button class="project_link axure_btn" formaction="https://netmatters.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                        </form>
                      </div>
                    </div>

                    <div class="card">
                      <div class="img_container">
                        <a href="http://qualitybuilders.william-sears.netmatters-scs.co.uk/" target="_blank">
                          <img class="project" src="Images/Placeholder-2.png" alt="Quality builders collaborative task">
                        </a>
                      </div>
                        <div class="card_text">
                            <h3 class="project_title">Collaborative Project</h3>
                              <p class="project_description axure">I constructed this site in collaboration with another student on the SCS course.</p>
                          <form >
                            <button class="project_link" formaction="http://qualitybuilders.william-sears.netmatters-scs.co.uk/" formtarget="_blank">View Project</button>
                          </form>
                        </div>
                      </div>

                    </div>


        <div class="blank_space">&nbsp;</div>

      </div>
    </div>

    <!-- Contact -->
    <div class="contact_section">
      <div class="contact_inner">
        <div class="container contact_container">

          <div class="sm_contact_text">
            <h2>Get In Touch</h2>
            <p><b>Email address:</b> william.sears@netmatters-scs.com</p>
            <p class="contact_detail">You can also contact me via the above email address.</p>
          </div>

          <div id="contact" class="contact_wrapper">

            <div class="contact_text">
              <h2 class="contact_header">Get In Touch</h2>
              <p class="info">Please feel free to get in touch with me via the contact form.</p>
              <h3 class="email_header">Email address:</h3>
              <a class="email_address" href="mailto:william.sears@netmatters-scs.com">william.sears@netmatters-scs.com</a>
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
  <script src="dist/core.js"></script>
  <script src="main.js"></script>
</body>

</html>
