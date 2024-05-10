
   
    function bindChartDataName(jsonData) {
           
      $('#Totaltechusagebyname').text(jsonData.length);
     // console.log(jsonData);

      jsonData.forEach(function(item) {
        item.y = Number(item.y);
      });
      Highcharts.chart('chartContainer', {
        chart: {
          type: 'column'
        },
      
        plotOptions: {
          column: {
            color: '#047acf',
          }
      },
        credits:{
          enabled:false,
        },
      
        title: {
          text: ''
        },
        xAxis: {
          type: 'category',
          labels: {
            rotation: -45,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        },
        yAxis: {
          title: {
            text: 'Total Usage'
          }
        },
        series: [{
          name: 'Total Usage',
         // colorByPoint: true,
          data: jsonData

        }]
      });
    }

    function bindChartDataByDate(jsonData) {
      $('#Totaltechusagebydate').text(jsonData.length);
      jsonData.forEach(function(item) {
        item.y = Number(item.y);
      });
      var data = jsonData;
      var groupedData = {};
      data.forEach(function(item) {
        var date = item.date;
        if (!groupedData[date]) {
          groupedData[date] = 0;
        }
        groupedData[date] += item.y;
      });
      // Prepare data for Highcharts
      var chartData = [];
      Object.keys(groupedData).forEach(function(date) {
        chartData.push({
          name: date,
          y: groupedData[date]
        });
      });
      Highcharts.chart('chartContainer1', {
        chart: {
          type: 'column'
        },
        plotOptions: {
          column: {
              color: '#047acf' // Set your desired color here
          }
      },
        credits:{
          enabled:false,
        },
        title: {
          text: ''
        },
        xAxis: {
          categories: Object.keys(groupedData) // Dates
        },
        yAxis: {
          title: {
            text: 'Usage Value'
          }
        },
        series: [{
          name: 'Usage By Date',
          data: chartData // Usage values
        }]
      });
    }

    function bindTableByNameAndDate(jsonDate) {
      // console.log("table function",jsonDate);
      var data = jsonDate;
      var dataTable = $('#dataTable').DataTable({
        data: data,
        "bDestroy": true,
        "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
        columns: [{
            data: 'date'
          },
          {
            data: 'techNames'
          },
          {
            data: 'totalUsage'
          }
        ]
      });

      dataTable.clear().draw();
      dataTable.rows.add(jsonDate).draw();
    }

    function ajaxCall(startDate, endDate) {
      $.ajax({
        url: `${apiUrl}/kpi_data.php?p_DataRequest=TechUsage_ByName&p_startDate=${startDate}&p_endDate=${endDate}`, // PHP file to send the request
        type: 'GET',
        success: function(res) {
          bindChartDataName(res.data);
        },
        error: function(xhr, status, error) {
          console.error(error); // Log any errors to the console
        }
      });
      $.ajax({
        url: `${apiUrl}/kpi_data.php?p_DataRequest=TechUsage_ByDate&p_startDate=${startDate}&p_endDate=${endDate}`, // PHP file to send the request
        type: 'GET',
        success: function(res) {

          bindChartDataByDate(res.data);
        },
        error: function(xhr, status, error) {
          console.error(error); // Log any errors to the console
        }
      });

      $.ajax({
        url: `${apiUrl}/kpi_data.php?p_DataRequest=TechUsage_ByNameAndDate&p_startDate=${startDate}&p_endDate=${endDate}`, // PHP file to send the request
        type: 'GET',
        success: function(res) {
          // console.log("table",res.data);
          bindTableByNameAndDate(res.data);
        },
        error: function(xhr, status, error) {
          console.error(error); // Log any errors to the console
        }
      });
    }
    function checkAuthrization() {
      let userName = JSON.parse(sessionStorage.getItem("IS_VALID"));
      // let userName = decryptedData;
    if (userName === null) {
      window.location.href = "http://localhost/AdminLTE_PHP/index.php";
        }  
       
    }

    function getAllUsers() {
   
    $.ajax({
        type: 'GET',
        url: `${apiUrl}/manageuser.php`,
        success: function(response) {
            var usersnumber = response.data.length;
            $('#Totalusers').text(usersnumber);
              //console.log("response users", response.data.length);
         
        }
    });
    }



    $(document).ready(function() {      
      checkAuthrization();  
      getAllUsers();
     
      var startDate = "";
      var endDate = "";

      $('#daterange').daterangepicker({
        timePicker: true,
        startDate: moment().subtract(7, "days").format("YYYY-MM-DD"),
        endDate: moment().format("YYYY-MM-DD"),
        locale: {
          format: "YYYY-MM-DD"
        }
      });

      $('#daterange').on('apply.daterangepicker', function(ev, picker) {
        // console.log("picker",picker.startDate.format("YYYY-MM-DD"));
        // console.log(picker.endDate.format("YYYY-MM-DD"));
      });

      $('#filterForm').click(function(){
        startDate=$("#daterange").data('daterangepicker').endDate.format('YYYY-MM-DD');
        endDate= $("#daterange").data('daterangepicker').startDate.format('YYYY-MM-DD');
        //console.log("filterForm",startDate,endDate);
        ajaxCall(startDate,endDate);
    });

      $('#resetForm').click(function(event) {
        $('#daterange').data('daterangepicker').setStartDate(moment().subtract(7, "days").format("YYYY-MM-DD"));
        $('#daterange').data('daterangepicker').setEndDate(moment().format("YYYY-MM-DD"));
        startDate= moment().format("YYYY-MM-DD");
        endDate= moment().subtract(7, "days").format("YYYY-MM-DD");
        ajaxCall(startDate,endDate);
      });
      startDate= moment().format("YYYY-MM-DD"),
      endDate= moment().subtract(7, "days").format("YYYY-MM-DD"),
      ajaxCall(startDate, endDate);
    })


  
