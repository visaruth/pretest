
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
                <button type="button"class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</button>
            </div>
        </div>
    </div>
</nav>
