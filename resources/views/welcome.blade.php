<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    
    <body class="antialiased">
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ574TZ8WDSmc3crp5cORJZLtoGqo3jRJGst01eWbzzSzHE7_uPYe-KHX6if7lx5HmdNZY&usqp=CAU" alt="" width="72" height="72">
        
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your receipt</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <!-- <div class="border border-dark" style="max-width: 384px !important;">
            <table align="center">
                <tr>
                    <td colspan="2" width="65%" class="text-center border border-dark">
                        Barcode
                    </td>
                    <td width="35%" class="text-center border border-dark">
                        AXISEXPRESSDC
                        <br>B2BR
                    </td>
                </tr>
                <tr>
                    <td  width="33%" class="text-center border border-dark">
                        EXCELCUM
                    </td>
                    <td width="33%" class="text-center border border-dark">
                        122004
                    </td>
                    <td width="33%" class="text-center border border-dark">
                        149/300
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="65%" class="text-center border border-dark">
                            Gurgaon_Shil_L(Hariyana)
                    </td>
                    <td width="35%" class="text-center border border-dark">
                        MAWB:
                        <br>123124678452
                    </td>    
                </tr>
                <tr>
                    <td colspan="3"  class="text-center border border-dark">
                    1001 - Corporate Levels, Ayodhya Chowk, 150 Feet Ring Rd, Rajkot, Gujarat 360006
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="3"  class="text-center border border-dark">
                    Barcode
                    </td>
                    
                </tr>
            </table>
          </div> -->
          <div class="border border-dark" style="max-width: 384px !important;">
            <table id="printing-table" style="width:100%;table-layout:fixed">
                <tr>
                    <td style="width:25%">TO.</td>
                    <td></td>
                </tr>
                <tr>
                   <td colspan="2" id="to_cell" style="width:25%"></td>
                   <!-- <td ></td> -->
                </tr>
                <tr>
                    <td style="width:25%">INVOICE NO.</td>
                    <td id="invoice_number_cell">

                    </td>
                
                </tr>   
                <tr>
                    <td style="width:25%">PART NO . :</td>
                    <td id="part_number_cell">

                    </td>
                </tr>
                <tr>
                    <td style="width:25%">TOTAL =</td>
                    <td id="total_cell">

                    </td>
                </tr>
                <tr>
                    <td style="width:20%">TRANS . -</td>
                    <td id="transaction_cell">

                    </td>
                </tr>
                <tr>
                    <td style="width:20%">CARTON NO. </td>
                    <td id="carton_number_cell">

                    </td>
                </tr>
            </table>
          </div>
          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-12 mb-12 mb-3">
                <label for="firstName">To</label>
                <!-- <input type="text" class="form-control" id="to" placeholder=""  required=""> -->
                <textarea class="form-control" rows="4" id="to" placeholder=""  required=""></textarea>
                <div class="invalid-feedback">
                  Valid To is required.
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lastName">Invoice NO.</label>
                    <input type="text" class="form-control" id="invoice_number" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid last Invoice No. is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lastName">Part NO.</label>
                    <input type="text" class="form-control" id="part_number" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid last Invoice No. is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lastName">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid last Invoice No. is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lastName">TRANS.</label>
                    <input type="text" class="form-control" id="transaction" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid last Invoice No. is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lastName">Carton NO.</label>
                    <input type="text" class="form-control" id="carton_number" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid last Invoice No. is required.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" onclick="printTable()">Print</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Wings Tech Solutinos</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    </body>
    <script>
        // Add event listeners to form fields
        document.getElementById('to').addEventListener('input', updateTable);
        document.getElementById('invoice_number').addEventListener('input', updateTable);
        document.getElementById('part_number').addEventListener('input', updateTable);
        document.getElementById('total').addEventListener('input', updateTable);
        document.getElementById('transaction').addEventListener('input', updateTable);
        document.getElementById('carton_number').addEventListener('input', updateTable);

        // Function to update table
        function updateTable() {
            var to = document.getElementById('to').value;
            var invoiceNumber = document.getElementById('invoice_number').value;
            var partNumber = document.getElementById('part_number').value;
            var total = document.getElementById('total').value;
            var transaction = document.getElementById('transaction').value;
            var cartonNumber = document.getElementById('carton_number').value;

            // Update table cells with form values
            console.log("to");
            document.getElementById('to_cell').innerText = to;
            document.getElementById('invoice_number_cell').innerText = invoiceNumber;
            document.getElementById('part_number_cell').innerText = partNumber;
            document.getElementById('total_cell').innerText = total;
            document.getElementById('transaction_cell').innerText = transaction;
            document.getElementById('carton_number_cell').innerText = cartonNumber;
        }
        function printTable() {
             // Clone the printing table
            var tableToPrint = document.getElementById('printing-table').cloneNode(true);

            // Create a new window
            var newWin = window.open('', 'Print-Window');

            // Append the table to the new window
            newWin.document.open();
            newWin.document.write('<html><head><title>Print</title></head><body>' + tableToPrint.outerHTML + '</body></html>');
            newWin.document.close();

            // Print the contents
            newWin.print();
            
        }
    </script>
</html>
