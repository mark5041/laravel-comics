<footer>
        <div class="footer-container">
            <div class="background-logo">
                <div class="my-container">
                    <div class="first-col">
                    <h3>dc comics</h3>
                    <ul>
                        <li><a>Characters</a></li>
                        <li><a>Comics</a></li>
                        <li><a>Movies</a></li>
                        <li><a>TV</a></li>
                        <li><a>Games</a></li>
                        <li><a>Videos</a></li>
                        <li><a>News</a></li>
                    </ul>
                    <h3>shop</h3>
                    <ul>
                        <li><a>Shop DC</a></li>
                        <li><a>Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="second-col">
                    <h3>dc</h3>
                    <ul>
                        <li><a>Terms Of Use</a></li>
                        <li><a>Privacy policy (New)</a></li>
                        <li><a>Ad Choiches</a></li>
                        <li><a>Advertising</a></li>
                        <li><a>Jobs</a></li>
                        <li><a>Subscriptions</a></li>
                        <li><a>Talent Workshops</a></li>
                        <li><a>CPSC Certificates</a></li>
                        <li><a>Ratings</a></li>
                        <li><a>Shop Help</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </div>
                <div class="third-col">
                    <h3>sites</h3>
                    <ul>
                        <li><a>DC</a></li>
                        <li><a>MAD Magazine</a></li>
                        <li><a>DC Kids</a></li>
                        <li><a>DC Universe</a></li>
                        <li><a>DC Power Visa</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <div class="my-container">
                <div class="sign-up-button">
                    <a href="#">sign-up now!</a>
                </div>
                <div class="social-icon">
                    <h3>follow us</h3>
                    <ul>
                        @foreach($social as $item)
                        <li>
                            <img src="{{$url.$item['image']}}" alt="">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>