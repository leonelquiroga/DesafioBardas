<?php

/* @var $this yii\web\View */

$this->title = 'Proyecto Web';
?>
<div class="site-index">
    <!-- Seccion inicio -->
    <div class="logo">
    <div class="jumbotron">
        <h2>Proyecto web</h2>
        <p> img Logo</p>
    </div>
    </div>    

    <div class="body-content">
        <!-- Seccion slogan -->
        <div class="slogan">
            <div class="jumbotron">
                <h1>"Tu residuo, tu responsabilidad"</h1>
                
                <p class="text-justify"> Este reto contará de etapas que serán de destreza física, a través del trote y recolección de residuos, y mental, en donde cada participante deberán contestar trivias con temáticas ambientales para ir sumando puntos.</p>
                
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <h3>Requisitos Carrera</h3>
                
                <ul class="list-group">
                    <li class="list-group-item">Quien participa</li>
                    <p class="text-justify"> Toda persona que cumpla los requisitos de la inscripción. La modalidad de dicha carrera se va a dar en grupos conformados por dos o cuatro personas.</p>
                   <li class="list-group-item">¿Como ganar?</li>
                   <p class="text-justify"> Para ganar van a tener que realizar los siguientes pasos:
                   <ul>
                       <li><p class="text-justify"><b>Recolección de residuos en bolsas por la cantidad de integrantes</b>; si el equipo es conformado por dos personas deberán recolectar una bolsa completa. Si es de cuatro, se deberá recolectar dos bolsas completas de residuos.</p></li>
                       <li><p class="text-justify"><b>Contestar las trivias que se encuentran en el camino.</b> Las mismas serán levantadas por código QR, para lo cual cada equipo deberá llevar un teléfono celular que se va a presentar al finalizar la carrera. </p></li>
                       <li><p class="text-justify"><b>Tiempo de carrerar del circuito completo.</b> El equipo que menos tarda en hacer todos los pasos será el ganador</p></li>
                   </ul>
                   <p class="text-justify">En resumen, en este desafio se pondrá a prueba la destreza física y mental. Dado que los participantes a medida que transiten la carrera irán respondiendo trivias y recolectando residuos para así, trabajar de forma colaborativa entre sus participantes, los cuales deberán llegar todos juntos a la meta. El camino estará delimitado, pero podrán salirse del recorrido hasta 5 metros para recolectar la mayor cantidad de residuos.</p>
                </ul>
                
            </div>
            <div class="col-lg-6">
                <h3>Premiacion</h3>
                <p class="text-justify"> Los premios son de tipo monetario.</p>
                <p class="list-group-item">Categorias</p>
                
                <p class="text-justify"> <h4>Categoria Running:</h4> <br> 
                <b>Equipos de cuatro personas:<br> 1º premio:</b> $6000 para el equipo.<br><b>2º premio:</b> $4000 para el equipo. <br><b>3º premio: </b> $2800 para el equipo. </p>
                <p class="text-justify"> <b>Equipos de dos personas: <br> 1º premio: </b> $3000 para el equipo. <br><b>2º premio: </b> $2000 para el equipo. <br><b>3º premio: </b> $1400 para el equipo. </p>
                <br>    
                <p class="text-justify"> <h4>Categoria Recreativa:</h4><br>
                Premios en especies.</p>
                <p><b>Equipos de cuatro personas: </b> tres primeros puestos. <br> <b>Equipos de dos personas: </b> tres primeros puestos</p>
            </div>
        </div>
        <!-- Seccion sponsor -->
        <div class="sponsor">
            <div class="jumbotron">
                <h1>Programa de sponsoreo</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-justify"> En esta 1era edición del desafio por las bardas, la colaboración de cada uno de los participantes es vital para su desarrollo ya que fomenta el deporte, los hábitos ambientales al igual que saludables, la importancia de la barda como un ambiente natural de nuestra ciudad.<br> Sin la participación de colaboadores el evento no se llevaría a cabo, ya que no se podrían cubrir gastos logísticos, organización y de publicidad. </p>
                </div>
                <div class="col-lg-6">
                    <h3>"Buscamos y necesitamos de tu apoyo para costear este desafio."</h3>
                </div>
                
            </div>
        </div>
        <br><br>
        <!-- Seccion imagen/texto-->
        <div class="info">
            <div class="row">
                <div class="col-lg-8">
                    <img src="../views/img/cuadrado.jpg" width="650" height="250" alt="cuadrado"/>    
                </div>
                <div class="col-lg-4">
                    <p class="text-justify">Este evento está inspirado en la práctica del <i>Plogging </i> - término que combina dos palabras en inglés: correr y recoger-, y se trata de la acción de recoger residuos mientras se corre. 
                        Son muchas las carreras deportivas que buscan concientizar sobre el reciclaje y el cuidado ambiental en todo el mundo ya que, son esos mismos eventos los que en la mayoría de las ocasiones generan acumulación de residuos y micro-basurales. 
                        <i>“Desafío por la barda”</i> integra tres aspectos claves en la relación ambiente - deporte - tecnología: la protección del ecosistema natural de la ciudad con la actividad deportiva en el marco de entretenidas trivias, con las que los corredores se
                        encontrarán en el camino accediendo a través de códigos QR que activarán desde un dispositivo móvil, dando como resultado una actividad recreativa, ecológica, innovadora y saludable para todo tipo de público.</p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Seccion cuenta regresiva / formulario -->
        
        <div class="row">
            <div class="col-lg-5">
                <iframe width="457" height="235" src="https://w2.countingdownto.com/2473794" frameborder="0"></iframe>
            </div>
            <div class="col-lg-7">
                <form>
                    <p><strong> CONTACTANOS </strong></p>
                            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Direccion de Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputComentario">Comentario</label>
                    <textarea class="form-control" id="exampleInputComentario" placeholder="Ingrese su comentario..." rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        

    </div>
</div>
</div>
