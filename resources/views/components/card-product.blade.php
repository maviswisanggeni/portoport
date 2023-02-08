<div class="card-product">
    <div class="card-image">
        <img src="images/portofolio/porto1.png" alt="Image 1">
    </div>
    <div class="card-description">
        <div class="user-profile">
            <img src="images/user-profile/user1.png" alt="User Profile">
            <h4 class="username">Mavis Wisanggeni</h4>
        </div>
        <div class="card-likes card-info">
            <img src="icons/heart.svg" alt="Heart icon" class="card-icon">
            <p>
                @php
                $number = rand(0, 10000);
                $new_number = $number >= 1000 ? round($number/1000, 1) . 'k' : $number;
                @endphp
                {{ $new_number }}
            </p>
        </div>
        <div class="card-viewers card-info">
            <img src="icons/eye.svg" alt="Eye icon" class="card-icon">
            <p>
                @php
                $number = rand(0, 10000);
                $new_number = $number >= 1000 ? round($number/1000, 1) . 'k' : $number;
                @endphp
                {{ $new_number }}
            </p>
        </div>
    </div>
</div>