<?php
  
  // $servername = "SI0VSQL256.de.bosch.com,1433";
  // $username = "MIS3LR";
  // $password = "Pramila@123456&";
  // $databasename = "DB_L4R_LRR_parser_SQL";
  
  // // CREATE CONNECTION
  // $conn = new mysqli($servername,
  //   $username, $password, $databasename);
  
  // // GET CONNECTION ERRORS
  // if ($conn->connect_error) {
  //     die("Connection failed: " . $conn->connect_error);
  // }
  
  // // SQL QUERY
  // $query = "SELECT * FROM `Student Details`;";

  // // FETCHING DATA FROM DATABASE
  // $result = $conn->query($query);
  // print_r($result);
  //  $conn->close();
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>TEST REPORT</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <script src="./smtp.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://www.chartjs.org/dist/2.6.0/Chart.bundle.js"></script>
  <script src="https://www.chartjs.org/samples/2.6.0/utils.js"></script>
  <!-- <script src="./main.js"></script> -->

    <!-- <script src="html2pdf.bundle.min.js"></script> -->
</head>

<style>
  canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
</style>

<body>
  <div class="printContainer" >
  <!-------------Your Page Header------------------>
  <img class="mymymy" src="Bosch-Supergraphic.png" alt="Test" style="width: 100%; height: 10px; margin-top: -20px" />
  <div class="mycontainer" style="margin-top: -10px">
    <!-- <div style="border:1px solid;border-radius: 5px; width: 100%;padding:0px 15px;box-sizing: border-box;"><h1>1 Day Test Report</h1>
                <h1>LRR</h1></div> -->

    <div style="
          display: flex;
          justify-content: space-between;
          gap: 20px;
          align-items: center;
        ">
      <img src="Bosch_symbol_logo_black_red.png" alt="Test"
        style="margin-top: -50px; width: 12%; aspect-ratio: 2.5/1" />
      <h1 style="font-size: 40px; font-style: bold; margin-top: -40px">
        Nightly Build Test Report
      </h1>
    </div>

    <!-- <div class="container mt-5" style="padding-top: 50px;">
            <h1 style="font-size: 50px;">Version ATR_LRR_LGU_PF_V8.0.0 </h1> <br>
            <div style="border:1px solid;border-radius: 5px; width: 100%;padding:0px 15px;box-sizing: border-box;">
                <div style="display: flex; justify-content: space-between;">
                    <h3>Status: Released</h3>   <h3>Distribution: Internal </h3>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <h3>Approved By:</h3>  <h3>Released By: Sek Paul</h3>
                </div>
            </div>
        </div> -->
    <div style="margin-top: 70px" class="m-3 p-3">
      <h3>
        Select your test data to report<input type="file" id="jsonfileinput" class="btn btn-primary mybtn1" />
      </h3>
    </div>
  </div>
  <!-------------Overview and Versions------------->
  <div class="mycontainer" style="margin-top: -70px">
    <h2 class="mypanel" style="height: 96px; padding: 30px">Overview:</h2>
    <div>
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>Project</td>
            <td>L4 LRR</td>
          </tr>
          <tr>
            <td>Date</td>
            <td>02.08.2022</td>
          </tr>
          <tr>
            <td>Jenkins Status</td>
            <td></td>
          </tr>
          <tr>
            <td>Test Environment self-check</td>
            <td></td>
          </tr>
          <tr>
            <td>Build Tag</td>
            <td>LRR_LGU_PF_V7.0.0_pre#136</td>
          </tr>
          <tr>
            <td>Commit-ID</td>
            <td>cb2ec9e7b28</td>
          </tr>
          <tr>
            <td>Binary File Location</td>
            <td>
              <a onclick="linkto()" href="\\abtvdfs1.de.bosch.com\jsmdfs\ida\abt\SW_Build\Radar\
                                                                  SystemC\Athena_Radar\xRR\xRR_LGU_PF_V7.0.0">
                \\abtvdfs1.de.bosch.com\jsmdfs\ida\...\SystemC\Athena_Radar\xRR\xRR_LGU_PF_V7.0.0
              </a>
            </td>
          </tr>
          <tr>
            <td>HW sample</td>
            <td>LRR C1</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!---------------SW delivery versions-------------------->
    <button class="sub_accordion" data-toggle="collapse" data-target="#demo1" id="SW_version">
      ▼ SW delivery versions:
    </button>
    <div id="demo1" class="in">
      <table class="table table-bordered" style="width: 50%">
        <tbody>
          <tr>
            <td>PJIF</td>
            <td>Foxtrot 4</td>
          </tr>
          <tr>
            <td>DSP</td>
            <td>v18b</td>
          </tr>
          <tr>
            <td>Boot manager</td>
            <td>v1838</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!----------------Versions------------------------>
    <button class="sub_accordion" data-toggle="collapse" data-target="#demo2" id="Vers">
      ▼ Versions:
    </button>
    <div id="demo2" class="in">
      <table class="table table-bordered" style="width: 50%">
        <tbody>
          <tr>
            <td>VX-config</td>
            <td>v14.4</td>
          </tr>
          <tr>
            <td>CANoe</td>
            <td>v17.4</td>
          </tr>
          <tr>
            <td>CANape</td>
            <td>v17.3</td>
          </tr>
          <tr>
            <td>Coverity</td>
            <td>v15.4</td>
          </tr>
          <tr>
            <td>CLARA</td>
            <td>v9</td>
          </tr>
          <tr>
            <td>QAC</td>
            <td>v1.9.3.4</td>
          </tr>
          <tr>
            <td>vFlash</td>
            <td>v</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!------------- Test Report  ----------------->
  <div class="mycontainer">
    <div style="margin-left: 0px; height: 96px" class="mypanel row">
      <div class="col-md-8">
        <h2>Test results Overview</h2>
      </div>
      <div class="col-md-4">
        <h4>
          Previous Data<input type="file" id="pastjsonfinput" class="btn btn-primary mybtn1" />
        </h4>
      </div>
    </div>
    <div class="mycontainer">
      <div class="boxs" style="padding-left: 10px; margin-top: 15px">
        <table class="table" id="t_test_Overview">
          <thead>
            <tr>
              <th>Test Level</th>
              <th>Run</th>
              <th>Passed</th>
              <th>Passed (%)</th>
              <th>Failed</th>
              <th>Failed (%)</th>
              <th>Other</th>
            </tr>
          </thead>
          <tbody id="tb_test_Overview"></tbody>
        </table>
      </div>
    </div>
    <div class="colorchartbox boxs" style="padding-left: 10px; padding-top: 20px; margin-bottom: 30px">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <canvas style="font-size: 18px" id="canvas"></canvas>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <!-------------Detailed results -------------->
  <div class="mycontainer" style="margin-top: 30px">
    <button style="height: 96px" class="accordion" data-toggle="collapse" data-target="#container1" id="Detailed">
      <h2>▼ DETAILED Test Results</h2>
    </button>
    <div id="container1" class="in mycontainer">
      <!----------------System 5 table-------------------->
      <h3>System(SYS5)</h3>
      <div style="margin-bottom: 40px">
        <table class="table">
          <thead>
            <tr>
              <th>Tool</th>
              <th>Run</th>
              <th>Passed</th>
              <th>passed (%)</th>
              <th>Failed</th>
              <th>Failed (%)</th>
              <th>Other</th>
            </tr>
          </thead>
          <tbody id="t_system"></tbody>
        </table>
      </div>
      <!--------------------SW TEST4 ---------------------->
      <h3>SW Test(SWE4)</h3>
      <div style="margin-bottom: 40px">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Run</th>
              <th>Passed</th>
              <th>Passed (%))</th>
              <th>Failed</th>
              <th>Failed (%))</th>
              <th>Other</th>
            </tr>
          </thead>
          <tbody id="SW_test4"></tbody>
        </table>
      </div>
      <!------------SW TEST 6--------------------->
      <h3>SW Test(SWE6)</h3>
      <div style="margin-bottom: 40px">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Run</th>
              <th>Passed</th>
              <th>Passed (%)</th>
              <th>Failed</th>
              <th>Failed (%)</th>
              <th>Other</th>
            </tr>
          </thead>
          <tbody id="SW_test6"></tbody>
        </table>
      </div>
      <!------------Coverage per component--------------------->
      <button class="sub_accordion coverageper" data-toggle="collapse" data-target="#t_coverage" id="Cover">
        ▼ Coverage per component
      </button>
      <div class="row" style="margin: 10px" id="t_coverage">
        <div class="col-md-6" style="font-size: 18px">
          <h4>µC1</h4>
          <table>
            <tr>
              <th>Component</th>
              <th>C0 Coverage [%]</th>
              <th>C1 Coverage [%]</th>
              <th>MCDC Coverage [%]</th>
            </tr>
            <tr>
              <td>diag</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
            </tr>
            <tr>
              <td>ECUConfig</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>EgoVehDataIF</td>
              <td>90</td>
              <td>85</td>
              <td>50</td>
            </tr>
            <tr>
              <td>inputhandler</td>
              <td>99</td>
              <td>92</td>
              <td>50</td>
            </tr>
            <tr>
              <td>measurement_program</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
            </tr>
            <tr>
              <td>memport</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>MntPosMgmt</td>
              <td>100</td>
              <td>100</td>
              <td>8</td>
            </tr>
            <tr>
              <td>net_x</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
            </tr>
            <tr>
              <td>nvm</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>outputhandler</td>
              <td>100</td>
              <td>90</td>
              <td>100</td>
            </tr>
            <tr>
              <td>pda</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbHsmPrepare</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbPdm</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbSched</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbSysEvM</td>
              <td>95</td>
              <td>90</td>
              <td>100</td>
            </tr>
            <tr>
              <td>rbTimeConv</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rte</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>sdm</td>
              <td>94</td>
              <td>88</td>
              <td>100</td>
            </tr>
            <tr>
              <td>smu</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>traptest</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>arch</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>ToBeCleanUp</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
          </table>
        </div>
        <div class="col-md-6" style="font-size: 18px">
          <h4>µC2</h4>
          <table>
            <tr>
              <th>Component</th>
              <th>C0 Coverage [%]</th>
              <th>C1 Coverage [%]</th>
              <th>MCDC Coverage [%]</th>
            </tr>
            <tr>
              <td>diag</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
            </tr>
            <tr>
              <td>ECUConfig</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>EgoVehDataIF</td>
              <td>90</td>
              <td>85</td>
              <td>50</td>
            </tr>
            <tr>
              <td>inputhandler</td>
              <td>99</td>
              <td>92</td>
              <td>50</td>
            </tr>
            <tr>
              <td>measurement_program</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
            </tr>
            <tr>
              <td>memport</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>MntPosMgmt</td>
              <td>100</td>
              <td>100</td>
              <td>8</td>
            </tr>
            <tr>
              <td>net_x</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
            </tr>
            <tr>
              <td>nvm</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>outputhandler</td>
              <td>100</td>
              <td>90</td>
              <td>100</td>
            </tr>
            <tr>
              <td>pda</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbHsmPrepare</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbPdm</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbSched</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rbSysEvM</td>
              <td>95</td>
              <td>90</td>
              <td>100</td>
            </tr>
            <tr>
              <td>rbTimeConv</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>rte</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>sdm</td>
              <td>94</td>
              <td>88</td>
              <td>100</td>
            </tr>
            <tr>
              <td>smu</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>traptest</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>arch</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>ToBeCleanUp</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!----------To Top Button ------------->
  <img src="./arrow.png" style="width: 70px; height: 70px; border-radius: 10%" onclick="topFunction()"
    id="myscrollBtn" />

  <!----------Start Static Analysis ------------->
  <div class="mycontainer" style="margin-bottom: 50px">
    <button style="height: 96px" class="accordion" data-toggle="collapse" data-target="#container3" id="stat">
      <h2>► Static Analysis</h2>
    </button>
    <div class="mycontainer row collapse" style="margin: 10px" id="container3">
      <div class="topnav" id="top_nav"></div>
      <div class="mycontainer">
        <!------------1. Test profile--------------->
        <h3>&nbsp; 1. Test Profile</h3>
        <div class="mycontainer" id="my_table1" style="padding: 0 15px"></div>
        <!------------2. Review Status of performed Test Cases--------------->
        <h3>&nbsp; 2. Review Status of performed Test Cases</h3>
        <br />
        <div id="static_table_chart"></div>
        <br />
        <!---------3. Detail Infomation ------------------>
        <h3>&nbsp; 3. Detail Info</h3>
        <div class="mycontainer" id="my_table2" class="table"></div>
      </div>
    </div>
  </div>

  <!--------
    ------------------EDIT SCRIPT FILE---------------------
    ----------->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
  <script>
    function Convert_HTML_To_PDF(file_to_read) {      
      console.log("start");
      $("body").scrollTop(0);
      var elementHTML = document.getElementsByClassName("printContainer")[0];
      console.log("elementHTML",elementHTML)
      html2canvas(elementHTML, {
        useCORS: true,
        onrendered: function (canvas) {
          var pdf = new jsPDF({
                  orientation: 'p', // landscape
                  unit: 'in', // points, pixels won't work properly
                  format: [612, 864] // set needed dimensions for any element
            });
            // var pdf = new jsPDF("p", "pt", "letter");
          var screenWidth = screen.width;
          var screenHeight = screen.height;
          var pageHeight = 2380;
          var pageWidth = 1920;
          console.log("clientHeight",elementHTML.clientHeight);
          for (var i = 0; i <= elementHTML.clientHeight / pageHeight; i++) {
          // for (var i = 0; i <= 2 ; i++) {
            var srcImg = canvas;
            var sX = 0;
            var sY = pageHeight * i; // start 1 pageHeight down for every new page
            var sWidth = pageWidth;
            var sHeight = pageHeight;
            var dX = 0;
            var dY = 0;
            var dWidth = pageWidth;
            var dHeight = pageHeight;

            window.onePageCanvas = document.createElement("canvas");
            onePageCanvas.setAttribute("width", pageWidth);
            onePageCanvas.setAttribute("height", pageHeight);
            var ctx = onePageCanvas.getContext("2d");
            ctx.drawImage(
              srcImg,
              sX,
              sY,
              sWidth,
              sHeight,
              dX,
              dY,
              dWidth,
              dHeight
            );

            var canvasDataURL = onePageCanvas.toDataURL("image/png", 1.0);
            var width = onePageCanvas.width;
            var height = onePageCanvas.clientHeight;

            if (i > 0)
              // if we're on anything other than the first page, add another page
              pdf.addPage(612, 864); // 8.5" x 12" in pts (inches*72)

            pdf.setPage(i + 1); // now we declare that we're working on that page
            pdf.addImage(
              canvasDataURL,
              "PNG",
              20,
              60,
              width * 0.29,
              height * 0.4
            ); // add content to the page
          }
          
          // Save the PDF
          pdf.save(file_to_read + ".pdf");

        },
      });
    }

    // -------------- Global variables -------------------
    var content_json = [];
    var System_objs = [];
    var SW_integ = [];
    var SW_ATF = [];
    var Cantata = [];

    
    var past_System_objs = [];
    var past_SW_integ = [];
    var past_SW_ATF = [];
    var past_Cantata = [];
    var past_overvalue =[];
    var isnew = 0;
    var ispast = 1;
    var new_past = 0;
    var charts_container = document.getElementById("static_table_chart");
    var filename = "";
    var filename_list =[];
    var intern = [];
    // -------------Start and occure when you import your JSON file-----------------
    document
      .getElementById("jsonfileinput")
      .addEventListener("change", function () {
        let myPromise = new Promise(function (myResolve, myReject) {
          System_objs = [];
          SW_integ = [];
          SW_ATF = [];
          Cantata = [];

          var file_to_read =
            document.getElementById("jsonfileinput").files[0];

          var fileread = new FileReader();
          filename = file_to_read.name;
          _filename = filename.replace(/\..+$/, "");
          document.title = _filename;
          fileread.onload = function (e) {
            content_json = e.target.result;
            content_obj = JSON.parse(content_json);
            Object.keys(content_obj).forEach((key) => {
              get_Objects(content_obj[key], key, isnew);
            });
            create_TROverview_table(new_past);
            create_testView_table(
              System_objs,
              past_System_objs,
              "t_system",
              new_past
            );
            create_testView_table(
              SW_integ,
              past_SW_integ,
              "SW_test4",
              new_past
            );
            create_testView_table(
              Cantata,
              past_Cantata,
              "SW_test6",
              new_past
            );
            create_topnavs(Object.keys(content_obj));
            getPDF('.mymymy');
          };
          fileread.readAsText(file_to_read);
          html_str = "";
          html_str_overview = "";
          myResolve(file_to_read.name);
        });

        myPromise.then(
          function (value) { 
          },
          function () {
            alert("print pdf error");
          }
        );
      });

    // ----------run and occure when you import Previous JSON file-----------------
    document
      .getElementById("pastjsonfinput")
      .addEventListener("change", function () {
        past_System_objs = [];
        past_SW_integ = [];
        past_SW_ATF = [];
        past_Cantata = [];

        var file_to_read = document.getElementById("pastjsonfinput").files[0];
        if (document.getElementById("pastjsonfinput").files[0] == undefined) {
          new_past = false;
          create_TROverview_table(new_past);
          create_testView_table(
            System_objs,
            past_System_objs,
            "t_system",
            new_past
          );
          create_testView_table(
            SW_integ,
            past_SW_integ,
            "SW_test4",
            new_past
          );
          create_testView_table(Cantata, past_Cantata, "SW_test6", new_past);
        } else {
          var fileread = new FileReader();
          fileread.onload = function (e) {
            var content_json = e.target.result;
            var content_obj = JSON.parse(content_json);
            Object.keys(content_obj).forEach((key) => {
              get_Objects(content_obj[key], key, ispast);
              new_past = true;
            });
            create_TROverview_table(new_past);
            create_testView_table(
              System_objs,
              past_System_objs,
              "t_system",
              new_past
            );
            create_testView_table(
              SW_integ,
              past_SW_integ,
              "SW_test4",
              new_past
            );
            create_testView_table(
              Cantata,
              past_Cantata,
              "SW_test6",
              new_past
            );
          };
          fileread.readAsText(file_to_read);
          topFunction();
        }
      });

    //-------------get Objects from JSON data -----------
    function get_Objects(content_obj, id, new_past) {
      const keys = Object.keys(content_obj);
      
      var arr = [];
      for (var i in keys) {
        const key = keys[i];
        const val = content_obj[key];
        const type = typeof val;
        if (type === "object") {
          if (key === "counts") {
            var fail_val = val.fail == undefined ? 0 : val.fail;
            var obj = {
              type: id,
              total: val.total,
              pass: val.pass,
              fail: fail_val,
              other: val.total - val.pass - val.fail,
            };
            if (
              id.includes("CANoe") ||
              id.includes("CLARA") ||
              id.includes("CANAPE")
            ) {
              if (new_past == isnew) System_objs.push(obj);
              if (new_past == ispast) past_System_objs.push(obj);
            }
            if (id.includes("SW ATF")) {
              if (new_past == isnew) SW_ATF.push(obj);
              if (new_past == ispast) past_SW_ATF.push(obj);
            }
            if (id.includes("SW Integration")) {
              if (new_past == isnew) SW_integ.push(obj);
              if (new_past == ispast) past_SW_integ.push(obj);
            }
            if (id.includes("Cantata")) {
              if (new_past == isnew) Cantata.push(obj);
              if (new_past == ispast) past_Cantata.push(obj);
            }
          }
        }
      }
    }

    // --------------Create table in System Results Overview---------------
    function create_TROverview_table(new_past) {
      let plotdata = [[], [], [], []];
      const SRO_data = [System_objs, SW_ATF, SW_integ, Cantata];
      const past_SRO_data = [
        past_System_objs,
        past_SW_ATF,
        past_SW_integ,
        past_Cantata,
      ];
      const SRO_data_str = ["System_objs", "SW_ATF", "SW_integ", "Cantata"];
      const body = document.getElementById("tb_test_Overview");
      body.innerHTML = "";
      body.className += "table";

      for (k in SRO_data) {
        var overvalue = [0, 0, 0, 0, 0, 0];
        // var past_overvalue=[0,0,0,0,0,0];
        for (var i in SRO_data[k]) {
          overvalue[0] += SRO_data[k][i].total;
          overvalue[1] += SRO_data[k][i].pass;
          overvalue[3] += SRO_data[k][i].fail;
        }
        if (overvalue[0] == overvalue[1]) {
          overvalue[3] = 0;
        }
        overvalue[2] = Math.round((100 * overvalue[1]) / overvalue[0]);
        overvalue[4] = Math.round((100 * overvalue[3]) / overvalue[0]);
        overvalue[5] = overvalue[0] - overvalue[1] - overvalue[3];
        if (overvalue[0] == 0) {
          overvalue[2] = 0;
          overvalue[4] = 0;
        }
        if (new_past == ispast) {
          past_overvalue = [0, 0, 0, 0, 0, 0];
          for (var i in past_SRO_data[k]) {
            past_overvalue[0] += past_SRO_data[k][i].total;
            past_overvalue[1] += past_SRO_data[k][i].pass;
            past_overvalue[3] += past_SRO_data[k][i].fail;
          }
          console.log("past", past_overvalue);
          if (past_overvalue[0] == past_overvalue[1]) {
            past_overvalue[3] = 0;
          }
          past_overvalue[2] = Math.round(
            (100 * past_overvalue[1]) / past_overvalue[0]
          );
          past_overvalue[4] = Math.round(
            (100 * past_overvalue[3]) / past_overvalue[0]
          );
          if (past_overvalue[0] == 0) {
            past_overvalue[2] = 0;
            past_overvalue[4] = 0;
          }
        }
        plotdata[k][0] = overvalue[1];
        plotdata[k][1] = overvalue[3];
        plotdata[k][2] = overvalue[5];

        var row = document.createElement("tr");
        var elem = document.createElement("td");
        elem.appendChild(document.createTextNode(SRO_data_str[k]));
        row.appendChild(elem);
        for (j = 0; j < 6; j++) {
          var elem = document.createElement("td");
          if (new_past == ispast && (j == 2 || j == 4)) {
            // console.log("1",overvalue[j],"2",past_overvalue[j],k);
            var val = overvalue[j] - past_overvalue[j];
            var delta = val <= 0 ? "↘" + Math.abs(val) : "↗" + Math.abs(val);
            elem.appendChild(
              document.createTextNode(overvalue[j] + "  (" + delta + "%)")
            );
          } else {
            elem.appendChild(document.createTextNode(overvalue[j]));
          }
          row.appendChild(elem);
        }
        body.appendChild(row);
      }
      create_color_chart(plotdata);
    }

    //-----------create colored function-----------------
    function create_color_chart(plotdata) {
      var barChartData = {
        labels: ["System", "SW", "SW INT", "UNIT"],
        datasets: [
          {
            label: "Passed",
            backgroundColor: window.chartColors.green,
            defaultFontSize: 30,
            data: [
              plotdata[0][0],
              plotdata[1][0],
              plotdata[2][0],
              plotdata[3][0],
            ],
          },
          {
            label: "Failed",
            backgroundColor: window.chartColors.red,
            data: [
              plotdata[0][1],
              plotdata[1][1],
              plotdata[2][1],
              plotdata[3][1],
            ],
          },
          {
            label: "Other",
            backgroundColor: window.chartColors.yellow,
            data: [
              plotdata[0][2],
              plotdata[1][2],
              plotdata[2][2],
              plotdata[3][2],
            ],
          },
        ],
      };

      var ctx = document.getElementById("canvas").getContext("2d");

      window.myBar = new Chart(ctx, {
        type: "bar",
        data: barChartData,
        options: {
          title: {
            display: true,
            text: "Chart",
          },
          tooltips: {
            mode: "index",
            intersect: false,
          },
          responsive: true,
          defaultFontSize: 30,
          scales: {
            xAxes: [
              {
                stacked: true,
              },
            ],
            yAxes: [
              {
                stacked: true,
              },
            ],
          },
        },
      });
    }

    // --------------Create tables in DETAILED Test Result---------------
    function create_testView_table(View_objs, p_View_objs, id, new_past) {
      var content_obj = View_objs;
      var past_content_obj = p_View_objs;
      const body = document.getElementById(id);
      body.innerHTML = "";
      body.className += "table";
      for (k in content_obj) {
        var overvalue = [];
        overvalue[0] = content_obj[k].total;
        overvalue[1] = content_obj[k].pass;
        overvalue[2] = Math.round((100 * overvalue[1]) / overvalue[0]);
        overvalue[3] = content_obj[k].fail;
        overvalue[4] = Math.round((100 * overvalue[3]) / overvalue[0]);
        overvalue[5] = overvalue[0] - overvalue[1] - overvalue[3];
        var past_overvalue = [];
        if (
          new_past &&
          past_content_obj[k] != undefined &&
          content_obj[k].type == past_content_obj[k].type
        ) {
          past_overvalue[0] = past_content_obj[k].total;
          past_overvalue[1] = past_content_obj[k].pass;
          past_overvalue[2] = Math.round(
            (100 * past_overvalue[1]) / past_overvalue[0]
          );
          past_overvalue[3] = past_content_obj[k].fail;
          past_overvalue[4] = Math.round(
            (100 * past_overvalue[3]) / past_overvalue[0]
          );
          past_overvalue[5] =
            past_overvalue[0] - past_overvalue[1] - past_overvalue[3];
        }

        var row = document.createElement("tr");
        var title = document.createElement("td");
        title.appendChild(document.createTextNode(content_obj[k].type));
        row.appendChild(title);
        for (j = 0; j < 6; j++) {
          var title = document.createElement("td");
          if (
            new_past &&
            (j == 2 || j == 4) &&
            past_overvalue[j] != undefined &&
            past_overvalue[j] != NaN
          ) {
            var val = overvalue[j] - past_overvalue[j];
            var delta = val <= 0 ? "↘" + Math.abs(val) : "↗" + Math.abs(val);
            title.appendChild(
              document.createTextNode(overvalue[j] + "(" + delta + "%)")
            );
          } else {
            title.appendChild(document.createTextNode(overvalue[j]));
          }
          row.appendChild(title);
        }
        body.appendChild(row);
      }
    }

    //-----------create navs---------------
    function create_topnavs(mainkeys) {
      var m_str = "";
      var index = 0;
      for (var i in mainkeys) {
        var mActive = "";
        if (index == 0) {
          mActive = "active";
        }
        m_str +=
          '<a class="nav ' +
          mActive +
          '" id="nav_' +
          index +
          '" onclick="Static_Analysis_func(' +
          index +
          ')">' +
          mainkeys[index] +
          "</a>";
        index++;
      }
      $("#top_nav").html(m_str);
    }

    const Versbtn = document.getElementById("Vers");
    Versbtn.addEventListener("click", function handleverClick() {
      if (Versbtn.attributes["class"].value == "sub_accordion") {
        Versbtn.textContent = "► Versions:";
      } else {
        Versbtn.textContent = "▼ Versions:";
      }
    });

    // Versbtn.addEventListener("dblclick", function handleverClick() {
    // });

    const SW_versbtn = document.getElementById("SW_version");
    SW_versbtn.addEventListener("click", function handleswvClick() {
      if (SW_versbtn.attributes["class"].value == "sub_accordion") {
        SW_versbtn.textContent = "► SW delivery versions:";
      } else {
        SW_versbtn.textContent = "▼ SW delivery versions:";
      }
    });

    const statbtn = document.getElementById("stat");
    statbtn.addEventListener("click", function handlestaClick() {
      if (statbtn.attributes["class"].value == "accordion") {
        statbtn.textContent = "► Static Analysis";
      } else {
        statbtn.textContent = "▼ Static Analysis";
      }
    });

    const coverbtn = document.getElementById("Cover");
    coverbtn.addEventListener("click", function handlecovClick() {
      if (coverbtn.attributes["class"].value == "sub_accordion") {
        coverbtn.textContent = "► Coverage per component";
      } else {
        coverbtn.textContent = "▼ Coverage per component";
      }
    });

    const detbtn = document.getElementById("Detailed");
    detbtn.addEventListener("click", function handledetClick() {
      if (detbtn.attributes["class"].value == "accordion") {
        detbtn.textContent = "► DETAILED Test Results";
      } else {
        detbtn.textContent = "▼ DETAILED Test Results";
      }
    });

    //Get the button
    var mybutton = document.getElementById("myscrollBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };
    window.onload = Loadjson();
    function Loadjson() {
      let allPromise = new Promise(function (myResolve, myReject) {
      System_objs = [];
      SW_integ = [];
      SW_ATF = [];
      Cantata = [];
      console.log("loaded!");
      var dir = 'http://localhost:3000/json_data/'
      var current_filename = dir + 'current.json';
      console.log("current", current_filename);
      readTextFile(current_filename, function (text) {
        
        var newcontent_obj = JSON.parse(text);
        intern = newcontent_obj;
        console.log("newcontent_obj",newcontent_obj);
        Object.keys(newcontent_obj).forEach((key) => {
          get_Objects(newcontent_obj[key], key, ispast);
          new_past = false;
        });
        create_TROverview_table(new_past);
        create_testView_table(
          System_objs,
          past_System_objs,
          "t_system",
          new_past
        );
        create_testView_table(
          SW_integ,
          past_SW_integ,
          "SW_test4",
          new_past
        );
        create_testView_table(
          Cantata,
          past_Cantata,
          "SW_test6",
          new_past
        );
      });
      past_System_objs = [];
      past_SW_integ = [];
      past_SW_ATF = [];
      past_Cantata = [];
      var previousday = getPreviousDay();
      var previous_filename = dir + previousday + '_report.json';
      console.log(previous_filename);
      readTextFile(previous_filename, function (text) {
        var prevcontent_obj = JSON.parse(text);
        console.log(prevcontent_obj);
        Object.keys(prevcontent_obj).forEach((key) => {
          get_Objects(prevcontent_obj[key], key, isnew);
        });
        new_past = true;
        create_TROverview_table(new_past);
        create_testView_table(
          System_objs,
          past_System_objs,
          "t_system",
          new_past
        );
        create_testView_table(
          SW_integ,
          past_SW_integ,
          "SW_test4",
          new_past
        );
        create_testView_table(
          Cantata,
          past_Cantata,
          "SW_test6",
          new_past
        );
        create_topnavs(Object.keys(prevcontent_obj));
        console.log("done")
      });
    });

    allPromise.then(
      function () { 
        console.log("pdf start")
      },
      function () {
        alert("print pdf error");
      }
    );
    }
      
    function readTextFile(file, callback) {
      var rawFile = new XMLHttpRequest();
      rawFile.overrideMimeType("application/json");
      rawFile.open("GET", file, true);
      rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
          callback(rawFile.responseText);
        }
      }
      rawFile.send(null);
    }

    function getPreviousDay() {
      const previous = new Date();
      previous.setDate(previous.getDate() - 1);
      let year = previous.getFullYear();
      let month = previous.getMonth() + 1;
      let d = previous.getDate();
      console.log(previous);
      console.log("y-m-d", year, month, d);
      if(month<10) {
        if(d<10) {  return year + '-' + '0' + month + '-' + '0' + d; }
          else {  return year + '-' + '0' + month + '-' +  d;   }
      }
      else {
        if(d<10) {  return year + '-' + month + '-' + '0' + d; }
        else {  return year + '-' + month + '-' +  d; }
      }
    }
    function scrollFunction() {
      if (
        document.body.scrollTop > 700 ||
        document.documentElement.scrollTop > 700
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    var doc = new jsPDF();
    var specialElementHandlers = {
      "#editor": function (element, renderer) {
        return true;
      },
    };

    $(".coverageper").click(function () {
      console.log('cover clicked!');
      doc.fromHTML($("body").html(), 15, 15, {
        width: 170,
        elementHandlers: specialElementHandlers,
      });
      doc.save("sample-file.pdf");
    });

    function getPDF(selector) {
      kendo.drawing.drawDOM($(selector)).then(function (group) {
        kendo.drawing.pdf.saveAs(group, "Invoice.pdf");
      });
    }

    function linkto() {
      window.location.href = "";
    }
    window.onafterprint = function () {
      Email.send({
        Host: "pashaborges.gmail.com",
        Username: "Pavel Borges",
        Password: "Zara1235",
        To: "smishra20515@gmail.com",
        From: "pashaborges@gmail.com",
        Subject: "email subject",
        Body: "email body",
        Attachments: [
          {
            name: document.title + ".pdf",

            path: "D:\Testrepot\pdf",
          },
        ],
      }).then((message) => alert("mail sent successfully"));
      alert("Printing shall commence!");
      alert(document.title + ".pdf");
    };
//---------------------------------------------------
function Static_Analysis_func(keynum) {
    $('a.active').removeClass('active');
    $('#nav_'+keynum).addClass('active');
    var table='';
    var el='';
    charts_container.innerHTML="";
    // console.log(content_json);
    // intern = JSON.parse(content_json);           //To javascript Object file intern
    const mainkeys = Object.keys(intern);
    const key=mainkeys[keynum];
    const json = intern[key];                   //json=CANOe data
    get_tbls(json,key,key)                      //call 'get_tbls' function
}

function get_tbls(json,id,device_name)
{
    const keys = Object.keys(json);   //keys of json 'version counts details...'
    var arr = [];
    for(var i in keys)
    {
        const key = keys[i];    //for each key
        const val = json[key];          //each values by key (canoe_version,1,{}{}..)
        const type = typeof val;      //type of value  (stringx8   objectx2-details,counts)
        if(type === 'object'){
            if(key === "counts"){
                create_tbl_chart(Object.keys(val),Object.values(val),id,device_name) 
                //If it is count data(total-xxx pass-xxxx fail-zzzz) it creates a chart
                //Create chart with object val
                //Object.key(val) is total/pass/fail or more...
                //id is from mother function-get_tbls
                //device name is also
            }
            get_totaldata_tbl(key, val, id);       //key is  details   val is the data
            //Create detailed table
        }
        
        else 
        {
            const obj = {};
            obj[key] = val;  // version data
            arr.push(obj);   // version data array
        }
    }  
    get_version_tbl(arr)   

}
function create_table_ex(xVals,yVals){
    const table = document.createElement("table");
    table.style.width = "100%";
    const body = table.createTBody();
    xVals.forEach((x,i)=>{
        const row = document.createElement("tr");
        const title = document.createElement("td");
        title.appendChild(document.createTextNode(x));
        const value = document.createElement("td");
        value.appendChild(document.createTextNode(yVals[i]));
        row.appendChild(title);
        row.appendChild(value);
        body.appendChild(row)
    })
    table.appendChild(body)
    return table;
}

var colorbar=["green", "red","yellow","cyan","pink","black","violet","greenyellow","purple","gray"];

function create_tbl_chart(xVals,yVals,id,device_name,barColors = colorbar ){
    const div_node = document.createElement("div")
    const name_node = document.createElement("p")
    name_node.appendChild(document.createTextNode(device_name));
    const canvas_node = document.createElement("canvas")
    canvas_node.setAttribute("id",id)
    canvas_node.style="margin-bottom:30px";
    div_node.appendChild(name_node);
    div_node.appendChild(canvas_node);
    if (id == 'QAC') {
        var arr1 = ['Warning Serverity'];
        var arr2 = ['Amount'];
        for (let index = 0; index < xVals.length; index++) {
            // if (xVals[index]=='total') {
            //     arr1.splice(1, 0, xVals[index]);
            //     arr2.splice(1, 0, yVals[index]);
            // }else{
                arr1.push(xVals[index]);
                arr2.push(yVals[index]);
            // }
        }
        div_node.appendChild(create_table_ex(arr1,arr2));
    }else{
        var arr1 = [];
        var arr2 = [];
        for (let index = 0; index < xVals.length; index++) {
            if (xVals[index]=='pass') {
                arr1.splice(1, 0, xVals[index]);
                arr2.splice(1, 0, yVals[index]);
            }else{
                arr1.push(xVals[index]);
                arr2.push(yVals[index]);
            }
        }
        xVals = arr1;
        yVals = arr2;
        div_node.appendChild(create_table_ex(arr1,arr2));
    }
        
    charts_container.appendChild(div_node)
    // if(device_name=="QAC"){
        const valIndex = xVals.indexOf("total");
        xVals.splice(valIndex, 1); 
        yVals.splice(valIndex, 1); 
    // }    
    new Chart(id, {
        type: "bar",
        data: {
            labels: xVals,
            datasets: [{
            backgroundColor: barColors,
            data: yVals
            }]
        },
    options: {
            legend: {display: false},
            title: {
            display: true,
        }
    }
});
}

//----------- Create a first table.----------------
function get_version_tbl(list) {   
    var cols = []; 
    for (var i = 0; i < list.length; i++) {
        const ele = list[i];                         // list[i]=reuntim:1230914,pass:1,fail:0  ......
        for (var k in ele) {
            if (cols.indexOf(k) === -1) { 
                cols.push(k);
            }
        }
    }
    var table = document.createElement("table");
    table.style.width = "100%";
    var trow = table.insertRow(-1); 
    var xValues = [ ];
    var yValues = [ ];
    var barColors = [ "green", "red", "blue"];
    for (var i = 0; i < list.length; i++) { 
            trow = table.insertRow(-1);
            var cell = trow.insertCell(-1); 
            const col = cols[i];
            const val = list[i][col];
            cell.innerHTML =  col; 
            var cell = trow.insertCell(-1); 
            cell.innerHTML = val;
          //  if(col.indexOf("total_") > -1) 
          //  {
          //      xValues.push(col);
          //      yValues.push(val);
          //  }

    }
    var el = document.getElementById("my_table1");
    el.innerHTML = "";
    el.appendChild(table);
} 

function get_totaldata_tbl(key, list, id) {  
    //create array with counts and details data 
    //It will be used for detailed table
    //key is count or detail 
    //list is the data of counts or details 
    var cols = []; 
    for (var i = 0; i < list.length; i++) {
        const ele = list[i];
        for (var k in list[i]) {
            if (cols.indexOf(k) === -1) { 
                cols.push(k);            //array 'cols' is (6)['status', 'runtime', 'test_case_id', 'file_location', 'starttime', 'endtime']
            }
        }
    }
    var table = document.createElement("table"); 
    table.style.width = "100%";
    table.className+="table"
    var tr = table.insertRow(-1); 
    for (var i = 0; i < cols.length; i++) { 
        var theader = document.createElement("th");
        theader.innerHTML = cols[i]; 
        tr.appendChild(theader);
    } 
    for (var i = 0; i < list.length; i++) { 
        trow = table.insertRow(-1);
        for (var j = 0; j < cols.length; j++) {
            var cell = trow.insertCell(-1); 
            cell.innerHTML = list[i][cols[j]];
        }
    }
    var el = document.getElementById("my_table2");
    if (id == 'QAC') {
        el.innerHTML = "";
        return;
    }
    el.innerHTML = "";
    el.appendChild(table);
} 

  </script>

<script type="text/javascript">
        $(function() {
            startRefresh();
        });
        function startRefresh() {
          var pdate = getPreviousDay();

          // Convert_HTML_To_PDF(pdate);          
          // setTimeout(() => {
            
          // }, 500);

          setInterval(() => {
            // document.location.reload();
            Loadjson();
            startPrint();
          }, 20000);
        }
        function startPrint() {
          var pdate = getPreviousDay();

          // Convert_HTML_To_PDF(pdate);          
          // setTimeout(() => {
            
          // }, 500);

          setTimeout(() => {
            console.log("um?")
            if((past_overvalue[0]+past_overvalue[1]+past_overvalue[2]+past_overvalue[3]+past_overvalue[4]+past_overvalue[5])==0)
              {console.log("% empty")}
            else{
              console.log(past_overvalue[0],past_overvalue[1],past_overvalue[2],past_overvalue[3],past_overvalue[4],past_overvalue[5])
              if(filename_list.includes(pdate))
              {
                console.log(pdate ,"is already exist!");
              }
              else{
                console.log("fileinclude",filename_list.includes(pdate));
              Convert_HTML_To_PDF(pdate);
              filename_list.push(pdate);
            }
            }
          }, 2000);
        }
    </script>
    <!-- <script type="text/javascript">
        $(function() {
            // Convert_HTML_To_PDF(getPreviousDay());
            let mypro = startPrint();
        });
        function startPrint() {
          var pdate = getPreviousDay();

          // Convert_HTML_To_PDF(pdate);          
          // setTimeout(() => {
            
          // }, 500);

          setTimeout(() => {
            console.log("um?")
            if((past_overvalue[0]+past_overvalue[1]+past_overvalue[2]+past_overvalue[3]+past_overvalue[4]+past_overvalue[5])==0)
              {console.log("% empty")}
            else{
              console.log(past_overvalue[0],past_overvalue[1],past_overvalue[2],past_overvalue[3],past_overvalue[4],past_overvalue[5])
              Convert_HTML_To_PDF(pdate);
              filename_list.concat(pdate);
            }
          }, 2000);
        }
    </script> -->
    
</body>

</html>