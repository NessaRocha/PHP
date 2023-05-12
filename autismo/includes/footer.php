<style>
    #footer {

        left: 0;
        bottom: 0;
        width: 100%;
        background-color: rgb(11, 5, 31);
        color: white;
        text-align: center;

    }
</style>

<footer id="footer">
    <div class="container-fluid " id="footer-links-container">
        <div class="row ">
            <div class="col-12 col-md-4 mt-2 footer-column">
                <p>Sobre o Integra Autista</p>
                <ul class="list">
                    <li class="mb-0"><a href="#" class="primary-color">Sobre Nós</a></li>
                    <li class="mb-0"><a href="#" class="primary-color">Fale Conosco</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-2  footer-column" id="footer-center">
                <p>Nossas Redes Sociais</p>
                <ul class="list">
                    <li class="mb-0"><a href="https://www.instagram.com/integraautista/" class="primary-color">Instagram <i class="fa-brands fa-instagram-square"></i></a></li>
                    <li class="mb-0"><a href="https://www.facebook.com/IntegraAutista/" class="primary-color">Facebook <i class="fa-brands fa-facebook-square"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-2 footer-column">
                <p>Perguntas Frequentes</p>
                <ul class="list">

                    <li class="mb-0"><a href="./termos-servicos.php" class="primary-color">Termo de Uso</a></li>
                </ul>
            </div>
            <div class="container-fluid" id="newsletter-container">
                <div class="col-4 container-fluid mt-2 mb-2">
                    <div class="row">
                        <p class="secondary-color">Se inscreva na nossa Newsletter:</p>
                        <form class="d-flex " id="news-form">
                            <input type="email" class="form-control me-2" placeholder="Insira seu melhor e-mail">
                            <button class="btn bg-color" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
                <?php
                echo "<p>Copyright &copy:20" . date("y") . "Integra Autista";

                echo "</span><strong> - Sua melhor integração sobre Autismo.</strong></p>";
                ?>
            </div>
        </div>
    </div>
</footer>