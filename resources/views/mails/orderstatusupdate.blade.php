<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #c70017;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .header img {
            height: 50px;
            margin-right: 20px;
        }
        .content {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            padding: 20px;
        }
        h2 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #333;
        }
        .total {
            text-align: right;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #c70017;
            color: #fff;
            text-decoration: none;
            border: none;
        }
        .button:hover {
          background-color:#000000;
          border-color:#ffffff;
          color:#ffffff;
          border-style:solid;
          border-width:1px
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Order Status Update</h1>
        </div>
        <div class="content">
            <div align="center">
                <img src="{{asset("assets/uploads/logos/".$config->logo)}}" alt="Logo">
            </div>

            <p>The status of your order has changed to:
                @if ($order->status == "0")
                    <font color="orange">Pending</font>
                @elseif ($order->status == "1")
                    <font color="limegreen">Completed</font>
                @elseif ($order->status =="2")
                    <font color="red">Cancelled</font>
                @endif
            </p>
            <h2>Customer Information</h2>
            <table>
                <tr>
                    @php
                        $date = new DateTime($order->created_at, new DateTimeZone(date_default_timezone_get()));
                        $date->setTimezone(new DateTimeZone($user->timezone));
                    @endphp
                    <th>Order Date: ({{ $user->timezone }})</th>
                    <td>{{ $order->fname }} {{ $order->lname }}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{ $order->status == '0' ?'Pending' : 'Completed' }}</td>
                </tr>
                <tr>
                    <th>Traking No:</th>
                    <td>{{ $order->tracking_no }}</td>
                </tr>
                @if ($order->payment_mode != null)
                    <tr>
                        <th>Payment Mode:</th>
                        <td>
                            {{ $order->payment_mode }}
                            @if ($order->payment_id != null)
                                {{ $order->payment_id }}
                            @endif
                        </td>
                    </tr>
                @endif
                <tr>
                    <th>Name:</th>
                    <td>{{ $order->fname }} {{ $order->lname }}</td>
                </tr>
                <tr>
                    <th>Address 1:</th>
                    <td>{{ $order->address1 }}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $order->phone }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $order->email }}</td>
                </tr>
                <tr>
                    <th>Zipcode:</th>
                    <td>{{ $order->zipcode }}</td>
                </tr>
                <tr>
                    <th>Address 1:</th>
                    <td>{{ $order->address1 }}</td>
                </tr>
                <tr>
                    <th>Address 2:</th>
                    <td>{{ $order->address2 }}</td>
                </tr>
                <tr>
                    <th>City:</th>
                    <td>{{ $order->city }}</td>
                </tr>
                <tr>
                    <th>State:</th>
                    <td>{{ $order->state }}</td>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td>{{ $order->country }}</td>
                </tr>
                @if ($order->note != null)
                    <tr>
                        <th>Notes:</th>
                        <td>{{ $order->note }}</td>
                    </tr>
                @endif
            </table>

            <h2>Order Details</h2>
            <table>
                @php
                    $total = 0;
                @endphp
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>SubTotal</th>
                </tr>
                @foreach ($order->orderitems as $item)
                    <tr>
                        @php
                            if ($item->discount == "1") {
                                $price = $item->product->selling_price;
                            }else {
                                $price = $item->product->original_price;
                            }
                        @endphp
                        <td>{{ $item->product->name }}</td>
                        <td align="center">
                            {{ $item->qty }}
                            @php
                                $total +=  $price * $item->qty;
                                $subtotal =  $price * $item->qty;
                            @endphp
                        </td>
                        @if ($item->discount == "1")
                        <td>{{ $config->currency_simbol }}{{ $item->price }} <strike>{{ $config->currency_simbol }}{{ $item->product->original_price }}</strike></td>
                        @else
                            <td>{{ $config->currency_simbol }}{{ $item->price }}</td>
                        @endif

                        <td align="right">{{ $config->currency_simbol }}{{ number_format($subtotal,2, '.', ',') }}</td>
                    </tr>
                @endforeach
                @if ($order->total_tax != 0)
                <tr>
                    @php
                        $tax_total = $order->total_tax;
                        $total = $total + $tax_total;
                    @endphp
                    <td colspan="3" class="total">Tax:</td>
                    <td align="right">{{ $config->currency_simbol }}{{ number_format($tax_total,2, '.', ',') }}</td>
                </tr>
                @endif
                <tr>
                    <td colspan="3" class="total">Total:</td>
                    <td align="right">{{ $config->currency_simbol }}{{ number_format($total,2, '.', ',') }}</td>
                </tr>
            </table>

            <div class="button-container">
                <a href="{{ url('view-order/'.$order->id) }}" class="button">Go to Order</a>
            </div>
        </div>
    </div>
</body>
</html>
