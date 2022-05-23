<!DOCTYPE html>
<html lang="en">

<head>
     <!--JQuery-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src = "js/bootstrap.min.js"></script>
    <!-- jQuery first-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script src = "js/Popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <title>My Company, the largest NFT marketplace in Africa</title>
</head>

<body>
    <?php include 'header.php';?>
    <div class="ovalcontainer">
        <div class="ovall">
            <div class="chakra-stack css-tsbmpo">
                <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-1o2mipv">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 16a1 1 0 100 2h11a1 1 0 100-2H2zm17 0a1 1 0 100 2h3a1 1 0 100-2h-3z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 19a2 2 0 100-4 2 2 0 000 4zm0 2a4 4 0 100-8 4 4 0 000 8zM2 6a1 1 0 000 2h3a1 1 0 000-2H2zm9 0a1 1 0 100 2h11a1 1 0 100-2H11z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9a2 2 0 100-4 2 2 0 000 4zm0 2a4 4 0 100-8 4 4 0 000 8z" fill="currentColor"></path>
                </svg>
                <h1 class="css-1ja6mlz">Settings</h1>
            </div>

            <div class="chakra-tabs css-16o7mxb">
                <div role="tablist" aria-orientation="horizontal" class="chakra-tabs__tablist css-1xhq01z">
                    <a class="chakra-link chakra-tabs__tab css-1qccz0r" type="button" role="tab" tabindex="0" aria-selected="true" aria-controls="tabs-47--tabpanel-0" href="/settings/profile" data-index="0">Profile</a><a class="chakra-link chakra-tabs__tab css-7m8da6" type="button" role="tab" tabindex="-1" aria-selected="false" aria-controls="tabs-47--tabpanel-1" href="/settings/notification" data-index="1">Notification</a>
                </div>
            </div>
        </div>
        <div class="seinside">
            <div class="chakra-stack css-n21gh5">
                <h2 class="seinside_h1">Profile Settings</h2>
                <div class="cardfontszUnderclass">To set an NFT as your avatar, open the NFT from 
                    >My Items and click Set as my avatar in menu.
                </div>
            </div>
        </div>
        <form action="" class="sett">
        <div role="group" class="setformcontrol">
            <label id="form_label" for="field2" class="form_label">User Name</label>
            <input placeholder="Your name" id="field2" class="setinputcontrol" value="">
            <label id="form_label" for="field3" class="form_label">Bio</label>
            <input placeholder="Your name" id="field3" class="setinputcontrol" value="">
            <label id="form_label" for="field4" class="form_label">Email</label>
            <input placeholder="Your name" id="field4" class="setinputcontrol" value="">
        </div>
        <div role="group" class="setformcontrol">
            <input type="submit" class="save_btn" value="Save">
        </div>
        </form>
    </div>
</body>