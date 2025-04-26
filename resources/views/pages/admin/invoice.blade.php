<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Order #{{ $order->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .invoice-container {
            width: 80%;
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .invoice-header .logo {
            font-size: 28px;
            font-weight: bold;
            color: #2d3e50;
        }

        .invoice-header .company-details {
            text-align: right;
        }

        .invoice-header .company-details p {
            margin: 0;
            font-size: 14px;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .invoice-info .billing-info, .invoice-info .order-info {
            width: 48%;
        }

        .invoice-info h4 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #2d3e50;
        }

        .invoice-info p {
            margin: 5px 0;
            font-size: 14px;
        }

        .table {
            width: 100%;
            margin-bottom: 30px;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .table th {
            background-color: #f7f7f7;
            font-size: 16px;
            color: #2d3e50;
        }

        .table td {
            font-size: 14px;
            color: #6c757d;
        }

        .table .total {
            font-weight: bold;
            font-size: 16px;
            color: #2d3e50;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="invoice-container">
        <div class="invoice-header">
            <div class="logo">Invoice</div>
            <div class="company-details">
                <p><strong>Company Name</strong></p>
                <p>123 Business St, Business City</p>
                <p>Email: support@company.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>

        <div class="invoice-info">
            <div class="billing-info">
                <h4>Billing Info</h4>
                <p><strong>Name:</strong> {{ $order->name }}</p>
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
            </div>
            <div class="order-info">
                <h4>Order Info</h4>
                <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                <p><strong>Service:</strong> {{ $order->service }}</p>
                <p><strong>Date:</strong> {{ $order->created_at->format('F j, Y') }}</p>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->service }}</td>
                    <td>{{ $order->price }}</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <p><strong>Total:</strong> {{ $order->price }}</p>
        </div>

        <div class="footer">
            <p>Thank you for your business! If you have any questions, feel free to contact us.</p>
        </div>
    </div>

</body>
</html>
