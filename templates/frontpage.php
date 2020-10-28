
<?php require_once 'inc/header.php';?>

 <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <?php include_once 'config/init.php';?>
  <main role="main" class="container">
  <div class="container marketing">

  <div class="row mb-2">

  <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        <!-- <?php foreach($posts as $post) : ?> <?php endforeach; ?> -->
          <strong class="d-inline-block mb-2 text-primary"><?php echo $titlerows[1]; ?></strong>
          <h3 class="mb-0">Featured post</h3>

        <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto"></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>



        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success"><?php echo $post['id']; ?></strong>
          <h3 class="mb-0">Post title</h3>

          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto"></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>

        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>

    </div>
  </div>

</div>
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->
  </main>

  <?php require_once 'inc/footer.php';?>