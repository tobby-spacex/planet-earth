<?php require('config/db.php');

$query = 'SELECT * FROM country LIMIT 2';
// $query = 'SELECT * FROM situation';
$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
// Close Connection
mysqli_close($conn);?>


<div class="col p-4 d-flex flex-column position-static">
        <?php foreach($posts as $post): ?>
          <strong class="d-inline-block mb-2 text-primary"><?php echo $post['name']; ?></strong>
          <h3 class="mb-0">Featured post</h3>

        <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto"></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
		<?php endforeach;?>
</div>