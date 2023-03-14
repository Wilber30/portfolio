<?php include '../templates/layout/head.php' ?>

<?php include '../templates/layout/topnav.php' ?>

<?php include '../templates//layout/sidenav.php' ?>
  <main>
    <div id="content">
      <div class="overlay">
        <div class="vessel">
          <div id="about_top"></div>
          <div id="arrow_wrapper">
            <!-- <div id="close"><i class="fas fa-arrow-circle-up home_close"></i></div>
            <div id="reveal"><i class="fas fa-arrow-circle-down home_reveal"></i></div> -->
            <div id="close"><i class="fas fa-arrow-circle-up"></i></div>

            <div id="reveal"><i class="fas fa-arrow-circle-down"></i></div>
          </div>
          <div class="section">
            <div id="about_wrapper">
              <div class="text">
                <div class="biograph_wrapper">
                  <h1 id="bio_heading" class="about_heading">About me</h1>

                    <p id="biograph">
                      My name is William Sears, I am a web developer based in Oxfordshire, UK. 
                      I have just completed a six month contract with Destination Core, a company that specialises in 
                      building and maintaining websites for destination marketing organisations and large shopping centres. 
                      Their clients include Visit York, Lakeside Shopping Centre and Newcastle Gateshead. 
                      <br> <br>
                      As a junior front-end developer with Destination Core, I built new sections and components for their 
                      clients’ websites. I was quickly able to adapt to their working methods and use Craft CMS with Twig 
                      (a PHP templating language), to complete tasks within an agreed time frame. 
                      <br> <br>
                      Prior to my work with Destination Core, I was enrolled as a full-time student on Netmatters’ 
                      Scion Coalition scheme; this course teaches the fundamental skills required for a career 
                      in web development in a very comprehensive manner. During my studies, I was able to greatly 
                      improve my understanding of front-end development languages and I also used PHP for server-side 
                      integration. 
                      <br> <br>
                      Over the past year and a half, I have applied my skills within a commercial and I have proven my 
                      ability to adapt to working with new tools. I am particularly confident in my ability to build 
                      sections for websites based on provided designs. I am keen to further improve my skills in web development and gain 
                      more commercial experience.  
                    </p>
                </div>

                <div class="additional_wrapper">
                  <div>
                    <img class="profile_image" src="../src/assets/images/profile.jpg" alt="William Sears" width="267" height="369">
                  </div>

                  <div class="skills">
                    <h3>Skills</h3>

                    <ul>
                      <li class="skill_item">HTML</li>
                      <li class="skill_item">CSS/SASS/Tailwind</li>
                      <li class="skill_item">JavaScript</li>
                      <li class="skill_item">CMS Platforms (Wordpress, Craft)</li>
                      <li class="skill_item">PHP</li>
                    </ul>
                  </div>

                  <div class="testimonial_column">
                    <h3>Testimonial</h3>

                    <ul class="testimonial">
                      <li>
                        “In the time Will worked with us I found his attitude to be first- class. 
                        He is a great team player and keen to learn. The team enjoyed working with Will 
                        during his 6-month contract and I’ve no doubt that he’ll develop into a proficient 
                        front- end developer.” <br><br> <small>Will Wright, Managing Partner at Destination Core</small>
                      </li>
                    </ul>
                  </div>

                  <div class="achievements">
                    <h3>Achievements</h3>

                    <ul>
                      <li>Graduated from Oxford Brookes University with First Class Honours in Music.</li>

                      <li class="second_achievement">Composed and recorded soundtracks for Electric Turtle Games and Wildseed Studios.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial_section">
            <div class="testimonial_main">
              <h3>Testimonial</h3>

              <div>
                <p class="testimonial_quote">
                    “In the time Will worked with us I found his attitude to be first- class. 
                    He is a great team player and keen to learn. The team enjoyed working with Will 
                    during his 6-month contract and I’ve no doubt that he’ll develop into a proficient 
                    front- end developer.” <br><br> <small>Will Wright, Managing Partner at Destination Core</small>
                </p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="inner">
      <div class="container">
        <a id="about_up" href="about-me.php#about_top">
          <p class="up"><i class="fas fa-chevron-up"></i>
            Back to the top<br></p>
        </a>
      </div>
    </div>
  </footer>
  <script src="../dist/core.js"></script>
  <script src="../src/js/about.js"></script>
</body>
</html>
