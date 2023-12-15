<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <link rel="stylesheet" href="style_askforinfoi.css" />
  </head>
  <body>
    <section class="container">
      <header>Request for more information</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Your Email</label>
          <input type="text" placeholder="Enter email" required />
        </div>

        <div class="input-box">
          <label>University Name</label>
          <input type="email" placeholder="Enter university name" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Rank</label>
            <input type="number" placeholder="Enter rank" required />
          </div>
          <div class="input-box">
            <label>Vice-chancellor</label>
            <input type="text" placeholder="Enter Vice-chancellor Name" required />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Facultys</label>
            <input type="text" placeholder="Enter faculties seperated by ','" required />
          </div>
          <div class="input-box">
            <label>Tution fee</label>
            <input type="text" placeholder="Enter tution fee" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Minimum Required GPA</label>
            <input type="number" placeholder="Enter Required GPA" required />
          </div>
          <div class="input-box">
            <label>Extra Facilities</label>
            <input type="text" placeholder="Enter Extra Facilities seperated by ','" required />
          </div>
        </div>
        <div class="input-box">
          <label>University website</label>
          <input type="text" placeholder="Enter university website" required />
        </div>
        
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>

