<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <!-- Font Aweseome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
    
    <title>{ devlog }</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php include("app/includes/navbar.php"); ?>

    <!-- Content -->
    <div class="page-content container clearfix">

      <div class="block">
        <h1 class="title separator-bottom">Frost</h1>
        <p class="justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus justo non erat bibendum, maximus rutrum mauris dignissim. 
          Nunc lacinia eleifend massa in eleifend. Curabitur at velit enim. Vestibulum ac elit orci. Sed a leo et ex bibendum sollicitudin ac 
          sit amet nulla. Maecenas nec nulla faucibus, consequat orci a, maximus libero. Nam facilisis ultrices ante, ac sodales lectus. Aenean 
          eget nisl euismod mi lacinia iaculis.
          <br><br>
          Etiam malesuada semper leo, vel dapibus justo auctor non. Sed dignissim congue est eget ornare. Nullam posuere, est nec egestas maximus, 
          enim tellus aliquet velit, quis tempus tellus mauris non enim. Nam dictum magna tellus, a fermentum ex iaculis eu. Fusce iaculis facilisis 
          purus, in vulputate urna venenatis quis. Sed eu massa eu ex tempus pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
          Curabitur elit dolor, feugiat et felis at, tristique scelerisque mi. Pellentesque habitant morbi tristique senectus et netus et malesuada 
          fames ac turpis egestas. Donec ac urna sed arcu auctor ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur 
          ridiculus mus.
        </p>

        <article class="post">
          <header>
            <h2 class="title"><a href="single.php">Post 1</a></h2>
            <ul class="meta">
              <li><i class="far fa-calendar"></i>20/01/2020</li>
              <li><i class="far fa-user"></i>Oliver Jakobs</li>
            </ul>
          </header>
          <div>
            <p class="summary justify">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in nunc in lacus viverra tristique. Nullam suscipit aliquet elementum. 
              Sed sed risus at felis consequat tincidunt. Etiam tempor commodo arcu eu pellentesque. In hac habitasse platea dictumst. Curabitur 
              placerat auctor sem sit amet pharetra. Integer ut egestas sapien. Nullam lacinia eros id nisi lobortis, sit amet efficitur ipsum ultricies. 
              Nulla lobortis massa nec lorem venenatis consectetur quis non est. Praesent bibendum nec arcu vel fringilla. Quisque accumsan urna at mauris 
              dapibus dictum. Nam faucibus purus consectetur ipsum tincidunt, sit amet accumsan quam dictum. Nullam ac venenatis massa. Nunc aliquam massa 
              quis lorem rhoncus, quis sollicitudin erat ornare. Aliquam vitae bibendum ipsum. Curabitur viverra maximus metus, vitae interdum magna blandit quis. 
            </p>
            <a class="default" href="single.php">View &raquo;</a>
          </div>
        </article>

        <article class="post">
          <header>
            <h2 class="title"><a href="single.php">Post 3</a></h2>
            <ul class="meta">
              <li><i class="far fa-calendar"></i>17/01/2020</li>
              <li><i class="far fa-user"></i>Oliver Jakobs</li>
            </ul>
          </header>
          <div>
            <p class="summary justify">
              Nullam efficitur elit eget commodo vestibulum. Nullam neque eros, rutrum sed elit id, tincidunt interdum lorem. Donec finibus condimentum est in ornare. 
              Duis maximus urna id ante pellentesque pharetra. Morbi malesuada luctus dui in consectetur. Integer ut augue vehicula, ultrices purus sit amet, consequat 
              massa. Nulla cursus ultricies elit, pellentesque posuere odio mattis id. Nunc sed ex et quam elementum molestie sed id purus. Cras finibus diam elit, vel 
              mollis quam hendrerit nec. Aenean suscipit convallis quam, et fermentum urna pulvinar vitae. Quisque nisi nulla, luctus ac quam nec, ullamcorper vulputate 
              tortor.
            </p>
            <a class="default" href="single.php">View &raquo;</a>
          </div>
        </article>

      </div>
        
    </div>

    <!-- Footer -->
    <?php include("app/includes/footer.php"); ?>

  </body>
</html>