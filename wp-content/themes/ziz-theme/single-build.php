<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php $class_text = get_field("ascendancy_class");
        $class = explode("_",$class_text); ?>
        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/<?= $class[1] ?>.png" style="margin-top:10px; margin-bottom: 10px; width: 100%; height: auto; border: 3px solid white;"/>
        <h2 style="text-align: center;"><?= $class[0] ?> <?= $class[1] ?></h2>
    </div>
    <div class="col-md-9">
      <?php get_template_part('templates/content-single', get_post_type()); ?>
    </div>
  </div>
</div>

<hr>
<div class="container-fluid">
  <div class="row">
    <?php $image_link = get_field("build_header");
      if($image_link != "") : ?>
        <img class="img-fluid" src="<?= $image_link ?>" style="width: 100%, height:auto; margin: 0 auto;" />
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $introduction_text = get_field("introduction");
      if($introduction_text != "") : ?>
        <h2 style="margin-left:20px;"> Introduction </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$introduction_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $description_text = get_field("description");
      if($description_text != "") : ?>
      <h2 style="margin-left:20px;"> Description </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$description_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <div class="col-md-6">
    <?php $pros_text = get_field("pros");
      if($pros_text != "") : ?>
        <h2 style="margin-left:20px;"> Pros </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$pros_text); ?>
        </p>
        <hr>
      <?php endif; ?>
    </div>
    <div class="col-md-6">
    <?php $cons_text = get_field("cons");
      if($cons_text != "") : ?>
        <h2 style="margin-left:20px;"> Cons </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$cons_text); ?>
        </p>
        <hr>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <?php $passive_tree_link = get_field("passive_tree_link");
      if($passive_tree_link != "") : ?>
        <a href="<?= $passive_tree_link ?>" target="_blank"><h2> Final Passive Tree </h2></a>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $leveling_text = get_field("leveling");
      if($leveling_text != "") : ?>
      <h2 style="margin-left:20px;"> Leveling </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$leveling_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $bandits_normal = get_field("bandits_normal");
          $bandits_cruel = get_field("bandits_cruel");
          $bandits_merciless = get_field("bandits_merciless"); ?>
        <h2 style="margin-left:20px;"> Bandits </h2>
          <p> Normal: <?= $bandits_normal ?><br />
          Cruel: <?= $bandits_cruel ?><br />
          Merciless: <?= $bandits_merciless ?> </p>
        <hr>
  </div>
  <div class="row">
    <?php $gem_progression_text = get_field("gem_progression");
      if($gem_progression_text != "") : ?>
      <h2 style="margin-left:20px;"> Gems </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$gem_progression_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $gear_progression_text = get_field("gear_progression");
      if($gear_progression_text != "") : ?>
      <h2 style="margin-left:20px;"> Gear </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$gear_progression_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $optional_text_title = get_field("optional_field_title_1");
          $optional_text = get_field("optional_field_1");
      if($optional_text_title != "") : ?>
      <h2 style="margin-left:20px;"> <?= $optional_text_title ?> </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$optional_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $optional_text_title = get_field("optional_field_title_2");
          $optional_text = get_field("optional_field_2");
      if($optional_text_title != "") : ?>
      <h2 style="margin-left:20px;"> <?= $optional_text_title ?> </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$optional_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $optional_text_title = get_field("optional_field_title_3");
          $optional_text = get_field("optional_field_3");
      if($optional_text_title != "") : ?>
      <h2 style="margin-left:20px;"> <?= $optional_text_title ?> </h2>
        <p>
          <?php echo str_replace("<br />","</p><p>",$optional_text); ?>
        </p>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $youtube_link = get_field("youtube_video_link_1");
      if($youtube_link != "") : ?>
        <h2 style="margin-left:20px;"> Videos </h2>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?= $youtube_link ?>"></iframe>
          </div>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $youtube_link = get_field("youtube_video_link_2");
      if($youtube_link != "") : ?>
        <h2 style="margin-left:20px;"> Videos </h2>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?= $youtube_link ?>"></iframe>
          </div>
        <hr>
      <?php endif; ?>
  </div>
  <div class="row">
    <?php $youtube_link = get_field("youtube_video_link_3");
      if($youtube_link != "") : ?>
        <h2 style="margin-left:20px;"> Videos </h2>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?= $youtube_link ?>"></iframe>
          </div>
        <hr>
      <?php endif; ?>
  </div>
</div>
