<div class="section">
    <h2>Search Result for : <i>'<?php echo $keyword; ?>' in <?php echo $searchin; ?></i></h2>
  <?php
  if (!empty ($result)){
      foreach ($result as $res){ ?>
    <div class="item">
      <div class="date"><a href="#">Sarana</a></div>
      <div class="description">
          <div class="result">
          <?php
                echo '<small><i>Tegal:</i></small>&nbsp;&nbsp;<b>'. $res['Word']['tegal'].'</b><br/>';
                echo '<small><i>Indonesia:</i></small>&nbsp;&nbsp;<b>'. $res['Word']['indonesia'].'</b><br/>';
                echo '<small><i>English:</i></small>&nbsp;&nbsp;<b>'. $res['Word']['inggris'].'</b>';
          ?>
          </div>
      </div>
    </div>
 <?php }
  }
  ?>
  </div>