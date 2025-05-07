<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body { font-family: sans-serif; }
        .invoice-box { padding: 20px; border: 1px solid #eee; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <h2>Invoice #{{ $order->order_id }}</h2>
        <p><strong>Name:</strong> {{ $order->name }}</p>
        <p><strong>Service:</strong> {{ $order->service }}</p>
        <p><strong>Price:</strong> {{ $order->price }}</p>
        <p><strong>Payment Type:</strong> {{ $order->payment_type }}</p>
        <p><strong>Order Date:</strong> {{ $order->created_at->format('Y-m-d') }}</p>
    </div>
</body>
</html>
