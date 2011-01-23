<div id="about">
    <div id="story">
      <h1>Kamus Basa Tegal</h1>
      <h2>Kamus Bahasa Tegal / Tegal Dictionary</h2>
      <h2>Kumpulan Kosakata Bahasa Daerah Tegal yang di artikan ke dalam dua bahasa, Indonesia dan Inggris. </h2>
      <h2>Silakan berkontribusi.. :D</h2>
    </div>
    <div id="contact">
      	  <label><h3>Goleti/Cari/Search :</h3></label>
    <?php
        echo $this->Form->create('Page', array('action' => 'search'));
        echo $this->Form->input('keyword',array('id'=>'searchbox','label'=>false));
        $options = array(
                'label' => 'Search!',
                'name' => 'searchbutton',
                'id' => 'searchbutton',
                'type' => 'submit',
        );
        echo $this->Form->end($options);
    ?>
    </div>
   </div>

   <div class="section">
    <h4>Search Result</h4>
    <div class="item">
        <h3>Tegal</h3>
      <div class="date"><a href="#">Sarana</a></div>
      <div class="description">
        <p>Mangan, madang, mbadog</p>
        <p>Mangan, madang, mbadog</p>
        <p>Mangan, madang, mbadog</p>
      </div>
    </div>
    <div class="item">
        <h3>Indonesia</h3>
      <div class="date"><a href="#">Sarankan</a></div>
      <div class="description">
        <p>Makan</p>
      </div>
    </div>
    <div class="item">
      <h3>English</h3>
      <div class="date"><a href="#">Suggest</a></div>
      <div class="description">
        <p>Eat</p>
      </div>
    </div>
  </div>