<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="sass/_normalize.scss" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@400;700;800&display=swap"
      rel="stylesheet"
    />

    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="image/favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <header class="navbar navbar-mobile-fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="https://innabatalova.ru/tour-plan/" class="logo">
            <img
              src="image/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>
          <!-- /.logo -->

          <form
            action="#"
            class="search navbar__search navbar__search_mobile_hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img
                src="image/search.svg"
                alt="Icon: search"
                class="search__image"
              />
            </button>
            <!-- /.search__button -->
          </form>
          <!-- /.search -->

          <a href="#" class="user navbar__user navbar__user_mobile_hidden">
            <img
              src="image/user-avatar.jfif"
              alt="avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>

          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <a href="#" class="user navbar__user navbar__user_mobile_visible">
                <img
                  src="image/user-avatar.jfif"
                  alt="avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name_light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <form
                action="#"
                class="search navbar__search navbar__search_mobile_visible"
              >
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img
                    src="image/search.svg"
                    alt="Icon: search"
                    class="search__image"
                  />
                </button>
                <!-- /.search__button -->
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>
    <!-- /.header -->
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
        <!-- /.breadcrumb-list -->
      </div>
    </nav>
    <!-- /.braedcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrappep">
              <div class="stars">
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary
              <span class="hotel-info__carryover">
                Activities + Child Stays Free</span
              >
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter"
              >4.5/<span class="rating__five">5</span></span
            >
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <div class="slider hotel-slider">
            <div class="swiper-container hotel-slider">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide hotel-slider__item">
                  <img
                    src="image/slide.jpg"
                    alt="slide 1"
                    class="hotel-slider__img"
                  />
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img
                    src="image/slide-2.jpg"
                    alt="slide 2"
                    class="hotel-slider__img"
                  />
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img
                    src="image/slide-3.jpg"
                    alt="slide 3"
                    class="hotel-slider__img"
                  />
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img
                    src="image/slide-4.jpg"
                    alt="slide 4"
                    class="hotel-slider__img"
                  />
                </div>
                <div class="swiper-slide hotel-slider__item">
                  <img
                    src="image/slide-5.jpg"
                    alt="slide 5"
                    class="hotel-slider__img"
                  />
                </div>
              </div>
              <!-- /.swiper-wrapper-->
            </div>

            <!-- If we need navigation buttons -->
            <button
              class="hotel-slider__button hotel-slider__button--prev"
            ></button>
            <button
              class="hotel-slider__button hotel-slider__button--next"
            ></button>
          </div>
          <!-- /.slider -->
          <div class="hotel-coordinates">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <!-- /.price__start -->
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <!-- /.price__pricetag -->
                  <span class="booking__per-room">per room / night</span>
                  <!-- /.price__per-rom -->
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img
                      src="image/user.svg"
                      alt="Icon user"
                      class="booking__icon"
                    />
                    <span class="booking__description">2 x Guests</span>
                  </div>

                  <div class="booking__text">
                    <img
                      src="image/home.svg"
                      alt="Home icon"
                      class="booking__icon"
                    />
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
              </div>
              <!-- /.booking-info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100">
                  <img src="image/phone-call.svg" alt="Call icon" />
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button class="button booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.911258800709!2d37.91198641495514!3d40.98342397930329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406321c35db1ef2b%3A0xbba69b0405edafe3!2sHampton%20by%20Hilton%20Ordu!5e0!3m2!1sru!2sru!4v1615315578030!5m2!1sru!2sru"
                width="347"
                height="213"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
              <!-- контейнер для яндекс карт -->
              <!-- <div id="ymap" style="width: 600px; height: 400px"></div> -->
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-right -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->
    <section class="packages">
      <div class="container">
        <h2 class="packages-title">Other Packages</h2>
        <div class="packages-wrappep">
          <div class="packages-item packages__main">
            <span class="packages-item__offer packages-item__offer--main"
              >Flash Offer</span
            >
            <img
              src="image/gridcardimg-1.jpg"
              alt="Hotel Blue Haven"
              class="packages__image"
            />
            <div class="packages-item__mainmessage">
              <div class="packages-item__rating">
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
                <img src="image/star.svg" alt="star" />
              </div>
              <h3 class="packages-item__title">Hotel Blue Haven</h3>
              <p class="packages-item__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <div class="packages__info packages-item__adres">
                <img
                  src="image/grid-adres.svg"
                  alt="adres icon"
                  class="packages__icon"
                />
                <span>1749 Wheeler Ridge Delaware</span>
              </div>
              <!-- /.packages-item__adres -->
              <div class="packages__info packages-item__guests">
                <img
                  src="image/grid-guests.svg"
                  alt="guests icon"
                  class="packages__icon"
                />
                <span>2 x Guests</span>
              </div>
              <!-- /.packages-item__guests -->
              <div class="packages__info packages-item__room">
                <img
                  src="image/grid-room.svg"
                  alt="room icon"
                  class="packages__icon"
                />
                <span>1 x Room</span>
              </div>
              <!-- /.packages-item__room -->

              <!-- /.packages-item__title -->
              <span class="packages-item__oldprice">$ 10,500</span>
              <!-- /.packages-item__oldprice -->
              <strong class="packages-item__price">$ 8,500</strong>
              <!-- /.packages-item__price -->
              <button class="packages-button">Book Now</button>
            </div>
          </div>
          <div class="packages-item packages__mash">
            <span class="packages-item__offer packages-item__offer--mash"
              >Flash Offer</span
            >
            <img
              src="image/gridcardimg-2.jpg"
              alt="LUX* Belle Mare"
              class="packages__image"
            />
            <div class="packages-item__mashmessage">
              <h3 class="packages-item__title packages-item__title--mash">
                LUX* Belle Mare
              </h3>
              <div class="packages__info packages-item__adres">
                <img
                  src="image/grid-adres.svg"
                  alt="adres icon"
                  class="packages__icon"
                />
                <span>1749 Wheeler Ridge Delaware</span>
              </div>
              <!-- /.packages-item__adres -->
              <div class="packages__info packages-item__guests">
                <img
                  src="image/grid-guests.svg"
                  alt="guests icon"
                  class="packages__icon"
                />
                <span>2 x Guests</span>
              </div>
              <!-- /.packages-item__guests -->
              <div class="packages__info packages-item__room">
                <img
                  src="image/grid-room.svg"
                  alt="room icon"
                  class="packages__icon"
                />
                <span>1 x Room</span>
              </div>
              <!-- /.packages-item__room -->

              <!-- /.packages-item__title -->
              <span class="packages-item__oldprice">$ 8,500</span>
              <!-- /.packages-item__oldprice -->
              <strong class="packages-item__price">$ 3,000</strong>
              <!-- /.packages-item__price -->
              <button class="packages-button packages__mashbutton">
                Book Now
              </button>
            </div>
          </div>
          <div class="packages-item packages__mash">
            <span class="packages-item__offer packages-item__offer--mash"
              >Flash Offer</span
            >
            <img
              src="image/gridcardimg-3.jpg"
              alt="White Palace"
              class="packages__image"
            />
            <div class="packages-item__mashmessage">
              <h3 class="packages-item__title packages-item__title--mash">
                White Palace
              </h3>
              <div class="packages__info packages-item__adres">
                <img
                  src="image/grid-adres.svg"
                  alt="adres icon"
                  class="packages__icon"
                />
                <span>1749 Wheeler Ridge Delaware</span>
              </div>
              <!-- /.packages-item__adres -->
              <div class="packages__info packages-item__guests">
                <img
                  src="image/grid-guests.svg"
                  alt="guests icon"
                  class="packages__icon"
                />
                <span>2 x Guests</span>
              </div>
              <!-- /.packages-item__guests -->
              <div class="packages__info packages-item__room">
                <img
                  src="image/grid-room.svg"
                  alt="room icon"
                  class="packages__icon"
                />
                <span>1 x Room</span>
              </div>
              <!-- /.packages-item__room -->

              <!-- /.packages-item__title -->
              <span class="packages-item__oldprice">$ 10,500</span>
              <!-- /.packages-item__oldprice -->
              <strong class="packages-item__price">$ 9,500</strong>
              <!-- /.packages-item__price -->
              <button class="packages-button packages__mashbutton">
                Book Now
              </button>
            </div>
          </div>
          <div class="packages-item packages__mash">
            <span class="packages-item__offer packages-item__offer--mash"
              >Flash Offer</span
            >
            <img
              src="image/gridcardimg-4.jpg"
              alt="Luxury Place"
              class="packages__image"
            />
            <div class="packages-item__mashmessage">
              <h3 class="packages-item__title packages-item__title--mash">
                Luxury Place
              </h3>
              <div class="packages__info packages-item__adres">
                <img
                  src="image/grid-adres.svg"
                  alt="adres icon"
                  class="packages__icon"
                />
                <span>1749 Wheeler Ridge Delaware</span>
              </div>
              <!-- /.packages-item__adres -->
              <div class="packages__info packages-item__guests">
                <img
                  src="image/grid-guests.svg"
                  alt="guests icon"
                  class="packages__icon"
                />
                <span>2 x Guests</span>
              </div>
              <!-- /.packages-item__guests -->
              <div class="packages__info packages-item__room">
                <img
                  src="image/grid-room.svg"
                  alt="room icon"
                  class="packages__icon"
                />
                <span>1 x Room</span>
              </div>
              <!-- /.packages-item__room -->

              <!-- /.packages-item__title -->
              <span class="packages-item__oldprice">$ 4,500</span>
              <!-- /.packages-item__oldprice -->
              <strong class="packages-item__price">$ 2,500</strong>
              <!-- /.packages-item__price -->
              <button class="packages-button packages__mashbutton">
                Book Now
              </button>
            </div>
          </div>
          <div class="packages-item packages__mash">
            <span class="packages-item__offer packages-item__offer--mash"
              >Flash Offer</span
            >
            <img
              src="image/gridcardimg-5.jpg"
              alt="Hotel Five Star"
              class="packages__image"
            />
            <div class="packages-item__mashmessage">
              <h3 class="packages-item__title packages-item__title--mash">
                Hotel Five Star
              </h3>
              <div class="packages__info packages-item__adres">
                <img
                  src="image/grid-adres.svg"
                  alt="adres icon"
                  class="packages__icon"
                />
                <span>1749 Wheeler Ridge Delaware</span>
              </div>
              <!-- /.packages-item__adres -->
              <div class="packages__info packages-item__guests">
                <img
                  src="image/grid-guests.svg"
                  alt="guests icon"
                  class="packages__icon"
                />
                <span>2 x Guests</span>
              </div>
              <!-- /.packages-item__guests -->
              <div class="packages__info packages-item__room">
                <img
                  src="image/grid-room.svg"
                  alt="room icon"
                  class="packages__icon"
                />
                <span>1 x Room</span>
              </div>
              <!-- /.packages-item__room -->

              <!-- /.packages-item__title -->
              <span class="packages-item__oldprice">$ 6,500</span>
              <!-- /.packages-item__oldprice -->
              <strong class="packages-item__price">$ 3,500</strong>
              <!-- /.packages-item__price -->
              <button class="packages-button packages__mashbutton">
                Book Now
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.packadges -->
    <section class="newsletter">
      <div class="newsletter-wrappep">
        <h2 class="newsletter-title newsletter__title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
          <!-- /.newsletter-title__strong -->
        </h2>
        <!-- /.newsletter-title -->
        <form action="send.php" method="POST" class="subscribe subscribe-title">
          <input
            type="text"
            class="subscribe__input"
            placeholder="Your email address"
            name="email"
          />
          <button class="subscribe__button">Send</button>
          <!-- /.search__button -->
        </form>
        <!-- /.search -->
      </div>
      <!-- /.newsletter-wrappep -->
    </section>
    <!-- /.newsletter -->
    <section class="reviews">
      <div class="reviews-container">
        <h2 class="reviews__title">What people think about us</h2>
        <!-- /.reviews-title -->
        <div class="reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide reviews-slider__slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="image/reviews-avatar.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <!-- /.reviews-slider__username -->
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                  </div>
                  <p class="reviews-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                  <!-- /.reviews-slider__text -->
                </div>
                <!-- /.swiper-slide__profile -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide reviews-slider__slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="image/reviews-avatar-2.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Mercy Hodge</h3>
                  <!-- /.reviews-slider__username -->
                  <span class="reviews-slider__date">Stayed 13 Oct, 2020</span>
                  <div class="reviews-slider__rating">
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                  </div>
                  <p class="reviews-slider__text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Corporis autem delectus quaerat voluptatibus pariatur
                    eveniet illum consequuntur labore fuga molestias unde
                    recusandae cumque quod tenetur ab esse perferendis, dolore
                    modi.
                  </p>
                  <!-- /.reviews-slider__text -->
                </div>
                <!-- /.swiper-slide__profile -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide reviews-slider__slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="image/reviews-avatar-3.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Randolf Gibson</h3>
                  <!-- /.reviews-slider__username -->
                  <span class="reviews-slider__date">Stayed 04 Apl, 2018</span>
                  <div class="reviews-slider__rating">
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                  </div>
                  <p class="reviews-slider__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Laudantium quos, illo impedit deserunt tempora repudiandae
                    omnis? Hic, quis accusamus deleniti fugiat, atque magni
                    repudiandae illo facilis incidunt vel amet sit.
                  </p>
                  <!-- /.reviews-slider__text -->
                </div>
                <!-- /.swiper-slide__profile -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide reviews-slider__slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="image/reviews-avatar-4.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Jane Cummings</h3>
                  <!-- /.reviews-slider__username -->
                  <span class="reviews-slider__date">Stayed 26 Nov, 2013</span>
                  <div class="reviews-slider__rating">
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                  </div>
                  <p class="reviews-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Facilis, ea non? Fugit perferendis harum aliquid
                    eaque. Vel accusantium nisi nobis voluptatibus, id earum,
                    fuga quia quos ex, sunt voluptatum commodi.
                  </p>
                  <!-- /.reviews-slider__text -->
                </div>
                <!-- /.swiper-slide__profile -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide reviews-slider__slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="image/reviews-avatar-5.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">George Carr</h3>
                  <!-- /.reviews-slider__username -->
                  <span class="reviews-slider__date">Stayed 15 Dec, 2008</span>
                  <div class="reviews-slider__rating">
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                    <img src="image/star.svg" alt="star" />
                  </div>
                  <div class="reviews-slider__wrappep">
                    <p class="reviews-slider__text">
                      It was very nice hotel with cleanliness. Staff behavior
                      was good and polite. They welcome us very well. Issue was
                      only that Lift was not in working and we were allotted to
                      3rd floor and amenities articles were in corner of gallery
                      which were giving bad feeling. Breakfast was good and
                      support of the staff was also very nice. Location is not
                      good as per atmosphere, it is very nearby most of the
                      popular places but self location in a narrow street is not
                      good. Overall it was a good experience and could
                      recommend.
                    </p>
                  </div>
                  <!-- /.reviews-slider__text -->
                </div>
                <!-- /.swiper-slide__profile -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
          <!-- If we need navigation buttons -->
          <button
            class="reviews-slider__button reviews-slider__button--prev"
          ></button>
          <button
            class="reviews-slider__button reviews-slider__button--next"
          ></button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.reviews -->
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <!-- /.activities__title -->
        <div class="activities-wrappep">
          <div class="card activities__card">
            <img
              src="image/activity-1.jpg"
              alt="The curious corner of chamarel"
              class="card__image"
            />
            <h3 class="card__title">The curious corner of chamarel</h3>
            <!-- /.card__title -->
            <button class="card__button">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img
              src="image/activity-2.jpg"
              alt="Gymkhana club golf course"
              class="card__image"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <!-- /.card__title -->
            <button class="card__button">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img
              src="image/activity-3.jpg"
              alt="Tamarind falls hiking trip - full day"
              class="card__image"
            />
            <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
            <!-- /.card__title -->
            <button class="card__button">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img
              src="image/activity-4.jpg"
              alt="The blue marine discovery quest"
              class="card__image"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <!-- /.card__title -->
            <button class="card__button">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrappep -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->
    <footer class="footer">
      <div class="container">
        <div class="footer-wrappep">
          <img
            src="image/vertical-logo.svg"
            alt="Logo: Best Tour Plan"
            class="logo footer__logo"
          />
          <div class="footer-list footer__categories">
            <h3 class="footer__title">ALL CATEGORIES</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <div class="footer-list footer__additional">
            <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work?</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link"
                  >Promote your Business on BTP</a
                >
              </li>
            </ul>
          </div>
          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <!-- /.footer-title -->
            <div class="footer__social-link">
              <a href="#" class="footer__link"
                ><img src="image/facebook.svg" alt="icon: facebook"
              /></a>
              <a href="#" class="footer__link"
                ><img src="image/youtube.svg" alt="icon: youtube"
              /></a>
              <a href="#" class="footer__link"
                ><img src="image/instagram.svg" alt="icon: instagram"
              /></a>
            </div>
            <!-- /.footer__social-link -->
          </div>
          <!-- /.footer__social-network -->
          <div class="footer__list footer__legal">
            <h3 class="footer__title">LEGAL INFORMATION</h3>
            <!-- /.footer__title -->
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">Terms & Conditions</a>
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
              <!-- /.footer__item -->
            </ul>
            <!-- /.footer__ul -->
          </div>
          <!-- /.footer__list -->
          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mess">Contact Details</h3>
            <p class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <!-- /.footer__text -->
            <ul class="footer__ul">
              <li class="footer__item footer__item--cont">
                <div class="footer__icon-wrappep">
                  <img
                    class="footer__icon"
                    src="image/map-marker.svg"
                    alt="icon: map"
                  />
                </div>
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                States
              </li>
              <li class="footer__item footer__item--cont">
                <div class="footer__icon-wrappep">
                  <img
                    class="footer__icon"
                    src="image/phone-footer.svg"
                    alt="icon: phone"
                  />
                </div>
                <span>
                  Tel (business hours) :
                  <a href="#" class="footer__nestedlink">269 1500</a> <br />Tel
                  (hotline) Monday - Saturday:
                  <a href="#" class="footer__nestedlink">52-56-61-38</a> (08:00
                  am – 20:00 pm) <br />Tel (hotline) Sunday:
                  <a href="#" class="footer__nestedlink">52-56-61-38</a> (08:00
                  am – 14:00 pm)
                </span>
              </li>
              <li class="footer__item footer__item--end">
                <div class="footer__icon-wrappep">
                  <img
                    class="footer__icon"
                    src="image/mail-icon.svg"
                    alt="icon: mail"
                  />
                </div>
                <a href="#" class="footer__nestedlink"
                  >cherly.lawson@example.com</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer__contact-deteils -->
          <div class="footer__contact-form">
            <h3 class="footer__title footer__title--mess">Send us a message</h3>

            <!-- /.footer__contact-form -->
            <form action="send.php" method="POST" class="footer__form">
              <input
                type="text"
                class="footer__input"
                placeholder="Your Full Name*"
                name="name"
              />
              <input
                type="text"
                class="footer__input"
                placeholder="Phone Number*"
                name="phone"
              />
              <textarea
                class="footer__message"
                placeholder="Message"
                name="message"
              ></textarea>
            
          </div>
          <button class="button footer__button" type="submit">Send</button>
          <span class="footer__info">* Required Fields</span>
        </div>
        </form>
        <!-- /.footer-wrappep -->
        <div class="footer__disclaimer">
          <div class="disclaimer-wrappep">
            <div class="footer__string">
              <span class="footer__string-bottom">Disclaimer</span>
              <span class="footer__string-bottom">Conditions of use</span>
              <span class="footer__string-bottom">Cancellation policy</span>
            </div>

            <img
              src="image/icon-card.png"
              alt="Icon: card"
              class="footer__string-icons"
            />
          </div>
        </div>
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <!-- скрипты для яндекс карт -->
    <!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=b013a540-737d-452a-bd5a-59729d695c66&lang=ru_RU"></script>
    <script src="js/yandexmap.js"></script> -->
  </body>
</html>
