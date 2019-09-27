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
    <form action="welcome_get.php" method="post" class="container">
      <section>
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" required />

        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required />
      </section>

      <section>
        <p>Select your major:</p>
        <div>
          <input type="radio" name="major" />
          <label for="major">Computer Science</label>
        </div>
        <div>
          <input type="radio" name="major" />
          <label for="major">Web Design and Development </label>
        </div>
        <div>
          <input type="radio" name="major" />
          <label for="major">Computer information Technology</label>
        </div>
        <div>
          <input type="radio" name="major" />
          <label for="major">Computer Engineering</label>
        </div>
        <div>
          <textarea name="comments"></textarea>
        </div>
      </section>
      <input type="button" value="Submit" />
    </form>
  </body>
</html>
