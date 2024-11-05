<style>
    .item {}
    .item .cat{}
    .item .image{width:100%;display: inline-block;max-height: 250px;overflow: hidden;position: relative;}
    .item .image img{object-fit: cover;object-position: center center;height: 100%;}
    .item h3{font-size: 24px;}
    .item .card-text{font-size: 16px;}
    .item .btn2{background: transparent;position: relative;padding: 0;line-height: 16px;min-width: auto !important;}
    .item .btn2:before {
    content: '';
    position: absolute;
    bottom: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 1px;
    background-color: #ED6E00;
}
.item .cat .card-body{padding: 52% 38px !important;border: double 10px #163300;}
.item .cat h3{font-size: 45px;}
</style>

<div class="owl-carousel owl-theme">
    <div class="item h-100">
        <div class="card shadow-sm h-100">
            <div class="image">
                <img src="{{ asset('images/woolpellet.jpg') }}" class="img-fluid" />
            </div>
            <div class="card-body">
                <h3>Wood Pellets</h3>
                <p class="fs-7"><b>Types:</b> 6/8 mm wood pellets, softwood, hardwood, sunflower husk pellets</p>
                <p class="fs-7"><b>Quality:</b> Light, "Cappuccino," dark</p>
                <p class="fs-7"><b>Suitable for:</b> Household consumers, industry, businesses</p>
                <p class="fs-7"><b>Transportation:</b> By rail, by ship, by road transport</p>
                <p class="fs-7"><b>Packaging:</b> Bulk, bagged on pallets, big bags</p>
                <a class="btn btn-primary btn2" href="/about">Read more</a>
            </div>
        </div>
    </div>
    <div class="item h-100">
        <div class="card shadow-sm h-100">
            <div class="image">
                <img src="{{ asset('images/coal.jpg') }}" class="img-fluid" />
            </div>
            <div class="card-body">
                <h3>Coal</h3>
                <p class="fs-7"><b>Types:</b> D, DG, 3B, S, and more</p>
                <p class="fs-7"><b>Quality:</b> 0-5, 5-25, 25-30, 30-50, 50-200, and others</p>
                <p class="fs-7"><b>Suitable for:</b> Household consumers, industry, businesses</p>
                <p class="fs-7"><b>Transportation:</b> By rail, by ship, by road transport</p>
                <p class="fs-7"><b>Packaging:</b> Bulk, bagged on pallets, big bags</p>
                <a class="btn btn-primary btn2" href="/about">Read more</a>
            </div>
        </div>
    </div>
    <div class="item h-100">
        <div class="card shadow-sm h-100">
            <div class="image">
                <img src="{{ asset('images/woodbrickets.jpg') }}" class="img-fluid" />
            </div>
            <div class="card-body">
                <h3>Wood Briquettes</h3>
                <p class="fs-7"><b>Types:</b> RUF, PINI KAY, NESTRO</p>
                <p class="fs-7"><b>Wood:</b> Softwood, birch, oak, mixed species</p>
                <p class="fs-7"><b>Quality:</b> Light, "cappuccino"</p>
                <p class="fs-7"><b>Suitable for:</b> Household consumers, industry, businesses"</p>
                <p class="fs-7"><b>Transportation:</b> By rail, by ship, by road transport</p>
                <p class="fs-7"><b>Packaging:</b> By rail, by ship, by road transport</p>
                <a class="btn btn-primary btn2" href="/about">Read more</a>
            </div>
        </div>
    </div>
    <div class="item h-100">
        <div class="card shadow-sm h-100">
            <div class="image">
                <img src="{{ asset('images/woodlogs.jpg') }}" class="img-fluid" />
            </div>
            <div class="card-body">
                <h3>Wood Logs</h3>
                <p class="fs-7"><b>Types:</b> Softwood, birch, oak, black alder</p>
                <p class="fs-7"><b>Quality:</b> Natural moisture, kiln-dried</p>
                <p class="fs-7"><b>Suitable for:</b> Household consumers, industry, businesses</p>
                <p class="fs-7"><b>Transportation:</b> By rail, by ship, by road transport</p>
                <p class="fs-7"><b>Packaging:</b> Bulk, bagged on pallets, big bags</p>
                <a class="btn btn-primary btn2" href="/about">Read more</a>
            </div>
        </div>
    </div>
    <div class="item h-100">
        <div class="card shadow-sm h-100">
            <div class="image">
                <img src="{{ asset('images/peatbrickets.jpg') }}" class="img-fluid" />
            </div>
            <div class="card-body">
                <h3>Peat Briquettes</h3>
                <p class="fs-7"><b>Types:</b> BT1, BT2</p>
                <p class="fs-7"><b>Raw Material:</b> Peat</p>
                <p class="fs-7"><b>Quality:</b> </p>
                <p class="fs-7"><b>Suitable for:</b> Household consumers, industry, businesses</p>
                <p class="fs-7"><b>Transportation:</b> By rail, by ship, by road transport</p>
                <p class="fs-7"><b>Packaging:</b> Bulk, palletized bags, bagged on pallets, big bags</p>
                <a class="btn btn-primary btn2" href="/about">Read more</a>
            </div>
        </div>
    </div>
</div>
