<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fauxica</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:opsz@5..1200&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href={{ asset("/css/main.css") }} rel="stylesheet"/ >
</head>
<body>
    <div class="overlay"></div> 
    <div class="wrapper">
        <header>
            <a href="#"> 
                <img src="/images/logo.svg" alt="Fauxica logo">
            </a>

            <nav>
                <ul>
                    <li><a href="#" class="active">HOME</a></li>
                    <li><a href="#">PRODUCT</a></li>
                    <li><a href="#">GALLERY</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>

        </header>

        <main>
            <div class="left-col">
                 <h1>Quality apparel without the price tag</h1>
                 <p class="subhead">
                    No need to spend $xxx on apparel just for the name’s sake.
                    Our premium apparel is made from the same stuff.
                </p>
                <div class="cta-btns">
                    <a href="#" class="primary-cta">Browse our collection</a>
                
                    <a href="#" class="secondary-cta">
                        <span>Spring '23 Collection</span>
                        <svg viewBox="0 0 19 9" fill="none">
                            <path d="M18.3536 4.85355C18.5488 4.65829 18.5488 4.34171 18.3536 4.14645L15.1716 0.964466C14.9763 0.769204 14.6597 0.769204 14.4645 0.964466C14.2692 1.15973 14.2692 1.47631 14.4645 1.67157L17.2929 4.5L14.4645 7.32843C14.2692 7.52369 14.2692 7.84027 14.4645 8.03553C14.6597 8.2308 14.9763 8.2308 15.1716 8.03553L18.3536 4.85355ZM0 5H18V4H0V5Z" fill="black"/>
                        </svg>       
                    </a>
                </div>

                <div class="news">
                    <p class="employees">50k</p>
                    <p class="details">
                        We’re proud to announce that we now 
                        employ a workforce of over <strong>5,000</strong>.
                        It’s all possible because of you.
                    </p>
                </div>
            </div>

            <div class="right-col">
                <div class="card card1">
                    <div class="card-details">
                        <div>
                            <a href="#" class="product-title">Fauxica Sport</a>
                            <p>Running shoe</p>
                        </div>
                        <p class="product-price">RM200</p>
                    </div>
                </div>
                <div class="card card2">
                    <div class="card-details">
                        <div>
                            <a href="#" class="product-title">Fauxica Sport</a>
                            <p>Running shoe</p>
                        </div>
                        <p class="product-price">RM200</p>
                    </div>
                </div>
                <div class="card card3">
                    <div class="card-details">
                        <div>
                            <a href="#" class="product-title">Fauxica Sport</a>
                            <p>Running shoe</p>
                        </div>
                        <p class="product-price">RM200</p>
                    </div>
                </div>

            </div>
        </main>
     </div>


</body>
</html>