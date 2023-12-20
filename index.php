<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Project</title>
  <link rel="stylesheet" href="style.css">
</head>

<body onload="configure();">

  <!--header-->
   <header class="header">
       <div class="container d-flex">
           <div class="logo" id="logo">
              AI Project
           </div>
           <nav class="navbar ">
                   <ul class="menu list-unstyled">
                       <li><a href="index.php">Home</a></li>
                       <li><a href="index.php#about">Webcam</a></li>
                       <li><a href="index.php#portfolio">Photos</a></li>
                       <li><a href="index.php#skills">About us</a></li>
                       <li><a href="image.php">Gallery</a></li>
                       <li><a href="album.php">Album</a></li>
                   </ul>
           </nav>
      </div>
  </header>

  <!--sections-->
  <section id="hero" class="hero">
    <div class="container">
      <div class="grid">
        <div class="hero__item left">
          <h1 class="title">Welcome to our AI project !</h1>
          <p>An AI that automatically analyzes and sorts your photos.</p>
        </div>
        <div class="hero__item right">
          <div class="hero__avatar">
            <img src="./img_perso/ai.png" width="400" height="400" loading="lazy" alt="Picture of AI">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="grid">
        <!--Affichage de la vidéo-->
        <div class="video-wrap">
          <div class="container_screen">
            <div id="my_camera"></div>
            <div id="results" style="visibility: hidden; position: absolute;"></div>
          </div>
          <!--Affichage des boutons-->
          <div class="controller">
              <button id="snap" type="button" onclick="saveSnap();" style="margin-bottom: -50px;">Capture</button>
          </div>
        </div>
        <label for="imageInput" style="display: block; width: auto; background: #e3362c; color: #fff; padding: 12px; border-radius: 5px; cursor: pointer; margin-bottom: 20px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.6rem;" onclick="uploadImage()">Choose an image</label>
        <input type="file" id="imageInput" accept="image/*" style="display: none;">
        <img id="previewImage" style="max-width: 300px; margin-top: 20px; display: none;">
        <button onclick="sendToAnalyse()" style="display: block; width: auto; background: #00561b; color: #fff; padding: 12px; border-radius: 5px; cursor: pointer; margin-left: 10px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.6rem;">Send to Analyse</button>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Photos</h2>
      </div>
      
      <div class="grid-container">
        <div class="grid__item">
          <div class="card">
            <h1>Gallery</h1>
            <div class="card__overlay">
              <a href="image.php" class="card__link" data-id="modal-1">+</a>
            </div>
          </div>
        </div>

        <div class="grid__item">
          <div class="card">
            <h1>Albums</h1>
            <div class="card__overlay">
              <a href="album.php" class="card__link" data-id="modal-3">+</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="skills" class="skills">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">About us</h2>
      </div>

      <div class="grid-container">
        <div class="grid_select">
          <div class="grid">
            <div class="grid_container"></div>
              <div class="grid__item">
                <div class="hero__item center">
                  <div class="hero__avatar">
                    <img src="./img_perso/thomas.jpg" width="400" height="400" loading="lazy" alt="Picture of Thomas">
                  </div>
                    <p1>Thomas PELLETIER</p1>
                    <ul class="socials list-unstyled">
                      <li>
                        <a href="https://www.facebook.com/profile.php?id=100009603720693" target="_blank">
                          <svg aria-hidden="true" class="icon facebook" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"> </path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/thomas-pelletier-/">
                          <svg aria-hidden="true" class="icon linkedin" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> 
                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"> </path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/thomas.pel/">
                          <svg aria-hidden="true" class="icon insta" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"> </path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        
        <div class="grid_select">
          <div class="grid">
            <div class="grid__item">
              <div class="hero__item center">
                <div class="hero__avatar">
                  <img src="./img_perso/thais.jpg" width="400" height="400" alt="Picture of Thais">
                </div>
                  <p1>Thais SOUZA DE OLIVEIRA</p1>
                  <ul class="socials list-unstyled">
                    <li>
                      <a href="#" target="_blank">
                        <svg aria-hidden="true" class="icon facebook" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                          <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"> </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/thais-souza-de-oliveira-34b44b210/">
                        <svg aria-hidden="true" class="icon linkedin" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/thais.degallery/">
                        <svg aria-hidden="true" class="icon insta" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"> </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="grid-container">
        <div class="grid_select">
          <div class="grid">
            <div class="grid__item">
              <div class="hero__item center">
                <div class="hero__avatar">
                  <img src="./img_perso/jeremy.jpg" width="400" height="400px" alt="Picture of Jeremy">
                </div>
                  <p1>Jeremy MU</p1>
                  <ul class="socials list-unstyled">
                    <li>
                      <a href="#" target="_blank">
                        <svg aria-hidden="true" class="icon facebook" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                          <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg aria-hidden="true" class="icon linkedin" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg aria-hidden="true" class="icon insta" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                        </svg>
                      </a>
                     </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        
          <div class="grid_select">
            <div class="grid">
              <div class="grid__item">
                <div class="hero__item center">
                  <div class="hero__avatar">
                    <img src="./img_perso/dorian.png" width="400" height="400" alt="Picture of Dorian">
                  </div>
                  <p1>Dorian PISTORESI</p1>
                    <ul class="socials list-unstyled">
                        <li>
                          <a href="#" target="_blank">
                            <svg aria-hidden="true" class="icon facebook" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/in/dorian-pistoresi-a59058253/">
                          <svg aria-hidden="true" class="icon linkedin" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <svg aria-hidden="true" class="icon insta" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!--footer-->
  <footer>

    <div class="container">
      <div class="grid">
        <div class="grid__item left">
          <p>AI Project</p>
        </div>

        <div class="grid__item right">
          <p>Copyright © AI Project. All Rights Reserved. Designed by Thomas Pelletier in 2023</p>
        </div>
      </div>
    </div>

  </footer>


   <!-- script -->
   <script type="text/javascript" src="assets/webcam.min.js"></script>
   <script type="text/javascript">
       function configure(){
            /*Webcam initialization*/
            Webcam.set({
                width: 480,
                height: 360,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            Webcam.attach('#my_camera');
       }
    
       function saveSnap(){
           Webcam.snap(function(data_uri){
               document.getElementById('results').innerHTML = '<img id="webcam" src="' + data_uri + '"/>';
           });

           Webcam.reset();

           var base64image = document.getElementById("webcam").src;
           Webcam.upload(base64image, 'function.php', function(code,text){
               alert('Save successfully');
           });
          
           /*Webcam initializating*/
           Webcam.set({
                width: 480,
                height: 360,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            Webcam.attach('#my_camera');
       }

       function sendSnap(){

       }
   </script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
      $(document).ready(function(){
          // Gestion du clic sur le logo
          $("#logo").click(function() {
              // Faire défiler la page vers le haut avec un effet glissant
              $('html, body').animate({
                  scrollTop: 0
              }, 800); // 800 est la durée de l'animation en millisecondes
          });
      });
  </script>

  <script>
          var uploadedFileName = null;

          function uploadImage() {
              var input = document.getElementById('imageInput');
              var preview = document.getElementById('previewImage');

              var file = input.files[0];

              if (file) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      preview.src = e.target.result;

                      // Générer un nom d'image basé sur la date et l'heure actuelles
                      var currentDate = new Date();
                      var imageName = currentDate.getFullYear() + '.' +
                                      (currentDate.getMonth() + 1) + '.' +
                                      currentDate.getDate() + '-' +
                                      currentDate.getHours() + '.' +
                                      currentDate.getMinutes() + '.' +
                                      currentDate.getSeconds() + '.jpeg';

                      uploadedFileName = imageName;
                  };

                  reader.readAsDataURL(file);
              } else {
                  alert('Veuillez sélectionner une image.');
              }
          }

          function sendToAnalyse() {
              if (uploadedFileName) {
                  var formData = new FormData();
                  formData.append('file', document.getElementById('imageInput').files[0]);

                  var xhr = new XMLHttpRequest();
                  xhr.open('POST', 'upload.php', true);
                  xhr.onreadystatechange = function() {
                      if (xhr.readyState == 4 && xhr.status == 200) {
                          alert(xhr.responseText);
                          // Réinitialiser le champ et l'aperçu
                          document.getElementById('imageInput').value = '';
                          document.getElementById('previewImage').style.display = 'none';
                          uploadedFileName = null;
                      }
                  };
                  xhr.send(formData);
              } else {
                  alert('Veuillez d\'abord télécharger une image.');
              }
          }
    </script>

</body>

</html>