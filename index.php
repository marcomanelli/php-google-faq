<?php
  require_once __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="" href="style.css">
  <title>Google FAQ</title>
</head>
<body>
  <header>
    <div class="container">
      <div class="hader-top clearfix">
        <div class="left">
          <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google Logo">
          <span>Privacy e termini</span>
        </div>
        <div class="right">
          <img src="avatar.jpg" alt="avatar">
        </div>
      </div>
      <div class="hader-bottom clearfix">
        <ul>
          <?php foreach($menu as $link): ?>
            <li><a class="<?php echo $link['status'] ?>" href="<?php echo $link['href'] ?>"><?php echo $link['label'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <div class="container-faq">
      <div class="faq">
        <?php foreach($faqs as $faq): ?>
          <div class="question"><?php echo $faq['question'] ?></div>
          <div class="answer"><?php echo $faq['answer'] ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <footer>
    
  </footer>

</body>
</html>