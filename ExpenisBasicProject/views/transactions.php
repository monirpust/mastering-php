<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }
            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }
            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }
            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>data 1</td>
                    <td>data 2</td>
                    <td>data 3</td>
                </tr>
                <tr>
                    <td>data 1</td>
                    <td>data 2</td>
                    <td>data 3</td>
                </tr>
                <tr>
                    <td>data 1</td>
                    <td>data 2</td>
                    <td>data 3</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td>$250</td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td>$225</td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td>$25</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>