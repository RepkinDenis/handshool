<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Галерея</title>
        <link href="./comment.css" rel="stylesheet" />
        <link href="./gallery-lib/gallery.css" rel="stylesheet" />
        <script src="./gallery-lib/gallery.js"></script>
    </head>
    <body>
        <div id="gallery">
            <div class="box-area">	
                <div class="img-area">
                    <div class="slide">
                        <img src="./images/man1.png" alt="man"/>
                    </div>
                </div>	
                <h3>Иван</h3>									
                <p class="content">
                Я в восторге от своего опыта с этой онлайн школой по изучению языка жестов! Уроки были хорошо структурированы и 
                легко усваиваемы, а преподаватели были невероятно компетентны и поддерживающие. Я чувствую, что за короткое время 
                добился значительного прогресса, и я настоятельно рекомендую эту школу всем, кто заинтересован в изучении языка жестов.
                </p>
            </div> 
    
            <div class="box-area">	
                <div class="img-area">
                    <div class="slide">
                        <img src="./images/woman1.png" alt="woman"/>
                    </div>
                </div>	
                <h3>Надежда</h3>									
                <p class="content">
                Я всегда хотела выучить язык жестов, и я так рада, что нашла эту онлайн школу. Учебный план всеобъемлющий и увлекательный,
                 видеоуроки ясные и понятные. Преподаватели также очень отзывчивы на любые вопросы или заботы. Я благодарен за 
                 возможность изучить этот язык с такой фантастической программой.
                </p>
            </div> 

            <div class="box-area">	
                    <div class="img-area">
                        <div class="slide">
                            <img src="./images/man2.png" alt="man"/>
                        </div>
                    </div>	
                    <h3>Роман</h3>								
                    <p class="content">
                    Я поступил в эту онлайн школу по изучению языка жестов, чтобы улучшить свои навыки общения. 
                    Занятия хорошо структурированы и информативны, а интерактивные упражнения действительно помогли мне 
                    освоить концепции. Я ценю преданность преподавателей и чувство сообщества среди студентов. 
                    Я с нетерпением жду продолжения своего учебного пути с этой школой.
                    </p>
                </div> 
        

            <div class="box-area">	
                    <div class="img-area">
                        <div class="slide">
                            <img src="./images/woman2.png" alt="woman"/>
                        </div>
                    </div>	
                    <h3>Анна</h3>									
                    <p class="content">
                    Как начинающий в языке жестов, я немного нервничала из-за начала своего обучения, но эта онлайн школа сразу
                     заставила меня почувствовать себя спокойно. Уроки разбиты таким образом, что их легко усвоить, 
                     а практические упражнения веселые и полезные. Обратная связь от преподавателей бесценна, и мне кажется, 
                     что я делаю стабильные успехи. Я благодарен за возможность изучать язык жестов 
                     с такой поддерживающей и хорошо организованной программой.
                    </p>
                </div> 

            <div class="box-area">	
                    <div class="img-area">
                        <div class="slide">
                            <img src="./images/man3.png" alt="man"/>
                        </div>
                    </div>	
                    <h3>Илья</h3>									
                    <p class="content">
                    Я уже некоторое время изучаю язык жестов, и могу уверенно сказать, что эта онлайн школа - один из лучших ресурсов, 
                    с которыми мне довелось столкнуться. Учебный план тщательный и охватывает широкий спектр тем, 
                    а преподаватели сильно увлечены своей работой. Гибкость онлайн формата также большой плюс. 
                    Я узнал так много из этой программы и рекомендую ее всем, кто заинтересован в изучении языка жестов.
                    </p>
                </div> 
            
            <div class="box-area">	
                <div class="img-area">
                    <div class="slide">
                        <img src="./images/woman3.png" alt="woman"/>
                    </div>
                </div>	
                <h3>Анастасия</h3>								
                <p class="content">
                Изучение языка жестов онлайн с этой школой было невероятно опытом. Преподаватели не только компетентны, 
                но и искренне заботливы и поддерживающи. Учебные материалы хорошо разработаны, а платформа удобна в использовании. 
                Я приобрел уверенность в своих навыках жестов, и я благодарна за возможность учиться у таких преданных педагогов. 
                Эту школу очень рекомендую.</p>
            </div>
            </div>
        </div>

        <div id="head">
            <p style="font-size:28px;"><span>Отзывы</span></p>
        </div>
      <button id="bars" class="btn" onclick="togglePopup()"></button>
      <div id="bars_panel" >
            <button id="cross" onclick="togglePopup()"></button>

            <button id="tariff_bars" class="btn" onclick="window.location.href = '/../tariff.php'">Тарифы</button>

            <button id="singup_bars" class="btn" onclick="window.location.href = '/../singup.php'">Записаться</button>

            <button id="registration_bars" class="btn" onclick="window.location.href = '/../registration.php'">Регистрация</button>

            <button id="qa_bars" class="btn" onclick="window.location.href = '/../QA.php'">Вопросы</button>

            <button id="home_page_bars" class="btn" onclick="window.location.href = '/../home_page.php'">Главная</button>
          </div>
        </div>
      </div>
      <script>
        function togglePopup() {
          var popup = document.getElementById("bars_panel");
          if (popup.style.left === "-400px") {
                popup.style.left = "0";
            } else {
                popup.style.left = "-400px";
            }
        }
      </script>
        <script src="./comment.js"></script>
    </body>
</html>