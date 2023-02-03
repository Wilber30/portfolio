<?php include '../templates/layout/head.php' ?>

<?php include '../templates/layout/topnav.php' ?>

<?php include '../templates/layout/sidenav.php' ?>

<!-- main content -->
<main id="code_main">
  <div id="code_page">
    <div id="expanded-image">
      <i id="data_close" class="far fa-times-circle"></i>

      <img id="expanded_database" src="../src/assets/images/table_structure.png" alt="Movie database structure">
    </div>

    <div class="overlay">
      <div class="container coding_container">

        <div id="arrow_alignment" class="top_arrow">
          <div id="close" class="code-close"><i id="ce_close" class="fas fa-arrow-circle-up"></i></div>

          <div id="reveal"><i id="ce_reveal" class="fas fa-arrow-circle-down"></i></div>
        </div>

        <div class="coding-ex_heading">
          <h1 class="code_title">Coding Examples</h1>
        </div>

        <div id="accordion">
          <h1 class="code_heading">
            JavaScript Example
          </h1>

          <div>
            <p class="explanation">The JavaScript example
            below validates a user's email address and then checks whether a value is stored in local storage for the submitted address.
            Depending on the outcome of the local storage check, a generated image is then displayed in an interface either in a pre-existing row,
            or an entirely new row is created. Click
              <a class="js_link" href="http://arrayreflection.william-sears.netmatters-scs.co.uk/" target="_blank">
              here
              </a>
              , to see the JavaScript code below in action.
            </p>

            <pre class="js_wrapper">
              <code id="example1" class="javascript">
                <?php include '../templates/content/js_example.php' ?>
              </code>
            </pre>
          </div>

          <h1 class="code_heading">
            SQL Example<
          </h1>

          <div>
            <p class="sql_objective">The objective of this challenge was to create a
              <a class="query_link" href="#mid_point">query</a>
              that retrieves data from the tables in the movie database.
            </p>

            <h3 class="table_header">
              Movie Database
            </h3>

            <label id="data_label">
              click to expand
            </label>

            <div id="database_wrapper">
              <img id="movie_data" src="../src/assets/images/table_structure.png" alt="Movie database structure">
            </div>

            <h3 class="query_heading">
              Query and Output
            </h3>

            <p class="explanation">The query below combines data from the movie and rating tables
              in the 
              <a class="movie_link" href="#data_label">Movie Database</a>
              , to display three columns for ID, Movie and Star Rating.
              The subquery returns all movie IDs with a rating that is higher than three;
              the outer query then retrieves the movie titles that match those IDs.
              Finally, the ouput is formatted in ascending order by star rating.
            </p>

            <div class="example_wrapper2">
              <pre id="mid_point" class="embedded_sql">
                <code id="example2" class="sql">
                  <?php include '../templates/content/sql_query.php' ?>
                </code> 
              </pre>

              <i class="fas fa-long-arrow-alt-right output_arrow_right"></i>

              <i class="fas fa-arrow-down output_arrow_down"></i>

              <div class="output_img_wrapper">
                <img class="query_out" src="../src/assets/images/subquery_output.png" alt="Output from SQL query">
              </div>
            </div>
          </div>

          <h1 class="code_heading">PHP Example</h1>

          <div>
            <p class="explanation">The PHP code below receives data from a
              form submission and cleanses the data using filters. Then, an attempt
              is made to connect a the database and insert the data
              into a row within a table. The response from the server, either
              successful or unsuccessful, is then displayed at the top of the contact form.
              You can see this code in action, in the
              <a class="php_link" href="../index.php#contact">
                contact section
              </a>
              of this site’s homepage.
            </p>

            <pre id="third"> 
              <code id="example3" class="php">
                <?php include '../templates/content/php_example.php' ?>
              </code>
            </pre>
        </div>
      </div>
      </div>
    </div>

  </div>
</main>

<footer>
  <div class="inner">
    <div class="container">
      <p class="message">
        Thank you for stopping by 
        <i class="far fa-smile"></i>
      </p>
    </div>
  </div>
</footer>
  <script src="../src/js/coding.js">
  </script>

  <script src="../src/js/dist/core.js">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js">
  </script>

  <script>
    hljs.highlightAll();
  </script>

  <script>
    $( function() {
      $( "#accordion" ).accordion();
    } );
  </script>
</body>

</html>
