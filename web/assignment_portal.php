<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Erik Martinez" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800|Poppins:400,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/home.css" />
    <title>Erik Martinez - FullStack Developer</title>
  </head>
  <body>
    <main>
      <header class="site-header">
        <div class="small-container">
          <div class="about">
            <h1>
              <span class="primary">Assignment Portal</span>
            </h1>
            <p class="underline">
             Welcome, below you will find the assignments by week.
            </p>
            <p>
              <a class="button button-secondary" href="./index.php"
                >Go Back</a
              >
              <!-- <a class="button button-secondary" href="../week1/w2teamactivity.php">Week 2</a> -->
            </p>
          </div>
        </div>
      </header>

      <section class="section alt-bg" id="skills">
        <header class="section-header">
          <div class="small-container">
            <h2>Assignments</h2>
            <!-- <p>
              I specialize in front end development and design, with knowledge
              in system administration and back end development.
            </p> -->
          </div>
        </header>
        <div class="container">
          <div class="flex skills">
            <div class="card">
              <a href="./prove/01Prove/hello.php">
                <img src="./images/assignment.png" alt="Assignment Logo" />
                <h3>Week 1 Solo Assignment</h3>
              </a>
            </div>
                <div class="card">
              <a href="./team_assignments/03Teach/index.php">
                <img src="./images/assignment.png" alt="Assignment Logo" />
                <h3>Week 3 Team Assignment</h3>
              </a>
            </div>
            <div class="card">
              <a href="./prove/03Prove/shopping.php">
                <img src="./images/assignment.png" alt="Assignment Logo" />
                <h3>Week 3 - Shopping Assignment</h3>
              </a>
            </div>
            <div class="card">
              <a href="./prove/test/php-shopping-cart-without-database/index.php">
                <img src="./images/assignment.png" alt="Assignment Logo" />
                <h3>Week 3 - Shopping Assignment</h3>
              </a>
            </div>
        </div>
      </section>
    </main>
    <?php include('./common/footer.php'); ?>

  </body>
</html>
