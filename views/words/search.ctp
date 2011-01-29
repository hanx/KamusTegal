<div id="about">
    <div id="story">
      <h1>Kamus Basa Tegal</h1>
      <h2>Kamus Bahasa Tegal / Tegal Dictionary</h2>
      <h2>Kumpulan Kosakata Bahasa Daerah Tegal yang di artikan ke dalam dua bahasa, Indonesia dan Inggris. </h2>
      <h2>Silakan berkontribusi.. :D</h2>
    </div>
    <div id="contact">
    <?php
        echo $this->Form->create('Word', array('action' => 'search'));
        $options = array(
                'label' => 'Search!',
                'name' => 'searchbutton',
                'id' => 'searchbutton',
                'type' => 'submit',
        );
    ?>
    <h3>Goleti/Cari/Search :</h3>
    <table width="auto" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td colspan="5"><?php echo $this->Form->input('keyword',array('id'=>'searchbox','label'=>false)); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="80" style="float: left"><input name="data[Word][searchin]" type="radio" id="tegal" value="Tegal" checked="checked" />
            Tegal
        </td>
        <td width="100" style="float: left"><input type="radio" name="data[Word][searchin]" id="indonesia" value="Indonesia" />
            Indonesia
        </td>
        <td style="float: left"><input type="radio" name="data[Word][searchin]" id="inggris" value="English" />
            English
        </td>
        <td style="float: right">
            <?php echo $this->Form->end($options); ?>
        </td>
      </tr>
    </table>
    </div>
</div>
<?php
    if (!empty ($result)){
        echo $this->element('searchresult');
    } else if (!empty($keyword)){
?>
<div class="section">
    <h2>Search for '<?php echo $keyword; ?>' in <?php echo $searchin; ?></h2>
    <div class="item">
      <div class="description">
          <h2>Not Found!</h2>
    </div>
    </div>
</div>
<?php
        }else{
?>
<div class="section">
    <h2>Stats</h2>
    <div class="item">
      <div class="date"><a href="#"><?php echo date('d-m-Y');?></a></div>
      <div class="description">
            Word Count 1000 words
    </div>
    </div>
</div>
<div class="section">
    <h2>Contributors</h2>
    <div class="item">
      <div class="date"><a href="#"><?php echo date('d-m-Y');?></a></div>
      <div class="description">
            hanx, john, hshh, lodals, odoao, Hkska
            hanx, john, hshh, lodals, odoao, Hkska
            hanx, john, hshh, lodals, odoao, Hkska
      </div>
    </div>
</div>
<div class="section">
    <h2>News</h2>
    <div class="item">
      <div class="date"><a href="#"><?php echo date('d-m-Y');?></a></div>
      <div class="description">
            Nec cum aenean cras, montes enim nascetur auctor velit sagittis quis. Mid hac vut,
            magnis, magna augue mus eros? Vel et, cursus, dolor, vut aliquet etiam tristique risus ut,
            placerat nunc, nunc vel ridiculus purus, massa lacus et pid eu amet. Cum lacus eu diam
            In mid non, amet nunc, velit ut facilisis augue odio nec dapibus, pulvinar nec sed.
      </div>
    </div>
</div>
<?php } ?>