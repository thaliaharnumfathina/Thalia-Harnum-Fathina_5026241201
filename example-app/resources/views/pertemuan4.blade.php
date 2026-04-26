<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pertemuan 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #eeeeee;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .jumbotron-white {
            background-color: white;
            margin-bottom: 0;
            border-radius: 0;
            padding: 100px 0;
        }

        .jumbotron-gray {
            background-color: #f4f4f4;
            margin-bottom: 0;
            border-radius: 0;
            padding: 100px 150px;
        }

        .card-pricing {
            border: none;
            border-radius: 0;
        }

        .card-header {
            border: none;
            border-radius: 0;
            color: white;
            font-weight: bold;
            padding: 20px;
            text-transform: uppercase;
        }

        .bg-yellow {
            background-color: #f1c40f;
        }

        .bg-green {
            background-color: #76bc9b;
        }

        .bg-popular {
            background-color: #a2d9a2;
            color: white;
            padding: 10px;
            font-size: 10px;
            margin-top: -35px;
            position: relative;
            z-index: 5;
            font-weight: bold;
        }

        .price-value {
            font-size: 56px;
            color: #777;
            font-weight: 300;
            padding: 30px 0;
        }

        .price-value small {
            font-size: 16px;
        }

        .list-group-item {
            border-left: none;
            border-right: none;
            padding: 12px 0px;
            color: #888;
            font-size: 14px;
            text-align: center;
        }

        .btn-custom {
            border-radius: 0;
            padding: 12px;
            text-transform: uppercase;
            font-weight: bold;
            border: none;
        }

        .btn-yellow {
            background-color: #f1c40f;
            color: white;
        }

        .btn-gray {
            background-color: #e0e0e0;
            color: #bbb;
        }
    </style>

</head>

<body>
    <div class="container" style="max-width: 1080px;">
        <div class="jumbotron jumbotron-white text-center">
            <h1 class="display-4">Select a plan.</h1>
            <p class="text-muted mx-auto" style="max-width: 500px;">
                Unlock your creative potential with our flexible pricing. Whether you're a <b>solo designer</b> or a
                <b>global agency</b>, we have the perfect tools to bring your ideas to life.
            </p>
        </div>
    </div>

    <div class="container" style="max-width: 1080px;">
        <div class="jumbotron jumbotron-gray">
            <div class="row align-items-strecth justify-content-center mb-5 text-center">
                <div class="col-lg-4">
                    <div class="card card-pricing text-center">
                        <div class="card-header bg-yellow">Personal</div>
                        <div class="card-body">
                            <div class="price-value"><sup><i>$</i></sup><i>50</i><small>/mo</small></div>
                            <ul class="list-group list-group-flush mb-4 text-center w-100 p-0">
                                <li class="list-group-item text-nowrap"><b>Free</b> 50+ Basic Templates</li>
                                <li class="list-group-item text-nowrap"><b>Unlimited</b> Cloud Project Saves</li>
                                <li class="list-group-item text-nowrap"><b>Unlimited</b> Community Assets</li>
                                <li class="list-group-item text-nowrap"><b>2x</b> Faster Image Rendering</li>
                                <li class="list-group-item text-nowrap"><b>100x</b> Standard Stock Photos</li>
                            </ul>
                            <button class="btn btn-gray btn-block btn-custom">Your Plan</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-pricing card-featured text-center">
                        <div class="bg-popular text-uppercase">Popular</div>
                        <div class="card-header bg-green">Professional</div>
                        <div class="card-body">
                            <div class="price-value"><sup><i>$</i></sup><i>100</i><small>/mo</small></div>
                            <ul class="list-group list-group-flush mb-4 text center w-100 p-0">
                                <li class="list-group-item text-nowrap"><b>Free</b> Premium Assets</li>
                                <li class="list-group-item text-nowrap"><b>Unlimited</b> Custom Brand Kits</li>
                                <li class="list-group-item text-nowrap"><b>Unlimited</b> Priority Cloud Space</li>
                                <li class="list-group-item text-nowrap"><b>2x</b> High-Resolution Exports</li>
                                <li class="list-group-item text-nowrap"><b>100x</b> Premium Video Clips</li>
                            </ul>
                            <button class="btn btn-yellow btn-block btn-custom text-white">Upgrade</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-pricing text-center">
                        <div class="card-header bg-yellow">Business</div>
                        <div class="card-body">
                            <div class="price-value"><sup><i>$</i></sup><i>225</i><small>/mo</small></div>
                            <ul class="list-group list-group-flush mb-4 text center w-100 p-0">
                                <li class="list-group-item text-nowrap"><b>Free</b> Site License</li>
                                <li class="list-group-item text-nowrap"><b>Unlimited</b> Team Collaborators</li>
                                <li class="list-group-item text-nowrap"><b>Unlimited</b> Dedicated Support</li>
                                <li class="list-group-item text-nowrap"><b>2x</b> AI-Powered Design Tools</li>
                                <li class="list-group-item text-nowrap"><b>100x</b> Custom API Integrations</li>
                            </ul>
                            <button class="btn btn-yellow btn-block btn-custom text-white">Upgrade</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>