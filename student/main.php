<?php require '../libs/precheck.php'; ?>
<?php require '../config.php'; ?>
<?php require $headerStudentFile; ?>
<?php require '../libs/navStudent.php'; ?>


<style>
  body{
    background-color: #E7E7E7;
  }
  #news{
    background-color: white;

  }
  @media screen and (orientation: portrait) {
    #rownews{
      padding-left: 25px;
      padding-right: 25px;
    }
  }
  @media screen and (orientation: landscape) {
    #rownews{
      padding-left: 50px;
      padding-right: 50px;
    }
  }
</style>
<div class="row" id="rownews" >
  <div class="col-xs-12" id="news">
      <p>
        <h1>
          ประกาศ 1
        </h1>
      </p>
  </div>
  <div class="col-xs-12" style="height:30px">

  </div>
  <div class="col-xs-12" id="news">
      <p>
        <h1>
          ประกาศ 2
        </h1>
      </p>
  </div>
</div>

<?php require $footerStudentFile; ?>
