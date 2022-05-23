<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--JQuery-->
    <script src="https://kit.fontawesome.com/cbea283966.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jQuery first-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/profilepage.css">
    
    <title>Name Of NFT returned here | MyCom</title>
</head>
<body>
    <?php include 'header.php';?> 
    <div class="oval_con">
        <div class="ovall">
            <div class="oval_top ">
                <div class="prof_img_container flex_center">
                    <div class="prof_img">
                       <img src="img/unnamedaz.png" alt="">
                    </div>
                </div>
                <div class="walletaddres_con flex_center">
                    <div class="wall_name dark_bolder">xe19fe6s324</div>
                </div>
                <div class="walletaddres_con flex_center">
                    <div class="walladdr bordered">xe19fe6s324</div>
                    <span><i class="fa fa-paste fa-lg"></i></span>
                </div>
            </div>
        </div>

        <div class="for_items_list">
            <div class="sideba">
                <div class="for_items_list_header_sidebar">
                   <div class="for_items_list_open_ft"><i class="fa fa-filter"></i>  Filters</div>
                   <div id="for_items_close" class="for_items_list_open_close fa-2x"><i class="fa fa-close" aria-hidden="true"></i></div> 
                </div>

                <!-- SideUpBAccordian -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Status
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle"
                                        style="width: 100% !important; text-align: left !important;border:1px solid #ccc !important;height: 50px !important"
                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        All
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item p-2" href="#">Buy Now</a></li>
                                        <li><a class="dropdown-item p-2" href="#">Auction</a></li>
                                        <li><a class="dropdown-item p-2" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Price
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="input_prz_container">
                                    <!-- Price Input Style -->
                                    <style>
                                    .input_prz_container {
                                        width: 100%;
                                    }

                                    .form_flex {
                                        display: flex;
                                    }

                                    .input_prz_input {
                                        width: 42% !important;
                                        padding: 10px !important;
                                        height: 3rem !important;
                                        border-radius: 3px !important;
                                        border-radius: 3rem !important;
                                        border: 1px solid #ccc !important;
                                    }

                                    .input_prz_input:focus {
                                        border: 1px solid #488d57 !important;
                                        outline: 0;
                                    }
                                    </style>
                                    <form action="" class="input_prz_form">
                                        <div class="form_flex">
                                            <input type="text" class="input_prz_input" placeholder="Min">
                                            <div style="padding:10px">To</div>
                                            <input type="text" class="input_prz_input" placeholder="Max">
                                        </div>
                                        <div class="for_make_offer flex_center">
                                            <input type="button" class="styles_btn_cobtainer create_btn" value="Submit"
                                                name="Submit">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Background Color
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                                <div class="form-check mt-2" style="height:40px">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Black
                                    </label>
                                </div>
                                <div class="form-check mt-2" style="height:40px">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Blue
                                    </label>
                                </div>
                                <div class="form-check mt-2" style="height:40px">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Green
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Something else here
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-collapseFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
            <div class="fiter_dock_bottom_container">
             <button id="filter_toggle" class="styles_btn_cobtainer create_btn">Filter</button>
             </div>
            <div class="beside_sideba">
                <div class="for_items_list_header">
                    <div class="items_container_btn">
                        <button class="items_btn">Items</button>
                        <button class="items_btn">Activity</button>
                    </div>
                </div>       

                <div class="results_count">
                    <p color="inherit" class="results_p">10,000 items</p>
                </div>

                <div class="beside_sideba_items_holder">

                  
                        <div class="beside_item"><a href="details.php">
                            <div class="beside_item_img">
                                <img src="img/28.jpg" alt="">
                            </div>   </a> 
                            <div class="beside_item_details">
                                <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                                </div>
                                <div class="item_pr">
                                    <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                                </div>
                            </div>
                            <div class="beside_item_footer">
                                <a href="buynow" class="mk_offer_btn">Buy Now</a>
                                <a href="#" id="cwallt" class="mk_offer_btn">Connect Wallet</a>
                            </div>
                        </div>

                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/28.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>

                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>
                    <div class="beside_item">
                        <div class="beside_item_img">
                            <img src="img/128y.jpg" alt="">
                        </div>
                        <div class="beside_item_details">
                            <div class="item_nm cardfontszUnderclass_sm">We sha put the name or level of the item here
                            </div>
                            <div class="item_pr">
                                <img class="nftico" src="img/nftpr.svg" alt=""><span>$0.56</span>
                            </div>
                        </div>
                        <div class="beside_item_footer">
                            <a href="" class="mk_offer_btn">Make Offer</a>
                            <a href="" class="mk_offer_btn">Connect Wallet</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>
</html>