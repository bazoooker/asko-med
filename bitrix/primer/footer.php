<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer class="page-footer">
                        <div class="container">
                              <a href="/" class="logo logo_footer"></a>

                              <div class="contacts contacts_footer">
                                    <a href="tel:73852506555" class="contacts__tel">
                                          <i class="icon icon_tel"></i>
                                          +7 (3852) 506-555
                                    </a href="">
                                    <a href="mailto:office@trade-pioneer.ru" class="contacts__mail">
                                          <i class="icon icon_mail"></i>
                                          office@trade-pioneer.ru
                                    </a href="">
                                    <a href="#" class="btn btn_outline-white">Напишите нам</a>
                              </div>

                        </div>
                  </footer>
            </div><!-- nessesary container to push footer to the bottom of the page END -->




       
        <!-- MODAL WINDOW 
======================-->
        <div id="overlay" style="display: none;">
        </div>
        <div class="modal" id="callback-window" style="display: none;">
            <a class="modal-close" href="#">
            </a>
            <div class="spinner">
            </div>
            <div class="modal-content">
                <h2>
                    Позвоним в течение 10 минут
                </h2>
                <div class="">
                    <form action="" data-file="callback" method="post">
                        <input autofocus="" name="name" placeholder="Ваше имя *" type="text">
                            <input name="phone" placeholder="Номер телефона *" type="text">
                                <textarea name="text" placeholder="Здесь вы можете оставить комментарий">
                                </textarea>
                                <div class="modal-controls">
                                    <button class="btn btn_gradient btn_x-small" type="submit">
                                        Отправить
                                    </button>
                                </div>
                                <div class="modal-errors">
                                </div>
                                <div class="modal-result">
                                </div>
                            </input>
                        </input>
                    </form>
                </div>
            </div>
            <div class="modal-content-copy">
            </div>
        </div>
        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>
        <script src="/js/modernizr.custom.62035.js" type="text/javascript">
        </script>
        <script src="/js/swiper.min.js">
        </script>
        <script src="/js/script.js">
        </script>
    </body>
</html>