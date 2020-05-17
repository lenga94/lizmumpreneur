<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lizmumpreneur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('website/images/icons/logo.jpeg') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"href="{{ asset('css/app.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/custom/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assests/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assests/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/custom/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/custom/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>


<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-b-30">
    <div class="flex-w flex-c cd100 wsize1 bor1">
        <div class="flex-col-c-m size2 bg0 bor2">
            <span class="l1-txt3 p-b-7 days"></span>
            <span class="s1-txt1">Days</span>
        </div>

        <div class="flex-col-c-m size2 bg0 bor2">
            <span class="l1-txt3 p-b-7 hours"></span>
            <span class="s1-txt1">Hours</span>
        </div>

        <div class="flex-col-c-m size2 bg0 bor2">
            <span class="l1-txt3 p-b-7 minutes"></span>
            <span class="s1-txt1">Minutes</span>
        </div>

        <div class="flex-col-c-m size2 bg0">
            <span class="l1-txt3 p-b-7 seconds"></span>
            <span class="s1-txt1">Seconds</span>
        </div>
    </div>

    <div style="margin-top: 10px">
        @include('inc.messages')
    </div>

    <div class="flex-col-c w-full p-t-50 p-b-80">
        <h3 class="l1-txt1 txt-center p-b-10">
            Coming Soon
        </h3>

        <p class="txt-center l1-txt2 p-b-43 wsize2">
            Our website is under construction, follow us for updates now!
        </p>

        {!! Form::open(['route' => ['storeNewClientForUpdates'], 'method' => 'POST', 'class' => 'flex-w flex-c-m w-full contact100-form validate-form', 'id' => 'receiveUpdatesForm']) !!}

        <div class="wrap-input100 validate-input where1" data-validate = "Name is required">
            {{ Form::text('name', '', ['class' => 's1-txt3 placeholder0 input100', 'id' => 'name', 'placeholder' => 'Name']) }}
        </div>

        <div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
            {{ Form::email('email', '', ['class' => 's1-txt3 placeholder0 input100', 'id' => 'email', 'placeholder' => 'Email']) }}
        </div>

        <button type="submit" class="flex-c-m s1-txt4 size3 how-btn trans-04 where1" >   Get Updates</button>

        {!! Form::close() !!}

    </div>

    <span class="s1-txt2 txt-center">
			@ 2020 Elmarc
		</span>

</div>





<!--===============================================================================================-->
<script src="{{ asset('website/assests/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/assests/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('website/assests/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/assests/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/assests/countdowntime/moment.min.js') }}"></script>
<script src="{{ asset('website/assests/countdowntime/moment-timezone.min.js') }}"></script>
<script src="{{ asset('website/assests/countdowntime/moment-timezone-with-data.min.js') }}"></script>
<script src="{{ asset('website/assests/countdowntime/countdowntime.js') }}"></script>
<script>
    $('.cd100').countdown100({
        // Set Endtime here
        // Endtime must be > current time
        endtimeYear: 2020,
        endtimeMonth: 6,
        endtimeDate: 18,
        endtimeHours: 12,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: "Africa/Harare"
        // ex:  timeZone: "America/New_York", can be empty
        // go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('website/assests/tilt/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('website/custom/js/main.js') }}"></script>

</body>
</html>

