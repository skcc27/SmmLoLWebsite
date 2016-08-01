<!DOCTYPE html>
<html>
<head>
    <!-- Required by Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title and other metadata -->
    <title>Registration form</title>

    <!-- CSS -->
    <!-- TODO: Merge google font into sass -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="container">
    <h1>Registration form</h1>
    <hr>
</div>
<div class="container">
    <div class="row">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Basic informations</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Team name</label>
                    <div class="col-md-4">
                        <input id="name" name="name" type="text" placeholder="Enter your team name here"
                               class="form-control input-md" required="">
                        <span class="help-block">Full name of your team</span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tag">Tag</label>
                    <div class="col-md-4">
                        <input id="tag" name="tag" type="text" placeholder="Tag" class="form-control input-md">
                        <span class="help-block">Enter your short team name</span>
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">Team Password</label>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="Password"
                               class="form-control input-md">
                        <span class="help-block">Enter your team password</span>
                    </div>
                </div>

            @for($i=1;$i<=6;$i++)
                <!-- Form Name -->
                    <legend>Team member # {{$i}} @if($i == 6) (Optional) @endif</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="first_name">First name</label>
                        <div class="col-md-4">
                            <input id="first_name" name="first_name" type="text" placeholder="First name"
                                   class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="last_name">Last name</label>
                        <div class="col-md-4">
                            <input id="last_name" name="last_name" type="text" placeholder="Last name"
                                   class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="batch">SK</label>
                        <div class="col-md-4">
                            <input id="batch" name="batch" type="text" placeholder="Batch" class="form-control input-md"
                                   required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="summoner_name">Summoner name</label>
                        <div class="col-md-4">
                            <input id="summoner_name" name="summoner_name" type="text" placeholder="Summoner name"
                                   class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="phone">Phone</label>
                        <div class="col-md-4">
                            <input id="phone" name="phone" type="text" placeholder="Mobile phone number"
                                   class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="facebook">Facebook</label>
                        <div class="col-md-4">
                            <input id="facebook" name="facebook" type="text" placeholder="Facebook"
                                   class="form-control input-md" required="">

                        </div>
                    </div>
            @endfor

            <!-- Captcha and i agree -->
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="g-recaptcha" data-sitekey="6Ld0eyYTAAAAAGzBPUjG0pjbUZDQT4CQ6tPXsIRI"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<!-- JavaScript -->
<script src="/js/app.js"></script>
</body>
</html>
