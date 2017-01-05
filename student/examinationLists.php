<?php require '../libs/precheck.php'; ?>
<?php require '../config.php'; ?>
<?php require $headerStudentFile; ?>
<?php require '../libs/navStudent.php'; ?>

<style>
@media screen and (orientation: portrait) {
  #font1{
    font-size: 20px;
  }#font2{
    font-size: 10px;
  }
}
#bar{
    border-style: solid;
    border-width: 2px;
    border-color: white;
    background-color: gray;
    text-align: center;
    height: 100px;
    /*padding-top: 20px;
    padding-bottom: 20px*/
  }#font1{
    color: white;
  }#font2{
    color: white;
  }
</style>
<div class="row" id="show">
    <div class="col-xs-4 col-md-3" id="bar">
      <h2 id="font1">
        การสอบทั้งหมด
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        ทั้งหมด
      </h4>
      <h2 id="font1">
        100
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        กำลังเปิดรับ
      </h4>
      <h2 id="font1">
        35
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        รอเปิดรับ
      </h4>
      <h2 id="font1">
        25
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        ปิดรับ
      </h4>
      <h2 id="font1">
        40
      </h2>
    </div>
</div>

<?php require $footerStudentFile; ?>
