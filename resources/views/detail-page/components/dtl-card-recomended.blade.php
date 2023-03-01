<div class="dtl-card-recomended">
    <div class="recomended">
        <img src="{{ asset('images/portofolio/porto1.png') }}" class="thumb" alt="">
        <div class="lbl-multi-card">
            <div class="multi multi-card1"></div>
            <div class="multi multi-card2"></div>
        </div>
        <div class="dtl-card-hover">
            <div class="card-hover">
                <h3 class="dtl-product-title">Product Title</h3>
                <div class="btn-like">
                    <img src="{{ asset('icons/heart.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <div class="dtl-recomended-user-profile">
        <div class="dtl-rcmd-profile">
            <img src="{{ asset('images/user-profile/user1.png') }}" alt="">
        </div>
        <h3 class="dtl-rcmd-username">Mavis Wisanggeni</h3>
        <div class="dtl-user-status">
            @if (false)
            <h4 class="user-status">Pro+</h4>
            @elseif (true)
            <h4 class="user-status">Pro</h4>
            @else
            <h4 class="user-status">Free</h4>
            @endif
        </div>
    </div>
</div>