<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <!-- Font Aweseome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
    
    <title>{ devlog::contact }</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php include("app/includes/navbar.php"); ?>

    <!-- Content -->
    <div class="page-content clearfix">

      <div class="block">
        <form class="contact">
          <h1 class="title separator-bottom">Contact</h1>
          <section>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Your Name">
          </section>
          <section>
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your Email Address">
          </section>
          <section>
            <label>Message</label>
            <textarea name="message" rows="8" placeholder="Your Message"></textarea>
          </section>
          <button>Send <i class="far fa-paper-plane"></i></button>
        </form>
      </div>
        
    </div>

    <!-- Footer -->
    <?php include("app/includes/footer.php"); ?>

  </body>
</html>