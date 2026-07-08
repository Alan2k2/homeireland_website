<?php
// $order=$data['order'];
// $customer=$data['customer'];
// $ads=$data['ads'];
// $automobiles=$data['automobiles'];
// $property=$data['property'];
// echo"<pre>";print_r($ads);exit;
$type="";$type2="";
if(is_object($property))
{
    $type="Property";
    // if($property->main_cat==4||$property->main_cat==7||$property->main_cat==12)
    // {
    //     echo"1";exit;
    //   $type="Parking"; 
    // }
}
elseif(is_object($ads))
{
   
    $type='Advertisement';
    $type2="";
}
elseif(is_object($automobiles))
{
    $type='Automobiles';
}
elseif(is_object($property))
{
    $type='Property';
}
elseif($slot>0)
{
    $type=" Slot -".$slot;
}
// exit;

?>
<html>
<head>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        #invoice-content {
            background-color: white;
            width: 90%;
            padding: 40px;
            box-sizing: border-box;
        }

        
        .info-section ul,
        .dates-section ul,
        .address-section ul {
            display: table;
            width: 100%;
            padding: 0;
            margin: 0 0 20px 0;
            list-style-type: none;
            border-spacing: 20px 0;
            table-layout: fixed;
        }

        .info-section li,
        .dates-section li,
        .address-section li {
            display: table-cell;
            padding: 15px;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
            vertical-align: top;
        }

       
        .header {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 15px;
            margin-bottom: 25px;
            width: 100%;
        }

        .header ul {
            display: table;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style-type: none;
            border-spacing: 20px 0;
        }

        .header ul li {
            display: table-cell;
            vertical-align: top;
        }

        /* .header ul li:first-child {
            width: 100px;
        } */

        .header ul li img {
            height: 120px;
            width: 300px;
        }

        .header ul li ul {
            display: block;
            padding-left: 20px;
            border-spacing: 0;
            text-align: right;
        }

        .header ul li ul h2 {
        text-align: right; 
        /* margin-right:-100px;  */
    }


        .header ul li ul li {
            display: block;
            margin: 5px 0;
            font-size: 14px;
            color: #495057;
        }

      
        .info-section li {
            width: 50%;
        }

        .dates-section li {
            width: 33.33%;
        }

        .address-section li {
            width: 50%;
            font-style: normal;
        }

      
        .info-section li div:first-child,
        .dates-section li div:first-child,
        .address-section li div:first-child {
            margin-bottom: 5px;
            color: #666;
            font-style: normal;
        }

        

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        .summary-section {
            width: 100%;
            text-align: right;
            margin: 20px 0;
        }

        .total-box {
            display: inline-block;
            width: 300px;
            padding: 10px;
            border: 1px solid #dee2e6;
            background-color: #e9ecef;
            text-align: center;
        }

        .total-box h6 {
            margin: 0;
            font-size: 16px;
        }

        .total-box p {
            margin: 5px 0;
            font-size: 20px;
            font-weight: bold;
        }

        .notes-section {
            width: 100%;
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
            box-sizing: border-box;
        }

        .notes-section h5 {
            margin: 0 0 10px 0;
            font-size: 16px;
        }

        .notes-section p {
            margin: 5px 0;
            color: #6c757d;
        }

        @media print {
            body {
                width: 100%;
                margin: 0;
                padding: 0;
            }

            #invoice-content {
                width: 100%;
                margin: 0;
                padding: 40px;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div id="invoice-content">
        <div class="header">
            <ul>
                <li>
                    <!-- <img src="{{asset('watermark/Logo1.png')}}" alt="Company Logo"> -->
                    <img src="data:image/png;base64,{{ $base64Image }}" alt="Logo">
                </li>
                <li>
                    <ul>
                        <li><H2>Home Ireland</H2></li>
                        <li> 11 Elgon Walk, Ardkeen Village</li>
                        <li>Waterford, Ireland X91 C9F3</li>
                        <li>info@homeireland.ie</li>
                        <li> 0858544057 / 0899488580</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="info-section">
            <ul>
                <li>
                    <div>Customer</div>
                    <div class="bold">{{$customer->full_name}}</div>
                    <div></div>
                </li>
                <li>
                    <div>Invoice Number</div>
                    <div class="bold">{{$order->unique_id}}</div>
                </li>
            </ul>
        </div>

        <div class="dates-section">
            <ul>
                <li>
                    <div>Created Date</div>
                    <div>{{$order->created_at}}</div>
                </li>
                <li>
                    <div>Due Date</div>
                    <div>{{$order->expire_date}}</div>
                </li>
                <!-- <li>
                    <div>Reference</div>
                    <div>1234</div>
                </li> -->
            </ul>
        </div>

        <div class="address-section">
            <ul>
                <li>
                    <div>Billing to</div>
                    <address style="font-style: normal;">{{$customer->address}}<br>{{$customer->email}}<br>{{$customer->phone}}</address>
                </li>
                <li>
                    <div>Delivery Address</div>
                    <address style="font-style: normal;">{{$customer->address}}<br>{{$customer->email}}<br>{{$customer->phone}}</address>
                </li>
            </ul>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Type</th>
                    <th>Qty</th>
                    <th>Vat % </th>
                    <th>Amount €</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><p>{{$type}}</p><p>{{$type2}}</td>
                    <td>1</td>
                    <td>{{$vatValue}} %</td>
                    <td>{{$order->amount}} €</td>
                </tr>
            </tbody>
        </table>

        <div class="summary-section">
            <div class="total-box">
                <h6>Total</h6>
                <p>{{$order->amount}} €</p>
            </div>
        </div>

        <div class="notes-section">
            <h5>Payment Details</h5>
            <p><strong>NAME:</strong>{{$customer->full_name}}</p>
            <p><strong>Phone:</strong>{{$customer->phone}}</p>
            <p><strong>Status:</strong>{{$order->state}}</p>
        </div>

        <!-- <div class="notes-section">
            <h5>Terms</h5>
            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div> -->
    </div>
</body>
</html>