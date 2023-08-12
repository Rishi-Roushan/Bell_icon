.
<!DOCTYPE html>
<html>

<head>
    <title>Bell Icon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css " />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/ee1c3da296.js"></script>
    <style>
        .content_for_modal {
            margin-top: -120px;
        }

        .total_notification {
            margin-top: -22px;
            margin-bottom: 1rem;
            margin-left: 14px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <a class="navbar-brand">Home</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <span class="notification_bell"><i class="fa fa-bell notify_me"></i></span>
    </nav>
    <!-- <button type="button">
            Launch demo modal
        </button> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <a class="navbar-brand">Home</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <span class="notification_bell"><i class="fa fa-bell notify_me">
                <p class="total_notification"></p>
            </i></span>
    </nav>
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content content_for_modal">
                <div class="modal-header" style="background-color: ghostwhite;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Friend Request</h5>
                    <button type="button" class="close_modal" style="margin-right:24px;border:none" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: darkslateblue;">
                    <div class="container">
                        <div class="rowfordiv">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $(".tooltip").hide();
        $.ajax({
            type: 'GET',
            url: "https://reqres.in/api/users?page=2",
            data: {},
            beforeSend: function() {}
        }).done(function(response) {
            var counts = 0;
            $.each(response.data, function(i, v) {
                counts++;
            });
            $(".total_notification").add().html(counts);
        });
    });
    $('.notify_me').on('click', function() {
        $("#exampleModalCenter").show().attr(
            '<style>position: relative;animation-name:example; animation-duration: 4 s; @keyframes example {0 % {margin-top:0px;}100 % {margin-top:0px;}</style>'
        );
        $.ajax({
            type: 'GET',
            url: "https://reqres.in/api/users?page=2",
            data: {},
            beforeSend: function() {}
        }).done(function(response) {
            console.log(response);
            var trArr = new Array();
            var divArr = new Array();
            var count = 0;
            var count1 = 1;
            $.each(response.data, function(i, v) {
                count++;
                $('.rowfordiv').append("<div class='hello" + count +
                    "' style='background-color:#F0F0F0'>" + "<div class='row" +
                    count +
                    "'style='border:1px solid yellow;width: 50px;height:40px;background-image:url(" +
                    v.avatar +
                    ");background-size:cover;background-repeat:no-repeat'></div>" +
                    "<div class='rows" + count +
                    "'style='border:0px solid red;width:350px;height:40px;margin-top:-40px;margin-left:52px;'>" +
                    "<p class='pclass" + count + "'>" + "&nbsp;&nbsp;" + v.first_name +
                    "&nbsp;&nbsp;" + v
                    .last_name +
                    "</p>" + "</div>" +
                    "<button type='button' class='closediv" + count +
                    "'style='margin-top:-36;margin-left:405px;border:none;' aria-label='Close'>" +
                    '<span aria-hidden="true" onclick="this.parentNode.parentNode.remove(); return false;">' +
                    '&times;' + '</span>' + "</div>" + "<br/>");
            });
        });
    });
    $('.close_modal').on('click', function() {
        $("#exampleModalCenter").hide();
        $('.rowfordiv').empty();
    });
</script>

</html>