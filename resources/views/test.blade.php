<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
        {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        <link rel="stylesheet" href="dist/css/style2.css">
    </head>
    <body>

        <div class = "invoice-wrapper" id = "print-area">
            <div class = "invoice">
                <div class = "invoice-container">
                    <div class = "invoice-head">
                        <div class = "invoice-head-top">
                            <div class = "invoice-head-top-left text-start">
                                <img src = "dist/image/bid-icon.png">
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
                            <div class = "invoice-head-middle-right text-end">
                                <p><spanf class = "text-bold">User ID:</span>16789</p>
                            </div>
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
                                    <tr>
                                        <td>Design</td>
                                        <td>Creating a website design</td>
                                        <td>$50.00</td>
                                        <td>10</td>
                                        <td class = "text-end">$500.00</td>
                                    </tr>
                                    <tr>
                                        <td>Development</td>
                                        <td>Website Development</td>
                                        <td>$50.00</td>
                                        <td>10</td>
                                        <td class = "text-end">$500.00</td>
                                    </tr>
                                    <tr>
                                        <td>SEO</td>
                                        <td>Optimize the site for search engines (SEO)</td>
                                        <td>$50.00</td>
                                        <td>10</td>
                                        <td class = "text-end">$500.00</td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="4">10</td>
                                        <td>$500.00</td>
                                    </tr> -->
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

        {{-- <script src = "dist/js/script.js"></script> --}}
    </body>
</html>