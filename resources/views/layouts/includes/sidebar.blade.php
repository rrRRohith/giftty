 

<div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
    <aside id="secondary" class="widget-area">
        <!--<div class="sidebar-widget list-categories-widget">-->
        <!--    <h2 class="widgettitle">Shop</h2>-->
        <!--    <div class="cat-accordion">-->
        <!--        <div class="card">-->
        <!--            <div class="card-header" id="headingOne">-->
        <!--                <h5 class="mb-0">-->
        <!--                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Art Gallery</button>-->
        <!--                </h5>-->
        <!--            </div>-->
        <!--            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">-->
        <!--                <div class="card-body">-->
        <!--                    <ul class="cat-sub-menu">-->
        <!--                        <li><a href="#">blandit vehicula</a></li>-->
        <!--                        <li><a href="#">Praesent molestie</a></li>-->
        <!--                        <li><a href="#">sagittis ipsum</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card">-->
        <!--            <div class="card-header" id="headingTwo">-->
        <!--                <h5 class="mb-0">-->
        <!--                    <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Rugs</button>-->
        <!--                </h5>-->
        <!--            </div>-->
        <!--            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">-->
        <!--                <div class="card-body">-->
        <!--                    <ul class="cat-sub-menu">-->
        <!--                        <li><a href="#">Fire Pits</a></li>-->
        <!--                        <li><a href="#">Garden Accents</a></li>-->
        <!--                        <li><a href="#">Outdoor Fountains</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card">-->
        <!--            <div class="card-header" id="headingThree">-->
        <!--                <h5 class="mb-0">-->
        <!--                    <button type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accessories</button>-->
        <!--                </h5>-->
        <!--            </div>-->
        <!--            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">-->
        <!--                <div class="card-body">-->
        <!--                    <ul class="cat-sub-menu">-->
        <!--                        <li><a href="#">Quard Trousers</a></li>-->
        <!--                        <li><a href="#">Maroon Detail</a></li>-->
        <!--                        <li><a href="#">Check Trousers</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card">-->
        <!--            <div class="card-header" id="headingFour">-->
        <!--                <h5 class="mb-0">-->
        <!--                    <button type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Clothing</button>-->
        <!--                </h5>-->
        <!--            </div>-->
        <!--            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">-->
        <!--                <div class="card-body">-->
        <!--                    <ul class="cat-sub-menu">-->
        <!--                        <li><a href="#">Moleskin Blazers</a></li>-->
        <!--                        <li><a href="#">Wool Check Blazers</a></li>-->
        <!--                        <li><a href="#">Combined Jackets</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card">-->
        <!--            <div class="card-header" id="headingFive">-->
        <!--                <h5 class="mb-0">-->
        <!--                    <button type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Handbag</button>-->
        <!--                </h5>-->
        <!--            </div>-->
        <!--            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">-->
        <!--                <div class="card-body">-->
        <!--                    <ul class="cat-sub-menu">-->
        <!--                        <li><a href="#">Moleskin Blazers</a></li>-->
        <!--                        <li><a href="#">Wool Check Blazers</a></li>-->
        <!--                        <li><a href="#">Biker Jackets</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->


        <div class="sidebar-widget list-widget"> 
            <h2 class="widgettitle">Categories</h2>
            <div class="list-widget-wrapper">
                @foreach($categories as $category)
                <div class="list-group">
                    <a href="{{url('/'.$category->slug)}}">{{$category->name}} ({{$category->products_count}})</a>
                </div>
                @endforeach
            </div>
              
        </div> <!-- end of sidebar-widget -->
   
        <!--<div class="sidebar-widget list-widget">-->
        <!--    <h2 class="widgettitle">Brands</h2>-->
        <!--    <div class="list-widget-wrapper">-->
        <!--        <div class="list-group">-->
        <!--            <a href="#">Graphic Corner (14)</a>-->
        <!--            <a href="#">Studio Design (14)</a>-->
        <!--            <a href="#">Tommy Hilfiger (14)</a>-->
        <!--            <a href="#">Versace (14)</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div> <!-- end of sidebar-widget -->

        <!--<div class="sidebar-widget list-widget">-->
        <!--    <h2 class="widgettitle">Price</h2>-->
        <!--    <div class="list-widget-wrapper">-->
        <!--        <div class="list-group">-->
        <!--            <a href="#">$43.00 - $45.00 (10)</a>-->
        <!--            <a href="#">$54.00 - $58.00 (4)</a>-->
        <!--            <a href="#">$62.00 - $70.00 (5)</a>-->
        <!--            <a href="#">$78.00 - $83.00 (10)</a>-->
        <!--            <a href="#">$85.00 - $89.00 (13)</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div> <!-- end of sidebar-widget -->

        <!--<div class="sidebar-widget color-widget">-->
        <!--    <h2 class="widgettitle">Color</h2>-->
        <!--    <div class="color-widget-wrapper">-->
        <!--        <ul class="color-options">-->
        <!--            <li>-->
        <!--                <span class="white"></span>-->
        <!--                <a href="#">white (4)</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <span class="orange"></span>-->
        <!--                <a href="#">Orange (2)</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <span class="blue"></span>-->
        <!--                <a href="#">Blue (6)</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <span class="yellow"></span>-->
        <!--                <a href="#">Yellow (8)</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <span class="black"></span>-->
        <!--                <a href="#">black (6)</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div> <!-- end of sidebar-widget -->

        <!--<div class="sidebar-widget tag-cloud">-->
        <!--    <h2 class="widgettitle">Popular Tags</h2>-->
        <!--    <div class="tags-widget">-->
        <!--        <ul>-->
        <!--            <li><a href="#">Ecommerce</a></li>-->
        <!--            <li><a href="#">Shoes</a></li>-->
        <!--            <li><a href="#">bags</a></li>-->
        <!--            <li><a href="#">Accessories</a></li>-->
        <!--            <li><a href="#">Sunglasses</a></li>-->
        <!--            <li><a href="#">Trending</a></li>-->
        <!--            <li><a href="#">Clothing</a></li>-->
        <!--            <li><a href="#">Smart</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div> <!-- end of sidebar-widget -->
    </aside> <!-- end of #secondary -->
</div>

