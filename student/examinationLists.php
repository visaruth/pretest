<?php require '../libs/precheck.php'; ?>
<?php require '../config.php'; ?>
<?php require $headerStudentFile; ?>
<?php require '../libs/navStudent.php'; ?>
<script>
$.get("http://localhost/pretest/api/examinationList/examination.php", function(data, status){
            // console.log("Data: " + data + "\nStatus: " + status);
            d = JSON.parse(data);
            console.log(JSON.parse(d.data1));
        });
</script>
<div id="div1">

</div>
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
  }.col-centered{
    float: none;
    margin: 0 auto;
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
<div class="col-xs-12" style="height:30px">

</div>
<div class="row" id="rownews" >
  <div class="col-md-2"></div>
  <div class="col-xs-12 col-md-8 " id="news">
    <div class="col-xs-12 col-md-8" >
        <h1>
          Pre-test ปี 2016 รอบ2   <span class="label label-danger" style="font-size: 10px;">เหลือ 5 วัน</span>
        </h1>
        <h5>
          รับสมัคร: ตั้งแต่ 07-07-2016 19:00 ถึง 12-08-2016 23:59
        </h5>
        <h5>
          วันสอบ: ตั้งแต่ 07-07-2016 19:00 ถึง 12-08-2016 23:59
        </h5>
        <h5>
          ประกาศผล: 07-07-2016 19:00 ถึง 12-08-2016 23:59
        </h5>
    </div>
    <div class="col-xs-12 col-md-4" style="padding-top:20px; padding-bottom:20px; text-align:right;">
        <button type="button" class="btn btn-warning" ><h1>ลงทะเบียน</h1></button>
    </div>
  </div>
  <div class="col-xs-12" style="height:30px">

  </div>
  </div>
  <div class="row" id="rownews" >
    <div class="col-md-2"></div>
    <div class="col-xs-12 col-md-8 " id="news">
    <div class="col-xs-12 col-md-8" >
        <h1>
          Pre-test ปี 2016 รอบ2
        </h1>
        <h5>
          รับสมัคร: ตั้งแต่ 07-07-2016 19:00 ถึง 12-08-2016 23:59
        </h5>
        <h5>
          วันสอบ: ตั้งแต่ 07-07-2016 19:00 ถึง 12-08-2016 23:59
        </h5>
        <h5>
          ประกาศผล: 07-07-2016 19:00 ถึง 12-08-2016 23:59
        </h5>
    </div>
    <div class="col-xs-12 col-md-4" style="padding-top:20px; padding-bottom:20px; text-align:right; ">
        <button type="button" class="btn btn-default disabled" ><h1>ลงทะเบียน</h1><h1>เรียบร้อย</h1></button>
    </div>
  </div>
  <div class="col-xs-12" style="height:30px">

  </div>
</div>
<?php require $footerStudentFile; ?>
