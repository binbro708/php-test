<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="{{asset('css/all.css')}}" />
  </head>
  <body>
    <div class="container-xxl">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./img/logo.svg" alt="" class="logo-img"></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >


            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">登入頁面</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>


            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container-fluid">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active swiper">
            <img
              src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-simple-gray-solid-color-background-image_557027.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item swiper">
            <img
              src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-simple-gray-solid-color-background-image_557027.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item swiper">
            <img
              src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-simple-gray-solid-color-background-image_557027.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container-xxl">
      <div
        class="d-flex justify-content-center flex-column align-items-center mt-5"
      >
        <h3>Raw Denim Heirloom Man Braid</h3>
        <p>
          Blue bottle crucifix vinyl post-ironic four dollar toast vegan
          taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi
          pug.
        </p>
      </div>
      <div class="card-group w-100">
        <div class="card-group-main d-flex justify-content-between w-100">
            <div class="card border-0 d-flex flex-column align-items-center" style="width: 18rem">
                <div class="circle rounded-circle d-flex justify-content-center align-items-center">  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24" width="40" height="40">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg></div>

              <div class="card-body text-center">
                <h5 class="card-title">Shooting Stars</h5>
                <p class="card-text">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="">Learn More</a>
              </div>
            </div>
            <div class="card border-0 d-flex flex-column align-items-center" style="width: 18rem">
                <div class="circle rounded-circle d-flex justify-content-center align-items-center">  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24" width="40" height="40">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg></div>

              <div class="card-body text-center">
                <h5 class="card-title">Shooting Stars</h5>
                <p class="card-text">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="">Learn More</a>
              </div>
            </div>
            <div class="card border-0 d-flex flex-column align-items-center" style="width: 18rem">
                <div class="circle rounded-circle d-flex justify-content-center align-items-center">  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24" width="40" height="40">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg></div>

              <div class="card-body text-center">
                <h5 class="card-title">Shooting Stars</h5>
                <p class="card-text">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="">Learn More</a>
              </div>
            </div>
        </div>
     <div class="card-group-btn mx-auto ">
        <div class="btn btn-primary  ">text</div>
     </div>


      </div>

      <div class="mt-5">
        <div class="row">
          <div class="col-3"><h3>Master Cleanse Reliac Heirloom</h3></div>
          <div class="col-9">
            <p>
              Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
              gentrify, subway tile poke farm-to-table. Franzen you probably
              haven't heard of them man bun deep jianbing selfies heirloom.
            </p>
          </div>
        </div>
      </div>

      <div class="mt-5">
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-6"><img src="./img/500x300.png" alt="" /></div>
              <div class="col-6"><img src="./img/501x301.png" alt="" /></div>
              <div class="col-12 mt-4">
                <img src="./img/600x360.png" alt="" class="w-100" />
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="row">
              <div class="col-12 mb-4">
                <img src="./img/601x361.png" alt="" class="w-100" />
              </div>
              <div class="col-6"><img src="./img/502x302.png" alt="" /></div>
              <div class="col-6"><img src="./img/503x303.png" alt="" /></div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="d-flex justify-content-center flex-column align-items-center mt-5"
      >
        <h3>Raw Denim Heirloom Man Braid</h3>
        <p>
          Blue bottle crucifix vinyl post-ironic four dollar toast vegan
          taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi
          pug.
        </p>
      </div>
      <div class="table mt-4 p-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mt-5">
        <div class="row">
          <div class="col-3"><h3>Master Cleanse Reliac Heirloom</h3></div>
          <div class="col-9">
            <p>
              Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
              gentrify, subway tile poke farm-to-table. Franzen you probably
              haven't heard of them man bun deep jianbing selfies heirloom.
            </p>
          </div>
        </div>
      </div>

      <div class="card-group-s p-2 mb-5">
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/720x400.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/721x401.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/722x402.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/723x403.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-text">
        <div class="main-text-group">
            {{-- @foreach ($product as $key=>$item )

            <div class="mt-5">
                <div class="row  @if ($key % 2 == 1) flex-row-reverse  @endif" >
                    <div class="col-3"><img src="{{ $item->img_path }}" alt=""></div>
                    <div class="col-9">
                        <h3>{{$item->title}}</h3>
                        <p>
                             {{$item->content}}
                         </p>
                    </div>
                </div>
            </div>




            @endforeach --}}


            <div class="mt-5">
                <div class="row  " >
                    <div class="col-3"><img src="" alt="#"></div>
                    <div class="col-9">
                        <h3>title</h3>
                        <p>
                          text
                         </p>
                    </div>
                </div>
            </div>







        </div>
        <div class="main-text-btn d-flex justify-content-center mt-5">
          <div class="btn btn-primary">text</div>
        </div>
      </div>

      <div class="main-info px-5 mt-5 mb-5">
        <div class="row">
          <div class="col-6">
            <img src="./img/400x400.png" alt="" class="w-100" />
          </div>
          <iv class="col-6">
            <div class="h5">BRAND NAME</div>
            <h4>The Catcher in the Rye</h4>
            <div class="d-flex">
                <div>星星區</div>
                <div>
                    4 Reviews
                </div>
                <div>icon</div>
                <div>icon</div>
            </div>
            <p class="mt-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
            <div class="d-flex">
                <div>color <span>顏色圈圈</span></div>
                <div>size <span>下拉選單</span></div>
            </div>

            <div class="d-flex justify-content-between mt-5">
                <span class="h3">$58.00</span>
                <div class="info-btn-group">
                    <div class="btn btn-primary">button</div>
                    <span>愛心icon</span>
                </div>
            </div>
        </div>
      </div>
      <div class="main-card-group p-2 mt-5">
        <div class="row mb-3">
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/424x264.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/425x265.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/427x267.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card" style="width: 18rem">
              <img src="./img/428x268.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img src="./img/420x260.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img src="./img/421x261.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img src="./img/422x262.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem">
                <img src="./img/423x263.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
      </div>




    </div>
    <div class="container-fluid">
        <div class="map-group position-relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.7837646843673!2d120.64604911526526!3d24.17931517817169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691623a7988aa7%3A0x73dd146c41c3035a!2z6YCi55Sy5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1665467198277!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 position-absolute">
            </iframe>
            <div class=" position-absolute w-100 h-100 ">
                <div class="feedback ms-auto"></div>
            </div>
          </div>


  <footer class="p-5 ">
   <div class="row">
    <div class="col-5"><img src="" alt="LOGO"></div>
    <div class="col-7 d-flex">
        <ul class="list-unstyled ms-5">
            CATEGORIES
            <li>First Link</li>
            <li>Second Link</li>
            <li>Third Link</li>
            <li>Fourth Link</li>
        </ul>
        <ul class="list-unstyled  ms-5">
            CATEGORIES
            <li>First Link</li>
            <li>Second Link</li>
            <li>Third Link</li>
            <li>Fourth Link</li>
        </ul>
        <ul class="list-unstyled  ms-5">
            CATEGORIES
            <li>First Link</li>
            <li>Second Link</li>
            <li>Third Link</li>
            <li>Fourth Link</li>
        </ul>
        <ul class="list-unstyled  ms-5">
            CATEGORIES
            <li>First Link</li>
            <li>Second Link</li>
            <li>Third Link</li>
            <li>Fourth Link</li>
        </ul>
    </div>


    </div>
   </div>
  </footer>


</ul>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.bundle.min.js"
      integrity="sha512-BOsvKbLb0dB1IVplOL9ptU1EYA+LuCKEluZWRUYG73hxqNBU85JBIBhPGwhQl7O633KtkjMv8lvxZcWP+N3V3w=="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
