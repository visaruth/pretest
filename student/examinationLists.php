<?php require '../libs/precheck.php'; ?>
<?php require '../config.php'; ?>
<?php require $headerStudentFile; ?>
<?php require '../libs/navStudent.php'; ?>
<script>
$.get("http://localhost/pretest/api/examinationList/examination.php", function(data, status){
            // console.log("Data: " + data + "\nStatus: " + status);
            var d = JSON.parse(data);
            console.log(d);
            var sizeExamination = d.data1['examination'].length;
            var sizeExaminationAvaliableNow = d.data2['examinationAvaliableNow'].length;
            var sizeExaminationAvaliableSoon = d.data3['examinationAvaliableSoon'].length;
            var sizeExaminationUnavaliable = d.data4['examinationUnavaliable'].length;
            console.log(sizeExamination);
            console.log(sizeExaminationAvaliableNow);
            console.log(sizeExaminationAvaliableSoon);
            console.log(sizeExaminationUnavaliable);
            document.getElementById('sizeExamination').innerHTML = sizeExamination;
            document.getElementById('sizeExaminationAvaliableNow').innerHTML = sizeExaminationAvaliableNow;
            document.getElementById('sizeExaminationAvaliableSoon').innerHTML = sizeExaminationAvaliableSoon;
            document.getElementById('sizeExaminationUnavaliable').innerHTML = sizeExaminationUnavaliable;
        });
function all(){

}
function unregist(){

}
function registed(){

}
</script>
<div id="div1">

</div>
<style>
#bar{
    border-style: solid;
    border-width: 2px;
    border-color: white;
    background-color: gray;
    text-align: center;
    height: 100px;
    /*padding-top: 20px;
    padding-bottom: 20px*/
  }
  #news{
    background-color: white;

  }
  @media screen and (orientation: portrait) {
    #rownews, #rownewsx{
      padding-left: 25px;
      padding-right: 25px;
    }
    #font1{
      padding-top: 10px;
      color: white;
      font-size: 20px;
    }#font2{
      padding-top: 10px;
      color: white;
      font-size: 10px;
    }
  }
  @media screen and (orientation: landscape) {
    #rownews, #rownewsx{
      padding-left: 50px;
      padding-right: 50px;
    }
    #font1{
      padding-top: 10px;
      font-size: 40px;
      color: white;
    }#font2{
      padding-top: 8px;
      font-size: 30px;
      color: white;
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
        <p id="sizeExamination">
          Loading
        </p>
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        กำลังเปิดรับ
      </h4>
      <h2 id="font1">
        <p id="sizeExaminationAvaliableNow">
          Loading
        </p>
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        รอเปิดรับ
      </h4>
      <h2 id="font1">
        <p id="sizeExaminationAvaliableSoon">
          Loading
        </p>
      </h2>
    </div>
    <div class="col-xs-2 col-md-2" id="bar">
      <h4 id="font2">
        ปิดรับ
      </h4>
      <h2 id="font1">
        <p id="sizeExaminationUnavaliable">
          Loading
        </p>
      </h2>
    </div>
</div>
<div class="col-xs-12" style="height:30px"></div>
<div class="row" id="rownewsx">
  <div class="col-md-2"></div>
  <div class="col-xs-12 col-md-8 " id="news" style="text-align:center; padding-top:15px; padding-bottom:15px;">
    <div class="btn-group ">
    <a href="#" class="btn btn-warning" onclick="all()">ทั้งหมด</a>
    <a href="#" class="btn btn-warning" onclick="unregist()">ยังไม่ลงทะเบียน</a>
    <a href="#" class="btn btn-warning" onclick="registed()">ลงทะเบียนแล้ว</a>
    </div>
  </div>
</div>
<div class="col-xs-12" style="height:10px"></div>
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
  <div class="col-xs-12" style="height:10px"></div>
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
