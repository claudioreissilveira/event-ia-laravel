@extends('layouts.app')

@section('conteudo')
<div class="container-form">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Informações</h3>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                dolorum adipisci recusandae praesentium dicta!
            </p>

            <div class="info">
                <div class="information">
                    <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp

                    <p>Belo Horizonte, MG</p>
                </div>
                <div class="information">
                    <i class="fas fa-envelope"></i> &nbsp &nbsp
                    <p>event.ia@gmail.com</p>
                </div>
                <div class="information">
                    <i class="fas fa-phone"></i>&nbsp&nbsp
                    <p>(31) 9 1010-0505</p>
                </div>
            </div>

            <div class="social-media">
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">

            <form action="index.html" autocomplete="off">
                <h3 class="title">Entre em contato</h3>
                <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for="">Nome</label>
                    <span>Nome</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="input" />
                    <label for="">Telefone</label>
                    <span>Telefone</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Mensagem</label>
                    <span>Mensagem</span>
                </div>
                <input type="submit" value="Enviar" class="btn" />
            </form>
        </div>
    </div>
</div>

@endsection