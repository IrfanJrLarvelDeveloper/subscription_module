@extends('subscription::layouts.master')

@section('content')


{{--    <p>--}}
{{--        This view is loaded from module: {!! config('subscription.name') !!}--}}
{{--    </p>--}}

    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>


            /*
Inspired by the dribble shot http://dribbble.com/shots/1285240-Freebie-Flat-Pricing-Table?list=tags&tag=pricing_table
*/

            /*--------- Font ------------*/
            @import url(https://fonts.googleapis.com/css?family=Droid+Sans);
            @import url(http://weloveiconfonts.com/api/?family=fontawesome);
            /* fontawesome */
            [class*="fontawesome-"]:before {
                font-family: 'FontAwesome', sans-serif;
            }
            /** {*/
            /*    margin: 0;*/
            /*    padding: 0;*/
            /*    border: 0;*/
            /*    font-size: 100%;*/
            /*    font: inherit;*/
            /*    vertical-align: baseline;*/
            /*    -webkit-box-sizing: border-box;*/
            /*    -moz-box-sizing: border-box;*/
            /*    box-sizing: border-box;*/
            /*}*/
            /*------ utiltity classes -----*/
            .fl{ float:left; }
            .fr{ float: right; }
            /*its also known as clearfix*/
            .group:before,
            .group:after {
                content: "";
                display: table;
            }
            .group:after {
                clear: both;
            }
            .group {
                zoom: 1;  /*For IE 6/7 (trigger hasLayout) */
            }

            /*body {*/
            /*    background: #F2F2F2;*/
            /*    font-family: 'Droid Sans', sans-serif;*/
            /*    line-height: 1;*/
            /*    font-size: 16px;*/
            /*}*/
            .wrapper {

            }
            .pricing-table {
                width: 80%;
                margin: 50px auto;
                text-align: center;
                padding: 10px;
                padding-right: 0;
            }
            .pricing-table .heading{
                color: #9C9E9F;
                text-transform: uppercase;
                font-size: 1.3rem;
                margin-bottom: 4rem;
            }
            .block{
                width: 30%;
                margin: 0 15px;
                overflow: hidden;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                /*    border: 1px solid red;*/
            }
            /*Shared properties*/
            .title,.pt-footer{
                color: #FEFEFE;
                text-transform: capitalize;
                line-height: 2.5;
                position: relative;
            }
            .content{
                position: relative;
                color: #FEFEFE;
                padding: 20px 0 10px 0;
            }
            /*arrow creation*/
            .content:after, .content:before,.pt-footer:before,.pt-footer:after {
                top: 100%;
                left: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
            }
            .pt-footer:after,.pt-footer:before{
                top:0;
            }
            .content:after,.pt-footer:after {
                border-color: rgba(136, 183, 213, 0);
                border-width: 5px;
                margin-left: -5px;
            }
            /*/arrow creation*/
            .price{
                position: relative;
                display: inline-block;
                margin-bottom: 0.625rem;
            }
            .price span{
                font-size: 6rem;
                letter-spacing: 8px;
                font-weight: bold;
            }
            .price sup{
                font-size: 1.5rem;
                position: absolute;
                top: 12px;
                left: -12px;
            }
            .hint{
                font-style: italic;
                font-size: 0.9rem;
            }
            .features{
                list-style-type: none;
                background: #FFFFFF;
                text-align: left;
                color: #9C9C9C;
                padding:30px 22%;
                font-size: 0.9rem;
            }
            .features li{
                padding:15px 0;
                width: 100%;
            }
            .features li span{
                padding-right: 0.4rem;
            }
            .pt-footer{
                font-size: 0.95rem;
                text-transform: capitalize;
            }
            /*PERSONAL*/
            .personal .title{
                background: #78CFBF;
            }
            .personal .content,.personal .pt-footer{
                background: #82DACA;
            }
            .personal .content:after{
                border-top-color: #82DACA;
            }
            .personal .pt-footer:after{
                border-top-color: #FFFFFF;
            }
            /*PROFESSIONAL*/
            .professional .title{
                background: #3EC6E0;
            }
            .professional .content,.professional .pt-footer{
                background: #53CFE9;
            }
            .professional .content:after{
                border-top-color: #53CFE9;
            }
            .professional .pt-footer:after{
                border-top-color: #FFFFFF;
            }
            /*BUSINESS*/
            .business .title{
                background: #E3536C;
            }
            .business .content,.business .pt-footer{
                background: #EB6379;
            }
            .business .content:after{
                border-top-color: #EB6379;
            }
            .business .pt-footer:after {
                border-top-color: #FFFFFF;
            }


            body {font-family: Arial;}

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }
        </style>
    </head>
    <body>

    <h1>Subscription Task</h1>

    <p>Click on the buttons inside the tabbed menu:</p>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Monthly')">Monthly</button>
        <button class="tablinks" onclick="openCity(event, 'Annual')">Annual</button>
        <button class="tablinks" onclick="openCity(event, 'Custom')">Custom</button>
    </div>

    <div id="Monthly" class="tabcontent">

        <div class="wrapper">
            <!-- PRICING-TABLE CONTAINER -->
            <div class="pricing-table group">
                <h1 class="heading">
                    Monthly Subscription
                </h1>
                @foreach($subscriptions as $subscription)
                <!-- PERSONAL -->
                @if($subscription->type=='monthly')
                <div class="block personal fl">
                    <h2 class="title">{{$subscription->name}}</h2>
                    <!-- CONTENT -->
                    <div class="content">
                        <p class="price">
                            <sup>$</sup>
                            <span>{{$subscription->price}}</span>
                            <sub>/{{$subscription->duration}}.</sub>
                        </p>
                        <p class="hint">Perfect for freelancers</p>
                    </div>

                    <div class="pt-footer">
                        <p>Host My Website</p>
                    </div>
                    <!-- /PT-FOOTER -->
                </div>
                    @endif
                <!-- /PERSONAL -->
                    @endforeach
            </div>
            <!-- /PRICING-TABLE -->
        </div>

    </div>

    </div>

    <div id="Annual" class="tabcontent">
        <div class="wrapper">
            <!-- PRICING-TABLE CONTAINER -->
            <div class="pricing-table group">
                <h1 class="heading">
                    Annual Subscription
                </h1>
            @foreach($subscriptions as $subscription)
                <!-- PERSONAL -->
                    @if($subscription->type=='annual')
                        <div class="block personal fl">
                            <h2 class="title">{{$subscription->name}}</h2>
                            <!-- CONTENT -->
                            <div class="content">
                                <p class="price">
                                    <sup>$</sup>
                                    <span>{{$subscription->price}}</span>
                                    <sub>/{{$subscription->duration}}.</sub>
                                </p>
                                <p class="hint">Perfect for freelancers</p>
                            </div>

                            <div class="pt-footer">
                                <p>Host My Website</p>
                            </div>
                            <!-- /PT-FOOTER -->
                        </div>
                    @endif
                <!-- /PERSONAL -->
                @endforeach
            </div>
            <!-- /PRICING-TABLE -->
        </div>
    </div>

    <div id="Custom" class="tabcontent">
        <div class="wrapper">
            <!-- PRICING-TABLE CONTAINER -->
            <div class="pricing-table group">
                <h1 class="heading">
                    Custom Subscription
                </h1>

                <!-- PERSONAL -->

                        <div class="block personal fl">
                            <h2 class="title">Custom (will contact admin will be a form to fill)</h2>
                            <!-- CONTENT -->
                            <div class="content">

                                <input type="text" placeholder="Subscription name">
                                <input type="text" placeholder="Subscription Price">
                                <input type="text" placeholder="Subscription Duration">

                                <p class="hint">Perfect for freelancers</p>
                            </div>


                            <!-- /PT-FOOTER -->
                        </div>

            </div>
            <!-- /PRICING-TABLE -->
        </div>
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    </body>
    </html>

@endsection
