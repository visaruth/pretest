<div>
  <div class="row text-center" style="background:#ffe4a1;">
      <div class="col-xs-12">
          <img id="logo" src="<?php echo $logo;?>">
          <h2 id="textBandner" style="color:#eb8948; display: inline; ">ANNOP PRETEST</h2>
            <button type="button" class="navbar-toggle" style="background: white; padding: 2px 6px 5px 6px; " data-toggle="collapse" data-target="#myNavbar">
                <span>เมนู</span> <span class="glyphicon glyphicon-menu-down"></span>
            </button>
        </div>
    </div>
</div>
<nav class="navbar navbar-default" style="min-height:0; ">
    <div class="container-fluid">
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <?php foreach($menuLists as $m) { ?>
                        <?php

                            if ($m['link'] == $activeURL)
                            {
                                echo '<li class="active">';
                            }
                            else
                            {
                                echo '<li>';
                            }
                        ?>
                            <a href="<?php echo $m['link'];?>" class="<?php echo $m['status']; ?>">
                                <span class="<?php echo $m['icon']; ?>" aria-hidden="true"></span>
                                <?php echo $m['name'];?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
