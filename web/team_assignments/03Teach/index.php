<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/main.css" />
    <title>Form Handling</title>
  </head>
  <body>
    <form method="post" action="welcome_post.php" class="container">
      <section>
        <label for="name">Enter your name: </label>
        <input type="text" name="name" placeholder="Ato" required />

        <label for="email">Enter your email: </label>
        <input type="email" name="email" placeholder="Ato@gmail.com" required />
      </section>

      <section>
        <p>Select your major:</p>
      <?php
        $majors = array("Computer Science"=>"CS", "Web Design and Development"=>"WDD",
                "Computer information Technology"=>"CIT", "Computer Engineering"=>"CE");

        foreach($majors as $x => $x_value) {
                  echo "<div><input type='radio' name='major' value=" . $x_value . ">" .  $x . "</div>";
                     echo "<br>";
        }
        ?>
        <!-- <div>
          <input type="radio" name="major[]" value="Computer Science" />
          <label for="major">Computer Science</label>
        </div>
        <div>
          <input type="radio" name="major[]" value="Web Design and Development" checked />
          <label for="major">Web Design and Development </label>
        </div>
        <div>
          <input type="radio" name="major[]" value="Computer information Technology" />
          <label for="major">Computer information Technology</label>
        </div>
        <div>
          <input type="radio" name="major[]" value="Computer Engineering" />
          <label for="major">Computer Engineering</label>
        </div> -->

        <div>
          <textarea name="comments">HI</textarea>
        </div>
      </section>
      <section>
        <p>Place you have visted</p>
        <div>
          <input
            type="checkbox"
            name="visted[]"
            value="North America"
            checked
          />
          <label for="visted">North America</label>
        </div>
        <div>
          <input
            type="checkbox"
            name="visted[]"
            value="South America"
            checked
          />
          <label for="visted">South America</label>
        </div>
        <div>
          <input type="checkbox" name="visted[]" value="Europe" checked />
          <label for="visted">Europe</label>
        </div>
        <div>
          <input type="checkbox" name="visted[]" value="Asia" checked />
          <label for="visted">Asia</label>
        </div>
        <div>
          <input type="checkbox" name="visted[]" value="Australia" checked />
          <label for="visted">Australia</label>
        </div>

        <div>
          <input type="checkbox" name="visted[]" value="Africa" />
          <label for="visted">Africa</label>
        </div>
        <div>
          <input type="checkbox" name="visted[]" value="Antarctica" />
          <label for="visted">Antarctica</label>
        </div>
      </section>
      <input type="hidden" name="form_submitted" value="1" />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
