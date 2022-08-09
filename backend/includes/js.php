<script type="text/javascript">
    function hide_show_table(col_name) {
        var checkbox_val = document.getElementById(col_name).value;
        if (checkbox_val == "hide") {
            var all_col = document.getElementsByClassName(col_name);
            for (var i = 0; i < all_col.length; i++) {
                all_col[i].style.display = "none";
            }
            document.getElementById(col_name + "_head").style.display = "none";
            document.getElementById(col_name).value = "show";
        } else {
            var all_col = document.getElementsByClassName(col_name);
            for (var i = 0; i < all_col.length; i++) {
                all_col[i].style.display = "table-cell";
            }
            document.getElementById(col_name + "_head").style.display = "table-cell";
            document.getElementById(col_name).value = "hide";
        }
    }
</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
    // JavaScript program to illustrate
    // Table sort for both columns and both directions.
    function sortTable(n) {
        var table;
        table = document.getElementById("dataTable");
        var rows, i, x, y, count = 0;
        var switching = true;

        // Order is set as ascending
        var direction = "ascending";

        // Run loop until no switching is needed
        while (switching) {
            switching = false;
            var rows = table.rows;

            //Loop to go through all rows
            for (i = 1; i < (rows.length - 1); i++) {
                var Switch = false;

                // Fetch 2 elements that need to be compared
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];

                // Check the direction of order
                if (direction == "ascending") {

                    // Check if 2 rows need to be switched
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If yes, mark Switch as needed and break loop
                        Switch = true;
                        break;
                    }
                } else if (direction == "descending") {

                    // Check direction
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If yes, mark Switch as needed and break loop
                        Switch = true;
                        break;
                    }
                }
            }
            if (Switch) {
                // Function to switch rows and mark switch as completed
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;

                // Increase count for each switch
                count++;
            } else {
                // Run while loop again for descending order
                if (count == 0 && direction == "ascending") {
                    direction = "descending";
                    switching = true;
                }
            }
        }
    }



    function CopyToClipboard(containerid) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select().createTextRange();
            document.execCommand("copy");

        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
            document.execCommand("copy");
            alert("text copied")
        }
    }
</script>
<script>
    function exportTableToExcel(tableID, filename = '') {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';

        // Create download link element
        downloadLink = document.createElement("a");

        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

            // Setting the file name
            downloadLink.download = filename;

            //triggering the function
            downloadLink.click();
        }
    }
</script>