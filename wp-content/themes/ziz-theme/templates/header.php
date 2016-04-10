<!-- Alternative Header
<nav class="navbar navbar-top" style="background-color:#080808; border-radius:0px; border-bottom: 3px solid #fff; font-size: 1.2rem">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <nav class="navbar navbar-dark">
          <ul class="nav navbar-nav pull-sm-right">
            <li class="nav-item <?php if(is_front_page()){ echo "active"; }?>">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item <?php if(is_page('toolkit')){ echo "active"; }?>">
              <a class="nav-link" href="/toolkit/">Ziz's Toolkit</a>
            </li>
            <li class="nav-item <?php if(is_page('builds')){ echo "active"; }?>">
              <a class="nav-link" href="/builds/">Builds</a>
            </li>

          </ul>
        </nav>
      </div>
      <div class="col-md-2" style="padding:0">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="img-fluid" style="position:absolute; border: 3px solid #fff" />
      </div>
      <div class="col-md-5 pull-right">
        <nav class="navbar navbar-dark">
          <ul class="nav navbar-nav pull-sm-left">
            <li class="nav-item <?php if(is_page('guides')){ echo "active"; }?>">
              <a class="nav-link" href="/guides/">Guides</a>
            </li>
            <li class="nav-item <?php if(is_page('stream')){ echo "active"; }?>">
              <a class="nav-link" href="/stream/">Steam</a>
            </li>
            <li class="nav-item <?php if(is_page('about')){ echo "active"; }?>">
              <a class="nav-link" href="/about/">About</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</nav>
-->

<nav class="navbar navbar-top" style="background-color:#080808; border-radius:0px; border-bottom: 3px solid #fff; font-size: 1.2rem">
  <div class="container">
    <div class="row">
      <div class="col-md-2" style="padding:0">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="img-fluid" style="position:absolute; border: 3px solid #fff" />
      </div>
      <div class="col-md-10">
        <nav class="navbar navbar-dark">
          <ul class="nav navbar-nav pull-sm-left">
            <li class="nav-item <?php if(is_front_page()){ echo "active"; }?>">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item <?php if(is_page('toolkit')){ echo "active"; }?>">
              <a class="nav-link" href="/toolkit/">Ziz's Toolkit</a>
            </li>
            <li class="nav-item <?php if(is_page('builds')){ echo "active"; }?>">
              <a class="nav-link" href="/builds/">Builds</a>
            </li>
            <li class="nav-item <?php if(is_page('guides')){ echo "active"; }?>">
              <a class="nav-link" href="/guides/">Guides</a>
            </li>
            <li class="nav-item <?php if(is_page('stream')){ echo "active"; }?>">
              <a class="nav-link" href="/stream/">Steam</a>
            </li>
            <li class="nav-item <?php if(is_page('about')){ echo "active"; }?>">
              <a class="nav-link" href="/about/">About</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</nav>
