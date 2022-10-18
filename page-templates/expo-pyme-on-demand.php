<?php
/**
 * Template Name: Expo Pyme On Demand 2022
 */

 get_header();
?>

<div class="modal-loggin">

        <div class="box">
            <div class="content">
                <div class="close-loggin">+</div>
                <p>Para ver el contenido de<br>este video debes</p>
                <div class="text-center d-flex align-items-center" style="justify-content: center;">
                    <a href="<?php echo get_home_url().'/login' ?>"  id="home-reg" class="btn-per-4 fw-700 mayusculas ">Iniciar Sesión</a><br>
                </div>

        </div>
    </div>
</div>
<div class="modal-video-cont" id="modal-video-cont">
    <div class="close-button">+</div>

    <div class="modal-title" id="modal-title"></div>
    <div class="modal-video" id="modal-video"></div>
    <div id="display"></div>
</div>
<div class="menu-ejes-cont">
    <div class="menu-ejes" id="menu-ejes" data-aos="fade-up">
        <ul>
            <li><a class="scroll-button" href="#ejes">Ejes</a></li>
            <li><a class="scroll-button" href="#expositores-magistrales">Expositores magistrales</a></li>
            <li><a class="scroll-button" href="#lista-de-conferencias">Lista de conferencias</a></li>
        </ul>
    </div>
</div>

<div class="banner_hero">
    <div class="container py-7 w-100">
        <h1 class="t-blanco mayusculas" data-aos="fade-up">EXPO PYME 2022 <br>On Demand</h1>
    </div>
 </div>

 <div class="grid-cont" id="ejes">
    <div class="column" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri().'/img/2022/first_square.jpg' ?>" alt="">
    </div>
    <div class="column" data-aos="fade-up">
        <div class="title">Conferencias <br>y Paneles Magistrales
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=CONFERENCIAS Y PANELES MAGISTRALES" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-color.png' ?>" alt="">
            </a>
        </div>
    </div>
 </div>


 <div class="grid-cont-three">
    <div class="column" data-aos="fade-up">
        <div class="title">Ventas
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=VENTAS" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
    <div class="column" data-aos="fade-up">
        <div class="title">Innovación <br> y transformación digital
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=INNOVACIÓN Y TRANSFORMACIÓN DIGITAL" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
    <div class="column" data-aos="fade-up">
        <div class="title">Finanzas <br>y Financiamiento
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=FINANZAS Y FINANCIAMIENTO" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
 </div>


 <div class="grid-cont-two">
    <div class="column" data-aos="fade-up">
        <div class="title">Recursos Humano <br>y desarrollo <br>organizacional
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=RRHH Y DESARROLLO ORGANIZACIONAL" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
    <div class="column" data-aos="fade-up">
        <div class="title">Marketing
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=MARKETING" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
    <div class="column" data-aos="fade-up">
        <div class="title">Empresas Familiares y RSE
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=EMPRESAS FAMILIARES Y RSE" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
    <div class="column" data-aos="fade-up">
        <div class="title">Emprendimiento
        <br>
            <a href="<?php echo get_home_url(); ?>/lista-de-videos/?eje=EMPRENDIMIENTO" class="link">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/arrow-right-white.png' ?>" alt="">
            </a>
        </div>
    </div>
 </div>

 <div class="menu-tabs" id="expositores-magistrales" data-aos="fade-up">
    <div class="menu_title">
        conferencias destacadas

    </div>
    <ul data-aos="fade-up">
        <li data-button="miercoles" class="tab-button active">Día 1</li>
        <li data-button="jueves" class="tab-button">Día 2</li>
        <li data-button="viernes" class="tab-button">Día 3</li>
    </ul>
</div>

<div class="tabs-content">
    <div data-tab="miercoles" class="tab active" data-aos="fade-up">
        <div class="title">
        <span>DÍA 1</span> <br>
        -<br>
        INAUGURACIÓN - 10:30 HORAS
        </div>

        <div class="container grid-users" >
            <div class="columns">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Tatiana Clouthier.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Las MiPymes como eje central de la economía</div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">14:30 A 15:30 HRS</!--div-->
                        <div class="primary">Tatiana Clouthier<br><small>Secretaría de Economía</small></div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Alexis Sepulveda.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">AMAZON</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">14:30 A 15:30 HRS</!--div-->
                        <div class="primary">Alexis Sepulveda</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Kharla Aguilar.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Agua residual tratada</div>
                        <br>
                        <div class="second"> DOCUSIGN</div>
                        <div class="second">15:45 A 16:45 HRS</div>
                        <div class="primary">Kharla Jovanka Aguilar Limón<br><small>Cordinadora de saneamiento<br>Servicios de agua y Drenajes de Monterrey</small></div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/JosePinto.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Retos en la industria de aplicaciones tecnológicas</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">15:45 A 16:45 HRS</!--div-->
                        <div class="primary">
                            José Pinto<br>
                            <small>
                                Gerente General,<br>
                                Uber México
                            </small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Luis Antonio Ramirez.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">DOCUSIGN</div>
                        <br>
                        <div class="second"> DOCUSIGN</div>
                        <div class="second">17:00 A 18:00 HRS</div>
                        <div class="primary">
                            Luis Antonio Ramírez,<br>
                            <small>
                                Director General, <br>
                                NAFIN - BANCOMEXT
                            </small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Rafel Niell.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">AUTYCOM</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">17:00 A 10:30 HRS</!--div-->
                        <div class="primary">
                            Rafael Niell, <br>
                            <small>
                                Fundador y COO,<br>
                                MINU
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-tab="jueves" class="tab">
        <div class="title">
        <span>DÍA 2</span> <br>
        -<br>
        INAUGURACIÓN - 10:30 HORAS
        </div>

        <div class="container grid-users">
            <div class="columns">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Paneles ONDEMAND/Lissy-Pedro-Ricardo-Jorge.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Panel:</div>
                        <div class="primary">Industrial Tech: El rumbo de la tecnología en el sector industrial</div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">10:30 A 11:30 HRS</!--div-->
                        <div class="primary">
                            Lissy Giacomán, <small>CEO, Vinco</small><br>
                            Ricardo Cevada, <small>CEO, Skills For Industry</small><br>
                            Pedro Vallejo, <small>Fundador y Director General, Datlas</small><br>
                            Moderador: Jorge Cervantes, <small>Presidente de la Comisión de Jóvenes</small><br>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/AlfonsodelosRios.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">De startup a unicornio en menos de 4 años</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">09:30 A 10:30 HRS</!--div-->
                        <div class="primary">
                            Alfonso de los Ríos, <br>
                            <small>
                                CEO y Co-fundador, Nowsports
                            </small>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Jorge Valencia.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Firmas electrónicas: El último reto de la transformación digital</div>
                        <br>
                        <div class="second"> DOCUSIGN</div>
                        <div class="second">11:45 A 12:45 HRS</div>
                        <div class="primary">Jorge Valencia, <br><small>Account Executve, DocuSign</small></div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/RicardoRenteria.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">¿Cómo la nube de Amazon Web Services (AWS) se puede convertir en tu mejor aliado de nogocio?</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">11:45 A 12:45 HRS</!--div-->
                        <div class="primary">Ricardo Rentería, <br>
                            <small>Director Comercial, <br> Amazon Web Services</small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Paneles ONDEMAND/Gladys-Martha-Mercedes.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Panel: </div>
                        <div class="primary">
                            La tendencia actual en supply chain. Cómo lograr ser proveedor de empresas multinacionales.
                        </div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">14:30 A 15:30 HRS</!--div-->
                        <div class="primary">
                            Gladis Araujo, <br>
                            <small>VP Global de Calidad, MATTEL</small><br>
                            Lucía Mortera, <br>
                            <small>
                                Fundadora, Rautaki
                            </small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Paneles ONDEMAND/Cesar-Esteban-Leopoldo.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Panel: </div>
                        <div class="primary">
                            Líderes empresarios del noreste
                        </div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">14:30 A 15:30 HRS</!--div-->
                        <div class="primary">
                        César Jiménez, <br><small>Presidente Ejectuvo, TERNIUM</small><br>
                        Leopoldo Cedillo, <br><small>CEO, PROEZA</small>
                        Esteban Rivero Gonález, <br><small>Director Gral Adjunto, AUTLÁN</small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Leo Piccioli.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral: </div>
                        <div class="primary">
                           El fututo es de los vagos
                        </div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">15:45 A 16:45 HRS</!--div-->
                        <div class="primary">
                            Leo Piccioli, <br><small>LinkedIn Top Voice</small><br>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Paneles ONDEMAND/Gladys-Martha-Mercedes.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Panel: </div>
                        <div class="primary">
                            Hablidades del futuro y cómo liderarlo
                        </div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">15:45 A 16:45 HRS</!--div-->
                        <div class="primary">
                        Gladis Araujo, <br><small>VP Global de Calidad, MATTEL</small><br>
                        Martha Barroso, <br><small>Directora de People & Culture, Manpower</small>
                        Mercdes de la Maza, <br><small>CEO, Generation México</small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Paneles ONDEMAND/Carlos-Ivan-Juan Antonio.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Panel: </div>
                        <div class="primary">
                            Integración de las PyMES en las cadenas de valor
                        </div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">17:00 A 18:00 HRS</!--div-->
                        <div class="primary">
                        Carlos Rodríguez, <br><small>Procurement Regional Director, Exiros</small><br>
                        Juan Antonio Espinosa, <br><small>Director de Abastecimientos, CEMEX</small><br>
                        Iván Martínez, <br><small>Subdirector de Negociación, DEACERO</small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Gonzalo Matteoda.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral: </div>
                        <div class="primary">
                            La transformación digital al alcance de todos
                        </div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">17:00 A 18:00 HRS</!--div-->
                        <div class="primary">
                            Gonzalo Matteoda
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-tab="viernes" class="tab">
        <div class="title">
        <span>DÍA 3</span> <br>
        -<br>
        INAUGURACIÓN - 10:30 HORAS
        </div>

        <div class="container grid-users">
            <div class="columns">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Paneles ONDEMAND/Everardo-Joana-Manuel.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Panel:</div>
                        <div class="primary">Perspectivas económicas para las PyMES 2023</div>
                        <br>
                        <div class="second"> DOCUSIGN</div>
                        <div class="second">10:30 A 11:30 HRS</div>
                        <div class="primary">
                            Everardo Elizono y Manuel Sánchez, <br>
                            <small>
                                Banco de México, Ex Gobernadores
                            </small>
                            Moderadora: Joana Chapa Directora,<br>
                            <small>
                                Centro de investigaciones económicas de la UANL
                            </small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Pedro Eloy.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Los elementos del éxito en los negocios</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">10:30 A 11:30 HRS</!--div-->
                        <div class="primary">
                            Pedro Eloy Ramirez, <br>
                            <small>
                                Fundador, Grupo Percepciones
                            </small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Ivan Rivas.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Firmas electrónicas: el último reto de la transformación digital</div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">11:45 A 12:45 HRS</!--div-->
                        <div class="primary">
                            Iván Rivas, <br>
                            <small>
                                Secretario, Decretaría de Economía de Nuevo León
                            </small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Alvaro Villar.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">¿Por qué elevar la apuesta por un modelo híbrido?</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">11:45 a 12:45 HRS</!--div-->
                        <div class="primary">
                            Álvaro Villar, <br>
                            <small>
                                General Manager, WeWork
                            </small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Javier Jara.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">DOCUSIGN</div>
                        <br>
                        <div class="second"> DOCUSIGN</div>
                        <div class="second">14:30 A 15:30 HRS</div>
                        <div class="primary">
                            Javier Jara, <br>
                            <small>
                                Coordinador de incubadoras, Instituto de Innovación y Transferencia de Tecnología de Nuevo León
                            </small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Andres Diaz.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Oportunidades en la tencnología para la internacionalización de las PyMES mexicanas</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">14:30 A 15:30 HRS</!--div-->
                        <div class="primary">
                            Andrés Díaz Bedolla, <br>
                            <small>
                                CEO y representantes en México, Atomic88 y Alibaba
                            </small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Carlos Ranero.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">De gerente comercial a gerente de growth</div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">15:45 A 16:45 HRS</!--div-->
                        <div class="primary">
                           Carlos Ranero, <br>
                           <small>
                            Chief Growth Officer,
                            Justo
                           </small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Alberto Achar.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary">Cautiva a tu cliente con un gran mensaje</div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">15:45 A 16:45 HRS</!--div-->
                        <div class="primary">
                           Alberto Achar, <br>
                           <small>
                            Director Comercial, Librerías Gandhi
                           </small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Omar Carrera.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary"></div>
                        <br>
                        <!--div class="second">DOCUSIGN</!--div-->
                        <!--div class="second">17:00 A 18:00 HRS</!--div-->
                        <div class="primary">
                          Omar Carrera, <br>
                           <small>
                            Director Comercial, Volaris
                           </small>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo get_template_directory_uri( ).'/img/2022/conferencias_on_demand/Ramon Garza.png' ?>" alt="">

                    <div class="desc">
                        <div class="second">Conferencia magistral:</div>
                        <div class="primary"></div>
                        <br>
                        <!--div class="second">AUTYCOM</!--div-->
                        <!--div class="second">17:00 A 18:00 HRS</!--div-->
                        <div class="primary">
                            Ramon Garza
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table-cont" id="lista-de-conferencias" data-aos="fade-up">
    <div class="filters_cont">
        <div class="search-cont">
            <input id="search-conf" type="text" placeholder="Buscar conferencia">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri( ).'/img/2022/magnifying-glass.png' ?>" alt="">
            </div>
        </div>
        <div class="dropdown-cont">
            <p>Filtrar por ejes:</p>
            <select name="select-ejes" id="select-ejes">
                <option value="ALL">TODOS LOS EJES</option>
                <option value="CONFERENCIAS Y PANELES MAGISTRALES">CONFERENCIAS Y PANELES MAGISTRALES</option>
                <option value="EMPRENDIMIENTO">EMPRENDIMIENTO</option>
                <option value="EMPRESAS FAMILIARES Y RSE">EMPRESAS FAMILIARES Y RSE</option>
                <option value="FINANZAS Y FINANCIAMIENTO">FINANZAS Y FINANCIAMIENTO</option>
                <option value="INNOVACIÓN Y TRANSFORMACIÓN DIGITAL">INNOVACIÓN Y TRANSFORMACIÓN DIGITAL</option>
                <option value="MARKETING">MARKETING</option>
                <option value="RRHH Y DESARROLLO ORGANIZACIONAL">RRHH Y DESARROLLO ORGANIZACIONAL</option>
                <option value="VENTAS">VENTAS</option>
            </select>
        </div>
    </div>
    <div class="container">
        <table id="conferencias" class="lista-videos_cont">
            <thead>
                <th>Ponencia</th>
                <th>Expositor</th>
                <th>Eje</th>
            </thead>
            <tbody>
                <?php
                $args = array(
                    'post_type' => 'video',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) :
                    $loop->the_post();
                    $ytID = str_replace('https://youtu.be/', '', get_field('yt_video') );
                    ?>
                    <tr data-eje="<?php echo get_field('eje')?>" >
                        <td class="titulo"><div class="title_text"><a  data-video-id="<?php echo get_the_ID(); ?>" data-yt-id ="<?php echo $ytID; ?>"class="expo-video-item"><strong><?php the_title(); ?></strong></a></div></td>
                        <td class="conferencista"><?php echo get_field('conferencista'); ?></td>
                        <td class="eje"><?php echo get_field('eje')?></td>
                    </tr>
                    <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="pat-cont" data-aos="fade-up">
    <div class="title">
        Patrocinadores Institucionales
    </div>
    <div class="grid-pat">
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Alen-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Alfa-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Aquor-01.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Arca Continental-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/ArcelorMittal-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Autlan-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Banorte-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/BAT-MEXICO-AZUL.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Carrier-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Cemex-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Clarios-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Coflex-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Cuprum-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Cydsa-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Energy Intelligence-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Epscon-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/FANASA BLACK.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Femsa-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Frisa-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/GREENPAPER_10x2.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Iberdrola-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/JAITER-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Lamosa-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/ProDynamics-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Quimmco-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Ragasa-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Rengra-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Reynera-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Sanilock-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Senda.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Teleperformance.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Ternium-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Vitro-02.png' ?>" alt=""></div>
    <div class="item-cont"><img src="<?php echo get_template_directory_uri( ).'/img/2022/logos_patrocinadores/Xignux-02.png' ?>" alt=""></div>
    </div>
</div>
<?php
get_footer();
?>