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
    <!-- <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/explore.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <title>Name of the owner | MyCom</title>
</head>

<body>
    <?php include 'header.php';?>
    <div class="ovall">
        <div class="large_main_body_container">
            <!-- <div class="top_banner flex_center">
                <div class="top_banner_inside flex_in">
                    <div class="for_img_con">
                        <div class="for_img">
                            <img src="img/fooo.jpg" alt="">
                        </div>
                    </div>
                    <div class="for_details">
                        <h1 class="flex_card-title-h1">This just the name of the holder of this items</h1>
                        <div class="flex_card-title-sp">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet nisi porro tempora quibusdam, voluptatibus consequatur deleniti
                            nihil magnam non animi assumenda, labore esse possimus sit
                            aliquam fugiat aperiam perspiciatis temporibus.</div>
                    </div>
                    <div class="for_details_side">
                        <div class="for_details_side_top">
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass">Owners</div>
                                <div class="row_dtails dark_bold">2.78K</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass">Items</div>
                                <div class="row_dtails dark_bold">4.87K</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass">Vol</div>
                                <div class="row_dtails dark_bold">0</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass">Price</div>
                                <div class="row_dtails dark_bold">36.5</div>
                            </div>
                        </div>
                        <div class="for_make_offer flex_center">
                            <a href="">
                                <button class="styles_btn_cobtainer create_btn" title="Create">Make Offer</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="for_items_list">
                <style>
                    .sideba_ovaflow{
                        overflow-y: scroll;
                        overflow-x: hidden;
                        height: 100vh;
                    }
                    .for_items_list_header{
                        position: fixed;
                        width:100%;
                        z-index: 7777;
                    }
                    .results_count{
                        margin-top: 4rem;
                    }
                </style>
            <div class="sideba">
                <div class="for_items_list_header_sidebar">
                   <div class="for_items_list_open_ft"><i class="fa fa-filter"></i>  Filters</div>
                   <div id="for_items_close" class="for_items_list_open_close fa-2x"><i class="fa fa-close" aria-hidden="true"></i></div> 
                </div>

            <div class="sideba_ovaflow">
                <!-- SideUpBAccordian -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="true"
                                aria-controls="flush-collapseTwo">
                                Price Range
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="input_prz_container">

                                    <form action="" class="input_prz_form">
                                        <div class="form_flex">
                                            <input type="text" class="input_prz_input" placeholder="Min">
                                            <div style="padding:10px">To</div>
                                            <input type="text" class="input_prz_input" placeholder="Max">
                                        </div>
                                        <div class="for_make_offer flex_center">
                                            <input type="button" class="styles_btn_cobtainer create_btn" value="Apply"
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
                                data-bs-target="#flush-collapseThree" aria-expanded="true"
                                aria-controls="flush-collapseThree">
                                Collection
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- Collection -->
                                <div class="container_col_expl">
                    <div class="row_collections_expl">
                        <a href="hisitems.php"><div class="row_collections_inner_expl">
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/1286.png" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">Mays of lagos</div>
                            </div>
                        </div></a>
                        <div class="row_collections_inner_expl">
                           <!-- <div class="row_collections_num cardfontszUnderclass"><span>2</span></div> -->
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128(2).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">MadeInLagos</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/1286.png" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">BetensuredGaming</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                           <!-- <div class="row_collections_num cardfontszUnderclass"><span>2</span></div> -->
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128(2).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">HungryMonkeyOnATree</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128y.jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">yelloApeLand</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                           <!-- <div class="row_collections_num cardfontszUnderclass"><span>2</span></div> -->
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128(2).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">Lions king of the jungle</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128y.jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">yelloApeLand</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                           <!-- <div class="row_collections_num cardfontszUnderclass"><span>2</span></div> -->
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128(2).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">Lions king of the jungle</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128y.jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">yelloApeLand</div>
                            </div>
                        </div>
                        <div class="row_collections_inner_expl">
                           <!-- <div class="row_collections_num cardfontszUnderclass"><span>2</span></div> -->
                            <div class="row_collection_container_expl">
                                <div class="row_collection_expl"><img src="img/128(2).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user_expl">
                                <div class="row_collection_user_head_expl cardfontszUnderclass">Lions king of the jungle</div>
                            </div>
                        </div>
                        

                    </div>
                </div>

                            </div>
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
                        <button id="items_switch" class="items_btn">Items</button>
                        <button id="activity_switch" class="items_btn">Activity</button>
                    </div>
                </div>       

                <div class="results_count flex_sb">
                    <div color="inherit" class="results_p">10,000 items listed</div>
                    <div class="collection_switcher_flip">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Highest 24h Vol
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item p-2" href="#">24h Vol Change Asc</a>
                                <a class="dropdown-item p-2" href="#">24h Vol Change Desc</a>
                                <a class="dropdown-item p-2" href="#">Highest Total Vol</a>
                            </div>
                        </div>
                    </div>
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
                                <a href="#" id="cwallt" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
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
                            <a href="" class="mk_offer_btn">Connect</a>
                        </div>
                    </div>

                </div>
                    <!-- Toggle Activities -->
                <div class="beside_sideba_activity_holder">
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank" class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"   class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="transBtn">Pushed</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank" class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="selBtn">Sale</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank" class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"   class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank" class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"   class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="selBtn">Sale</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank" class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"   class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="selBtn">Sale</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num cardfontszUnderclass_sm"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank" class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="row_collections flex_center">
                        <div class="row_collections_inner flex_center">
                            <div class="row_collections_num"><span class="ofaBtn">Offer</span></div>
                            <div class="row_collection_container">
                                <div class="row_collection"><img src="img/280(11).jpg" alt=""></div>
                            </div>
                            <div class="row_collection_user">
                                <a href="details.php"><div class="row_collection_user_head cardfontszclass">#2334</div></a> 
                                <div class="row_collection_user_under cardfontszUnderclass">
                                    <div class="row_collection_user_under_prz cardfontszUnderclass">Quantity </div>
                                    <div class="col_user_amnt"> <span style="margin-left:5px;"> 5</span></div>
                                </div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszclass">
                                    <div class="row_dtails flex_center cardfontszclass">
                                        <img src="img/nftpr.svg" alt="" height="12px" width="12px">
                                        <div class="col_user_amnt flex_center"> 
                                            <span> 0.95</span> 
                                            <span class="col_user_amnt flex_center cardfontszUnderclass_sm" style="margin-left:5px;">| $395</span>
                                        </div>
                                    </div>   
                                </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">Price</div>
                            </div>
                        </div>
                        <div class="row_collections_inner2 flex_center">
                            
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"  class="greenText">0xD60A…FF0E</a></span> </div>
                                <div class="row_dtails cardfontszUnderclass flex_center">From</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnCap flex_center"><span><a href="https://etherscan.io/" target="_blank"   class="greenText">0x4f32…a360</a></span></div>
                                <div class="row_dtails cardfontszUnderclass flex_center">To</div>
                            </div>
                            <div class="row_collection_dtails">
                                <div class="row_dtails cardfontszUnderclass flex_center">40 mins ago <i class="fa fa-external-link" aria-hidden="true"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>




</body>
</html>