$(document).ready(function() {
    $('#myForm').submit(function(e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: 'php/submit.php',
        type: 'POST',
        data: formData,
        success: function(response) {
        //   console.log(response);
          $('#myForm')[0].reset(); 
          getData(); 
        },
        error: function(xhr, status, error) {
        //   console.log(error); // Log the AJAX error
        }
      });
    });
  
    $('#exportAllBtn').click(function() {
      exportData(getTableData());
    });
  
    
    $('#exportSelectedBtn').click(function() {
      var selectedData = getSelectedRowsData();
      exportData(selectedData);
    });

    function getTableData() {
      var tableData = [];
      $('#tableBody tr').each(function() {
        var rowData = [];
        $(this).find('td').each(function() {
          rowData.push($(this).text());
        });
        tableData.push(rowData);
      });
      return tableData;
    }
  
    function getSelectedRowsData() {
      var selectedData = [];
      $('#tableBody input.row-select:checked').each(function() {
        var rowData = [];
        $(this).closest('tr').find('td').each(function() {
          rowData.push($(this).text());
        });
        selectedData.push(rowData);
      });
      return selectedData;
    }
  
    function exportData(data) {
      var csvContent = "data:text/csv;charset=utf-8,";
      data.forEach(function(row) {
        csvContent += row.join(",") + "\r\n";
      });
      var encodedUri = encodeURI(csvContent);
      var link = document.createElement("a");
      link.setAttribute("href", encodedUri);
      link.setAttribute("download", "data.csv");
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  
    function getData() {
      $.ajax({
        url: 'php/get_data.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
        //   console.log(response); 
          renderTable(response.data); 
        },
        error: function(xhr, status, error) {
        //   console.log(error);
        }
      });
    }

    function renderTable(data) {
      var tableBody = $('#tableBody');
      tableBody.empty(); 
      if (data.length > 0) {
        $.each(data, function(index, row) {
          var html = '<tr>';
          html += '<td><input type="checkbox" class="row-select"></td>';
          html += '<td>' + row.name + '</td>';
          html += '<td>' + row.email + '</td>';
          html += '<td>' + row.phone + '</td>';
          html += '<td>' + row.address + '</td>';
          html += '<td>' + row.city + '</td>';
          html += '</tr>';
          tableBody.append(html);
        });
      }
    }

    getData();
  });
  