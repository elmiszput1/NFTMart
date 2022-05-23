<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <script src="https://kit.fontawesome.com/cbea283966.js" crossorigin="anonymous"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <script src="js/nav.js" defer></script>
    <title>Mays</title>
</head>
<body>
    <header class="primary-header flex">
        <div class="primary_logo">
            <a href="index.php"><img src="img/crazydevlogo.png" alt="" class="logo"></a>
        </div> 
        <div class="search_ba">
            <div class="chakra-input__left-element css-wig88s" variant="filled"><svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-n5gr1q"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.906 16.32a8 8 0 111.414-1.414l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387zM16 10a6 6 0 11-12 0 6 6 0 0112 0z" fill="currentColor"></path></svg></div>
                <input class="search_it" type="text" placeholder="Search" name="search">
            </div>
            <button class="mobile-nav-toggle"  aria-controls="primary-navigation" aria-expanded="false">
                <span class="sr-only"></span>
            </button>
            <!-- Profile Toggle -->
            <button class="profile-nav-toggle"  aria-controls="primary-navigatio" aria-expanded="false">
                <!-- <span class="sr-only"></span> -->
            </button>
            <!-- Mobile Search Toggle -->
            <button class="search_toggle">
            <!-- <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-n5gr1q2"  stroke-width="2"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.906 16.32a8 8 0 111.414-1.414l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387zM16 10a6 6 0 11-12 0 6 6 0 0112 0z" fill="currentColor"></path></svg> -->
            <svg role="img"  viewBox="0 0 24 24" focusable="false" class="chakra-icon css-n5gr1q2" viewBox="0 0 24 24" aria-labelledby="searchIconTitle" stroke="#8e8e8e" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title id="searchIconTitle">Search</title> <path d="M14.4121122,14.4121122 L20,20"/> <circle cx="10" cy="10" r="6"/> </svg>
            </button>

        <button class="mobile-search-toggle">
            <span class="sr-only"></span>
        </button>
        <!-- <div class="search_toggle">
            <div class="search_toggle_inner">
            </div>
        </div> -->
             
        <nav>
            <ul id="primary-navigation" 
            data-visible="false" class="primary-navigation flex">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="collections.php">Collection</a></li>
            </ul>
        </nav> 
   </header>
   
   <!-- This js bad boy down here is controlling the search bar -->
   <script>
   $(document).ready(function(){
    // $('.search_ba').css('display','none');
       $('.search_toggle').click(function(){
          $('.search_ba').width('88%');
          $('.search_ba').css('left','10px');
          $('.mobile-search-toggle').show();
       })

       $('.mobile-search-toggle').click(function(){
          $('.search_ba').width('0%');
          $('.search_ba').css('left','-3rem');
          $('.mobile-search-toggle').hide();
       })
   })
   </script>







<!-- Connect Wallet Modal  -->
<div class="cwalletModalContainer">
    <section class="cwalletModal">
    <header class="cwalletModal_header">
            <div class="cwalletModal_title">
                <h2 class="cwalletModal_text">Connect Wallet</h2>
            </div>
            <div class="cwalletModal_btn">
                 <button type="button" class="cwalletModal_close" aria-label="Close modal" tabindex="101">
                     <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                </button>
            </div>
    </header>
    <div class="cwalletModal_content">
        <div class="cwalletModal_item">
            <div class="wallet_icon">
                <div class="wicon">
                    <img src="img/MetaMask_Fox.svg.png" alt="MetaMask">
                </div> 
            </div>
            <div class="wallet_name">
            <span class="w_name">MetaMask</span>
            </div>
        </div>
        <div class="cwalletModal_item">
            <div class="wallet_icon">
                <div class="wicon">
                    <img src="img/TWT.png" alt="TWT">
                </div> 
            </div>
            <div class="wallet_name">
            <span class="w_name">Trust Wallet</span>
            </div>
        </div>
        <div class="cwalletModal_item">
            <div class="wallet_icon">
                <div class="wicon">
                    <img src="img/WalletConnect-icon.png" alt="WalletConnect">
                </div> 
            </div>
            <div class="wallet_name">
            <span class="w_name">WalletConnect</span>
            </div>
        </div>

        <div class="cwalletModal_item">
             <small>Connect with one of our available wallet providers or create a new one.</small>
        </div>

       
    </div>
    </section>
</div>


<!-- // This is for Modal PopUp -->
<script>
   $(document).ready(function(){
    // $('.search_ba').css('display','none');
       $('#cwallt').click(function(){
          $('.cwalletModalContainer').show();
       })

       $('.cwalletModal_close').click(function(){
          $('.cwalletModalContainer').css('display','none');
       })
   })
   </script>



<!-- This js is for sideBar -->
 <script>

    $(document).ready(function(){
    var fixmeTop = $('.sideba').offset().top;
    $(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
    $('.sideba').css({
    position: 'fixed',
    top: '72px',
    left: '0'
    });
    } else {
    $('.sideba').css({
    position: 'static'
    });
    }
    });

    $('#filter_toggle').click(function(){
    $('.sideba').css({
    display: 'block',
    transition: 'all 2s ease-in'
    }); 
    $('.beside_sideba').css({
    display: 'none'
    }); 
    });

    $('#for_items_close').click(function(){
    $('.sideba').hide();
    $('.beside_sideba').css({
    display: 'block'
    });    
    });
    });



</script>




<!-- // This is for Modal profile -->
<script>
   $(document).ready(function(){
       $('.profile-nav-toggle').click(function(){
          $('.prof_pop_container').show();
       })

       $('.profPop_close').click(function(){
          $('.prof_pop_container').css('display','none');
       })
   })
   </script>

<!-- items to activitie toggle -->
<script>
   $(document).ready(function(){
       $('#activity_switch').click(function(){
          $('.beside_sideba_items_holder').css('display','none');
          $('.beside_sideba_activity_holder').css('display','block');
       })

       $('#items_switch').click(function(){
        $('.beside_sideba_activity_holder').css('display','none');
        $('.beside_sideba_items_holder').show();
       })
   })
   </script>


</body>
</html>