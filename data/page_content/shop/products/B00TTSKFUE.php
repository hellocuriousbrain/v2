<?php
function page_content($currpageId) {
?>
<!-- Main Div Starts-->
<div class="wrapper row3 ">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <!-- Left Menu Div Starts-->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->

        <?php include "../../data/left_menu/left_menu_shop.php";
            $level1 = "1";
            $level2 = "1";
            $level3 = "1";
            $chapter = "1";
	        left_menu_fun($currpageId, $level1,$level2,$level3,$chapter);
        ?>
    <div class="sdb_holder">
    </div>
    <div class="sdb_holder">
    </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- Left Menu Div Ends-->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- Main Contain div Starts-->
    <div class="content three_quarter"> 
    <h2> Camlin White Board Marker Pen- Black (Pack of 10)  </h2> 
      <!-- ############################################################################################### -->
        <!-- Slider div Starts-->
        <div class="content one_half first"> 
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: https://www.jssor.com -->
        <script src="../../js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="../../js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 440;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
        </script>
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }

            /*jssor slider arrow skin 106 css*/
            .jssora106 {display:block;position:absolute;cursor:pointer;}
            .jssora106 .c {fill:#fff;opacity:.3;}
            .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
            .jssora106:hover .c {opacity:.5;}
            .jssora106:hover .a {opacity:.8;}
            .jssora106.jssora106dn .c {opacity:.2;}
            .jssora106.jssora106dn .a {opacity:1;}
            .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

            /*jssor slider thumbnail skin 101 css*/
            .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
            .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
            .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
            .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
            .jssort101 .p:hover{padding:2px;}
            .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
            .jssort101 .p:hover.pdn{padding:0;}
            .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
            .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
            .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
            .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
            .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
        </style>
        <!-- Main Slider div starts -->
        <div id="jssor_1" style="position:relative;margin:0;top:0px;left:0px;width:440px;height:520px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../../img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:440px;height:420px;overflow:hidden;">
                <div data-p="170.00">
                     <img data-u="image" src="../../img/1.jpg" />
                     <img data-u="thumb" src="../../img/1-thumb.jpg" />
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="../../img/2.jpg" />
                    <img data-u="thumb" src="../../img/2-thumb.jpg" />
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="../../img/3.jpg" />
                    <img data-u="thumb" src="../../img/3-thumb.jpg" />
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="../../img/4.jpg" />
                    <img data-u="thumb" src="../../img/4-thumb.jpg" />
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="../../img/5.jpg" />
                    <img data-u="thumb" src="../../img/5-thumb.jpg" />
                </div>
            </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:440px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:120px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
        </div>
        <!-- Main Slider div Ends -->
<br>
        <h3>Shop by Category</h3>
        <a class="category">  Office Products > Pens, Pencils & Writing Supplies > Markers & Highlighters > Permanent Markers & Marker Pens  </a>
    </div>
        <!-- Slider div Ends -->
        <!-- half contain div Start -->
    <div class="content one_half">
<a href="https://amzn.to/2Ke0JwC" target="_blank" ><img class="btmspace-30" src="../../data/images/buy-now-amazon.png" alt=""></a>

<ul class="ProductDetails">
        <li> Brand :- Camlin</li>
        <li> Color :- Black </li>
      </ul>
<br>
        <h2>Key Feature</h2>
<ul class="KeyFeature">
        <li >Refillable, Bright Ink, Easy to erase with duster, tissue and cloth</li>
        <li>CE Certified </li>
        <li>Bright Ink for better visibility</li>
        <li>USP: Available in - 4 Colours (Red, Blue, Green and Red)</li>
      </ul>
<br>
        <h2>Offers</h2>
      <p>
Go Cashless with Visa Debit / Credit Cards: Get 10% back up to Rs.100 if you pay with a Visa Card. Offer valid for your first two cashless transactions ever on Amazon. Offer Period: 5th Jun to 30th Jun. Cashback will be credited as Amazon Pay balance
</p>

      </div>
        <!-- half contain div Ends -->

      <!-- ################################################################################################ -->
<h2>Description</h2>
      <p>
Camlin manufactures art materials, marker pens, fountain pens, inks, pencils, and other stationery products. The company is well known for its pens in India.

Camlin is a very popular stationery brand in producing artist materials including water colour, oil paints, pastels, acrylics, inks, pencils etc. for both artists and students.
</p>
<img  src="../../data/images/hori.png" />
  <div id="comments">

        <h2>Write A Comment</h2>
<?php include "../../data/sm_comment/shop/products/comments.php"; 
        page_comment($currpageId)
            ?>
      </div>
    </div>
        <!-- Main contain div Ends -->

    

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
        <!-- Main div Ends -->


<?php } ?>

