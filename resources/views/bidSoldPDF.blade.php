
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bidding System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/style2.css">
    </head>
    <body>

        <div class = "invoice-wrapper" id = "print-area">
            <div class = "invoice">
                <div class = "invoice-container">
                    <div class = "invoice-head">
                        <div class = "invoice-head-top">
                            <div class = "invoice-head-top-left text-start text-bold">
                                {{-- <span>Image</span> --}}
                                {{-- <img src = "{{public_path('dist/image/bid-icon.png')}}"> --}}
                            </div>
                            <div class = "invoice-head-top-right text-end">
                                <h3>Bidding System</h3>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-middle">
                            <div class = "invoice-head-middle-left text-start">
                                <p><span class = "text-bold">Date</span>: {{date('M d, Y')}}</p>
                            </div>
                            {{-- <div class = "invoice-head-middle-right text-end">
                                <p><spanf class = "text-bold">User ID:</span>{{Auth::user()->name}}</p>
                            </div> --}}
                        </div>
                        <div class = "hr"></div>
                        <br>
                    </div>
                    <div class = "overflow-view">
                        <div class = "invoice-body">
                            <table>
                                <thead>
                                    <tr>
                                        <td class = "text-bold">Product Name</td>
                                        <td class = "text-bold">Description</td>
                                        <td class = "text-bold">Starting Price</td>
                                        <td class = "text-bold">Ending price</td>
                                        <td class = "text-bold">Image</td>
                                        <td class = "text-bold">Dlivery Status</td>
                                        <td class = "text-bold">Buyer Name</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $mybid=>$bid)
                                    <tr>
                                        <td>{{$bid->name}}</td>
                                        <td>{{$bid->description}}</td>
                                        <td>{{$bid->starting_price}}</td>
                                        <td>{{$bid->ending_price}}</td>
                                        <td><img src="{{public_path('images/'.$bid->image)}}" alt="" width="80px" height="80px"></td>
                                        @if ($bid->delivery_status == 'Your product will be delivered within the next 72 hours.')
                                            <td>Pending</td>
                                        @else
                                            <td>{{$bid->delivery_status}}</td>
                                        @endif
                                        <td>{{$bid->buyer_name}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class = "invoice-foot text-center">
                        <h3 class = "text-bold text-center">Thank you for visiting our website.</h3>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
