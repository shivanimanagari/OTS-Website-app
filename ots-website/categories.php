<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
 .categories {
  box-sizing: border-box;
  margin: 0;
  padding:0;
  font-family: "Open Sans";
}
.content-wrapper {
  margin: 0 auto;
  max-width: 1200px;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  padding: 0.5rem;
}

.news-card {
  border: 0px solid aqua;
  margin: 0.5rem;
  position: relative;
  height: 12rem;
  overflow: hidden;
  border-radius: 0.5rem;
  flex: 1;
  min-width: 290px;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
}

@media (min-width: 900px) {

.news-card {
    height: 20rem
}
  }

.news-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);;
      z-index: 0;
    }

.news-card__card-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
/*     background: rgba(255,0,0,.5); */
  }

.news-card__image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 3s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    position: relative;
    z-index: -1;
  }

.news-card__text-wrapper {
    position: absolute;
    bottom: 0rem;
    padding: 1rem;
    color: white;
/*     background-color: rgba(0, 0, 0, 0.4); */
    transition: background-color 1.5s ease;
  }

.news-card__title {
    transition: color 1s ease;
    margin-bottom: .5rem;
  }

.news-card__post-date {
    font-size: .7rem;
    margin-bottom: .5rem;
    color: #CCC;
  }

.news-card__details-wrapper {
    max-height: 0;
    opacity: 0;
    transition: max-height 1.5s ease, opacity 1s ease;
  }

@media (min-width: 900px) {
    .news-card:hover .news-card__details-wrapper {
      max-height: 20rem;
      opacity: 1;
    }
    .news-card:hover .news-card__text-wrapper {
      background-color: rgba(0, 0, 0, 0.6);
    }
    .news-card:hover .news-card__title {
      color: yellow;
    }
    .news-card:hover .news-card__image {
      transform: scale(1.2);
      z-index: -1;
    }
  }

.news-card__excerpt {
    font-weight: 300;
  }

.news-card__read-more {
    background: black;
    color: #bbb;
    display: block;
    padding: 0.4rem 0.6rem;
    border-radius: 0.3rem;
    margin-top: 1rem;
    border: 1px solid #444;
    font-size: 0.8rem;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    text-decoration: none;
    width: 7rem;
    margin-left: auto;
    position: relative;
    z-index: 5;
  }

.news-card__read-more i {
      position: relative;
      left: 0.2rem;
      color: #888;
      transition: left 0.5s ease, color 0.6s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

.news-card__read-more:hover i {
      left: 0.5rem;
      color: yellow;
    }


 
        </style>
    </head>
    <body>
        <div class="categories">
       
        <h3 align="center" style="padding-top:50px;padding-bottom:20px;"> All Categories</h3>
        <div class="content-wrapper">

  <div class="news-card">
    <a href="category-courses.php" class="news-card__card-link"></a>
    <img src="images/technical.png" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Technical Courses</h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">For detailed syllubus of all the courses click below.&hellip;</p>
        <a href="category-courses.php" class="news-card__read-more">Go to Courses <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="category-courses.php" class="news-card__card-link"></a>
    <img src="images/non-tech.png" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Non-Technical Courses</h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">For detailed syllubus of all the courses click below.&hellip;</p>
        <a href="category-courses.php" class="news-card__read-more">Go to Courses <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="category-courses.php" class="news-card__card-link"></a>
    <img src="images/competitive.png" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Competitive Exam Courses</h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">For detailed syllubus of all the courses click below.&hellip;</p>
        <a href="category-courses.php" class="news-card__read-more">Go to Courses <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="category-courses.php" class="news-card__card-link"></a>
    <img src="images/online.png" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Online Tutions</h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">For detailed syllubus of all the courses click below.</p>
        <a href="category-courses.php" class="news-card__read-more">Go to Courses <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="category-courses.php" class="news-card__card-link"></a>
    <img src="images/non-academic.png" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Non Academic Courses</h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">For detailed syllubus of all the courses click below.</p>
        <a href="category-courses.php" class="news-card__read-more">Go to Courses <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="category-courses.php" class="news-card__card-link"></a>
    <img src="images/free.png" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Free Services</h2>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">For detailed syllubus of all the courses click below.</p>
        <a href="category-courses.php" class="news-card__read-more">Go to Courses <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

</div>
        
        </div>   
    </body>
</html>