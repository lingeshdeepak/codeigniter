 <h2><?= $title ?></h2>
  <?php foreach($posts as $post): ?>
    <!-- <h3><?php echo $post['fname'];?></h3> -->
    <strong class="post-data">first name:<?php echo $post['fname'];?></strong><br>

		<p><a href="<?php echo site_url('/posts/'.$post['fname']);?>"></a></p>
      <!-- <?php echo $post['body'];?> -->
  <?php endforeach; ?>
