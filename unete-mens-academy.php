<?php require_once 'includes/header.php'; ?>
    <section class="hero-wrap" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index">Inicio</a></span> <span>Únete</span></p>
                    <h1 class="mb-5 bread">Únete al equipo</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section">
        <div class="container-fluid px-0">
            <div class="row d-md-flex text-wrapper">
                <div class="one-half img" style="background-image: url('images/bg_5.jpg');"></div>
                <div class="one-half half-text d-flex justify-content-end align-items-center">
                    <div class="text-inner pl-md-5">
                        <h3 class="heading">¿Quieres ser parte del exclusivo equipo de MEN’S?</h3>
                        <p>Te invitamos a que llenes el formulario a continuación.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-appointment ftco-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Men´s Academy</span>
                    <h2 class="mb-4">Datos personales</h2>
                    <p class="mb-5 text-20">Todas las solicitudes enviadas a MEN’S Academy a través de www.mensagency.com o por correo electrónico están de acuerdo con los Términos y Condiciones de MEN’S Academy. Para recibir una copia de nuestros Términos y condiciones, comuníquese con <a href="mailto:info@mensagency.com" target="_blank">info@mensagency.com</a></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 appointment ftco-animate">
                    <div id="contact-form" class="wow fadeIn first">
                        <form class="appointment-form form-contact" id="contactUnete" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-md-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" onfocus="this.placeholder = 'Escribe tu nombre*'" onblur="this.placeholder = 'El nombre es obligatorio*'" placeholder="Nombre*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastname" id="lastname" onfocus="this.placeholder = 'Escribe tu apellido*'" onblur="this.placeholder = 'El apellido es obligatorio*'" placeholder="Apellido*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="tel" id="tel" onfocus="this.placeholder = 'Escribe tu teléfono (10 digitos)*'" onblur="this.placeholder = 'El teléfono es obligatorio*'" placeholder="Teléfono (10 digitos)*" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" onfocus="this.placeholder = 'Escribe tu e-mail*'" onblur="this.placeholder = 'El e-mail es obligatorio*'" placeholder="E-mail*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="direction" id="direction" onfocus="this.placeholder = 'Escribe tu dirección*'" onblur="this.placeholder = 'La dirección es obligatoria*'" placeholder="Dirección completa*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="namehome" id="namehome" onfocus="this.placeholder = 'Escribe el nombre y número de la casa*'" onblur="this.placeholder = 'El nombre y número de la casa es obligatorio*'" placeholder="Nombre y número de la casa*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" id="city" onfocus="this.placeholder = 'Escribe tu ciudad*'" onblur="this.placeholder = 'La ciudad es obligatoria*'" placeholder="Ciudad*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cp" id="cp" onfocus="this.placeholder = 'Escribe el Código Postal*'" onblur="this.placeholder = 'El Código Postal es obligatorio*'" placeholder="Código Postal*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" id="country" onfocus="this.placeholder = 'Escribe tu país*'" onblur="this.placeholder = 'El país es obligatorio*'" placeholder="País*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="">Género*</option>
                                            <option value="Mujer">Mujer</option>
                                            <option value="Hombre">Hombre</option>
                                        </select>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label for="Fecha de nacimiento">Fecha de nacimiento*</label>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" maxlength="2" class="form-control" name="day" id="day" placeholder="Día*" required>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" maxlength="2" class="form-control" name="month" id="month" placeholder="Mes*" required>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" maxlength="4" class="form-control" name="year" id="year" placeholder="Año*" required>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="dresssize" id="dresssize" onfocus="this.placeholder = 'Escribe el tamaño*'" onblur="this.placeholder = 'El tamaño es obligatorio*'" placeholder="Tamaño del vestido / Tamaño del traje*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select name="height" id="height" class="form-control" required>
                                            <option value="" _istranslated="1">Altura*</option>
                                            <option value="31cm" _istranslated="1">31cm / 1' 0''</option>
                                            <option value="32cm" _istranslated="1">32cm / 1' 0½''</option>
                                            <option value="33cm" _istranslated="1">33cm / 1' 1''</option>
                                            <option value="34cm" _istranslated="1">34cm / 1' 1½''</option>
                                            <option value="35cm" _istranslated="1">35cm / 1' 2''</option>
                                            <option value="36cm" _istranslated="1">36cm / 1' 2''</option>
                                            <option value="37cm" _istranslated="1">37cm / 1' 2½''</option>
                                            <option value="38cm" _istranslated="1">38cm / 1' 3''</option>
                                            <option value="39cm" _istranslated="1">39cm / 1' 3½''</option>
                                            <option value="40cm" _istranslated="1">40cm / 1' 3½''</option>
                                            <option value="41cm" _istranslated="1">41cm / 1' 4''</option>
                                            <option value="42cm" _istranslated="1">42cm / 1' 4½''</option>
                                            <option value="43cm" _istranslated="1">43cm / 1' 5''</option>
                                            <option value="44cm" _istranslated="1">44cm / 1' 5½''</option>
                                            <option value="45cm" _istranslated="1">45cm / 1' 5½''</option>
                                            <option value="46cm" _istranslated="1">46cm / 1' 6''</option>
                                            <option value="47cm" _istranslated="1">47cm / 1' 6½''</option>
                                            <option value="48cm" _istranslated="1">48cm / 1' 7''</option>
                                            <option value="49cm" _istranslated="1">49cm / 1' 7½''</option>
                                            <option value="50cm" _istranslated="1">50cm / 1' 7½''</option>
                                            <option value="51cm" _istranslated="1">51cm / 1' 8''</option>
                                            <option value="52cm" _istranslated="1">52cm / 1' 8½''</option>
                                            <option value="53cm" _istranslated="1">53cm / 1' 9''</option>
                                            <option value="54cm" _istranslated="1">54cm / 1' 9½''</option>
                                            <option value="55cm" _istranslated="1">55cm / 1' 9½''</option>
                                            <option value="56cm" _istranslated="1">56cm / 1' 10''</option>
                                            <option value="57cm" _istranslated="1">57cm / 1' 10½''</option>
                                            <option value="58cm" _istranslated="1">58cm / 1' 11''</option>
                                            <option value="59cm" _istranslated="1">59cm / 1' 11''</option>
                                            <option value="60cm" _istranslated="1">60cm / 1' 11½''</option>
                                            <option value="61cm" _istranslated="1">61cm / 2' 0''</option>
                                            <option value="62cm" _istranslated="1">62cm / 2' 0½''</option>
                                            <option value="63cm" _istranslated="1">63cm / 2' 1''</option>
                                            <option value="64cm" _istranslated="1">64cm / 2' 1''</option>
                                            <option value="65cm" _istranslated="1">65cm / 2' 1½''</option>
                                            <option value="66cm" _istranslated="1">66cm / 2' 2''</option>
                                            <option value="67cm" _istranslated="1">67cm / 2' 2½''</option>
                                            <option value="68cm" _istranslated="1">68cm / 2' 3''</option>
                                            <option value="69cm" _istranslated="1">69cm / 2' 3''</option>
                                            <option value="70cm" _istranslated="1">70cm / 2' 3½''</option>
                                            <option value="71cm" _istranslated="1">71cm / 2' 4''</option>
                                            <option value="72cm" _istranslated="1">72cm / 2' 4½''</option>
                                            <option value="73cm" _istranslated="1">73cm / 2' 4½''</option>
                                            <option value="74cm" _istranslated="1">74cm / 2' 5''</option>
                                            <option value="75cm" _istranslated="1">75cm / 2' 5½''</option>
                                            <option value="76cm" _istranslated="1">76cm / 2' 6''</option>
                                            <option value="77cm" _istranslated="1">77cm / 2' 6½''</option>
                                            <option value="78cm" _istranslated="1">78cm / 2' 6½''</option>
                                            <option value="79cm" _istranslated="1">79cm / 2' 7''</option>
                                            <option value="80cm" _istranslated="1">80cm / 2' 7½''</option>
                                            <option value="81cm" _istranslated="1">81cm / 2' 8''</option>
                                            <option value="82cm" _istranslated="1">82cm / 2' 8½''</option>
                                            <option value="83cm" _istranslated="1">83cm / 2' 8½''</option>
                                            <option value="84cm" _istranslated="1"> 84cm / 2' 9''</option>
                                            <option value="85cm" _istranslated="1">85cm / 2' 9½''</option>
                                            <option value="86cm" _istranslated="1">86cm / 2' 10''</option>
                                            <option value="87cm" _istranslated="1">87cm / 2' 10½''</option>
                                            <option value="88cm" _istranslated="1">88cm / 2' 10½''</option>
                                            <option value="89cm" _istranslated="1">89cm / 2' 11''</option>
                                            <option value="90cm" _istranslated="1">90cm / 2' 11½''</option>
                                            <option value="91cm" _istranslated="1">91cm / 2' 12''</option>
                                            <option value="92cm" _istranslated="1">92cm / 3' 0''</option>
                                            <option value="93cm" _istranslated="1">93cm / 3' 0½''</option>
                                            <option value="94cm" _istranslated="1">94cm / 3' 1''</option>
                                            <option value="95cm" _istranslated="1">95cm / 3' 1½''</option>
                                            <option value="96cm" _istranslated="1">96cm / 3' 2''</option>
                                            <option value="97cm" _istranslated="1">97cm / 3' 2''</option>
                                            <option value="98cm" _istranslated="1">98cm / 3' 2½''</option>
                                            <option value="99cm" _istranslated="1">99cm / 3' 3''</option>
                                            <option value="100cm" _istranslated="1">100cm / 3' 3½''</option>
                                            <option value="101cm" _istranslated="1">101cm / 3' 4''</option>
                                            <option value="102cm" _istranslated="1">102cm / 3' 4''</option>
                                            <option value="103cm" _istranslated="1">103cm / 3' 4½''</option>
                                            <option value="104cm" _istranslated="1">104cm / 3' 5''</option>
                                            <option value="105cm" _istranslated="1">105cm / 3' 5½''</option>
                                            <option value="106cm" _istranslated="1">106cm / 3' 5½''</option>
                                            <option value="107cm" _istranslated="1">107cm / 3' 6''</option>
                                            <option value="108cm" _istranslated="1">108cm / 3' 6½''</option>
                                            <option value="109cm" _istranslated="1">109cm / 3' 7''</option>
                                            <option value="110cm" _istranslated="1">110cm / 3' 7½''</option>
                                            <option value="111cm" _istranslated="1">111cm / 3' 7½''</option>
                                            <option value="112cm" _istranslated="1">112cm / 3' 8''</option>
                                            <option value="113cm" _istranslated="1">113cm / 3' 8½''</option>
                                            <option value="114cm" _istranslated="1">114cm / 3' 9''</option>
                                            <option value="115cm" _istranslated="1">115cm / 3' 9½''</option>
                                            <option value="116cm" _istranslated="1">116cm / 3' 9½''</option>
                                            <option value="117cm" _istranslated="1">117cm / 3' 10''</option>
                                            <option value="118cm" _istranslated="1">118cm / 3' 10½''</option>
                                            <option value="119cm" _istranslated="1">119cm / 3' 11''</option>
                                            <option value="120cm" _istranslated="1">120cm / 3' 11''</option>
                                            <option value="121cm" _istranslated="1">121cm / 3' 11½''</option>
                                            <option value="122cm" _istranslated="1">122cm / 4' 0''</option>
                                            <option value="123cm" _istranslated="1">123cm / 4' 0½''</option>
                                            <option value="124cm" _istranslated="1">124cm / 4' 1''</option>
                                            <option value="125cm" _istranslated="1">125cm / 4' 1''</option>
                                            <option value="126cm" _istranslated="1">126cm / 4' 1½''</option>
                                            <option value="127cm" _istranslated="1">127cm / 4' 2''</option>
                                            <option value="128cm" _istranslated="1">128cm / 4' 2½''</option>
                                            <option value="129cm" _istranslated="1">129cm / 4' 3''</option>
                                            <option value="130cm" _istranslated="1">130cm / 4' 3''</option>
                                            <option value="131cm" _istranslated="1">131cm / 4' 3½''</option>
                                            <option value="132cm" _istranslated="1">132cm / 4' 4''</option>
                                            <option value="133cm" _istranslated="1">133cm / 4' 4½''</option>
                                            <option value="134cm" _istranslated="1">134cm / 4' 5''</option>
                                            <option value="135cm" _istranslated="1">135cm / 4' 5''</option>
                                            <option value="136cm" _istranslated="1">136cm / 4' 5½''</option>
                                            <option value="137cm" _istranslated="1">137cm / 4' 6''</option>
                                            <option value="138cm" _istranslated="1">138cm / 4' 6½''</option>
                                            <option value="139cm" _istranslated="1">139cm / 4' 6½''</option>
                                            <option value="140cm" _istranslated="1">140cm / 4' 7''</option>
                                            <option value="141cm" _istranslated="1">141cm / 4' 7½''</option>
                                            <option value="142cm" _istranslated="1">142cm / 4' 8''</option>
                                            <option value="143cm" _istranslated="1">143cm / 4' 8½''</option>
                                            <option value="144cm" _istranslated="1">144cm / 4' 8½''</option>
                                            <option value="145cm" _istranslated="1">145cm / 4' 9''</option>
                                            <option value="146cm" _istranslated="1">146cm / 4' 9½''</option>
                                            <option value="147cm" _istranslated="1">147cm / 4' 10''</option>
                                            <option value="148cm" _istranslated="1">148cm / 4' 10½''</option>
                                            <option value="149cm" _istranslated="1">149cm / 4' 10½''</option>
                                            <option value="150cm" _istranslated="1">150cm / 4' 11''</option>
                                            <option value="151cm" _istranslated="1">151cm / 4' 11½''</option>
                                            <option value="152cm" _istranslated="1">152cm / 4' 12''</option>
                                            <option value="153cm" _istranslated="1">153cm / 5' 0''</option>
                                            <option value="154cm" _istranslated="1">154cm / 5' 0½''</option>
                                            <option value="155cm" _istranslated="1">155cm / 5' 1''</option>
                                            <option value="156cm" _istranslated="1">156cm / 5' 1½''</option>
                                            <option value="157cm" _istranslated="1">157cm / 5' 2''</option>
                                            <option value="158cm" _istranslated="1">158cm / 5' 2''</option>
                                            <option value="159cm" _istranslated="1">159cm / 5' 2½''</option>
                                            <option value="160cm" _istranslated="1">160cm / 5' 3''</option>
                                            <option value="161cm" _istranslated="1">161cm / 5' 3½''</option>
                                            <option value="162cm" _istranslated="1">162cm / 5' 4''</option>
                                            <option value="163cm" _istranslated="1">163cm / 5' 4''</option>
                                            <option value="164cm" _istranslated="1">164cm / 5' 4½''</option>
                                            <option value="165cm" _istranslated="1">165cm / 5' 5''</option>
                                            <option value="166cm" _istranslated="1">166cm / 5' 5½''</option>
                                            <option value="167cm" _istranslated="1">167cm / 5' 5½''</option>
                                            <option value="168cm" _istranslated="1">168cm / 5' 6''</option>
                                            <option value="169cm" _istranslated="1">169cm / 5' 6½''</option>
                                            <option value="170cm" _istranslated="1">170cm / 5' 7''</option>
                                            <option value="171cm" _istranslated="1">171cm / 5' 7½''</option>
                                            <option value="172cm" _istranslated="1">172cm / 5' 7½''</option>
                                            <option value="173cm" _istranslated="1">173cm / 5' 8''</option>
                                            <option value="174cm" _istranslated="1">174cm / 5' 8½''</option>
                                            <option value="175cm" _istranslated="1">175cm / 5' 9''</option>
                                            <option value="176cm" _istranslated="1">176cm / 5' 9½''</option>
                                            <option value="177cm" _istranslated="1">177cm / 5' 9½''</option>
                                            <option value="178cm" _istranslated="1">178cm / 5' 10''</option>
                                            <option value="179cm" _istranslated="1">179cm / 5' 10½''</option>
                                            <option value="180cm" _istranslated="1">180cm / 5' 11''</option>
                                            <option value="181cm" _istranslated="1">181cm / 5' 11½''</option>
                                            <option value="182cm" _istranslated="1">182cm / 5' 11½''</option>
                                            <option value="183cm" _istranslated="1">183cm / 6' 0''</option>
                                            <option value="184cm" _istranslated="1">184cm / 6' 0½''</option>
                                            <option value="185cm" _istranslated="1">185cm / 6' 1''</option>
                                            <option value="186cm" _istranslated="1">186cm / 6' 1''</option>
                                            <option value="187cm" _istranslated="1">187cm / 6' 1½''</option>
                                            <option value="188cm" _istranslated="1">188cm / 6' 2''</option>
                                            <option value="189cm" _istranslated="1">189cm / 6' 2½''</option>
                                            <option value="190cm" _istranslated="1">190cm / 6' 3''</option>
                                            <option value="191cm" _istranslated="1">191cm / 6' 3''</option>
                                            <option value="192cm" _istranslated="1">192cm / 6' 31'2''</option>
                                            <option value="193cm" _istranslated="1">193cm / 6' 4''</option>
                                            <option value="194cm" _istranslated="1">194cm / 6' 41/2''</option>
                                            <option value="195cm" _istranslated="1">195cm / 6' 5''</option>
                                            <option value="196cm" _istranslated="1">196cm / 6' 5''</option>
                                            <option value="197cm" _istranslated="1">197cm / 6' 51/2''</option>
                                            <option value="198cm" _istranslated="1">198cm / 6' 6''</option>
                                            <option value="199cm" _istranslated="1">199cm / 6' 61/2''</option>
                                            <option value="200cm" _istranslated="1">200cm / 6' 61/2''</option>
                                            <option value="201cm" _istranslated="1">201cm / 6' 7''</option>
                                            <option value="202cm" _istranslated="1">202cm / 6' 71/2''</option>
                                            <option value="203cm" _istranslated="1">203cm / 6' 8''</option>
                                            <option value="204cm" _istranslated="1">204cm / 6' 81/2''</option>
                                            <option value="205cm" _istranslated="1">205cm / 6' 81/2''</option>
                                            <option value="206cm" _istranslated="1">206cm / 6' 9''</option>
                                            <option value="207cm" _istranslated="1">207cm / 6' 91/2''</option>
                                            <option value="208cm" _istranslated="1">208cm / 6' 10''</option>
                                            <option value="209cm" _istranslated="1">209cm / 6' 101/2''</option>
                                            <option value="210cm" _istranslated="1">210cm / 6' 101/2''</option>
                                        </select>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="weight" id="weight" onfocus="this.placeholder = 'Escribe tu peso*'" onblur="this.placeholder = 'El peso es obligatorio*'" placeholder="Peso*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select name="eyes" id="eyes" class="form-control" required>
                                            <option value="">Color de ojos *</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Azul con verde">Azul con verde</option>
                                            <option value="Azul con gris">Azul con gris</option>
                                            <option value="Gris">Gris</option>
                                            <option value="Café">Café</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Hazel">Hazel</option>
                                            <option value="Verde">Verde</option>
                                            <option value="Verde con gris">Verde con gris</option>
                                        </select>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select name="hair" id="hair" class="form-control" required>
                                            <option value="" _istranslated="1">Color del cabello*</option>
                                            <option value="Auburn" _istranslated="1">Auburn</option>
                                            <option value="Rubio" _istranslated="1">Rubio</option>
                                            <option value="Oscuro rubio" _istranslated="1">Oscuro rubio</option>
                                            <option value="Venitian rubio" _istranslated="1">Venitian rubio</option>
                                            <option value="Marrón" _istranslated="1">Marrón</option>
                                            <option value="Claro marrón" _istranslated="1">Claro marrón</option>
                                            <option value="Oscuro" _istranslated="1">Oscuro</option>
                                            <option value="Negro" _istranslated="1">Negro</option>
                                            <option value="Blanco" _istranslated="1">Blanco</option>
                                            <option value="Calvo" _istranslated="1">Calvo</option>
                                            <option value="Gris" _istranslated="1">Gris</option>
                                        </select>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="shoesize" id="shoesize" onfocus="this.placeholder = 'Escribe tu talla de calzado*'" onblur="this.placeholder = 'La talla del calzado es obligatoria*'" placeholder="Talla del calzado*" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 heading-section text-center ftco-animate">
                                <h2 class="mb-4">Social</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="instagram" onfocus="this.placeholder = 'Escribe tu Instagram'" onblur="this.placeholder = 'Escribe tu Instagram'" placeholder="por ejemplo, instagram.com/mensagency" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" onfocus="this.placeholder = 'Escribe tu Facebook'" onblur="this.placeholder = 'Escribe tu Facebook'" placeholder="por ejemplo, facebook.com/mensagency" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" name="twitter" id="twitter" onfocus="this.placeholder = 'Escribe tu Twitter'" onblur="this.placeholder = 'Escribe tu Twitter'" placeholder="por ejemplo, twitter.com/mensagency" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>YouTube</label>
                                        <input type="text" class="form-control" name="youtube" id="youtube" onfocus="this.placeholder = 'Escribe tu canal de YouTube'" onblur="this.placeholder = 'Escribe tu canal de YouTube'" placeholder="por ejemplo, youtube.com/mensagency" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Sitio Web</label>
                                        <input type="text" class="form-control" name="website" id="website" onfocus="this.placeholder = 'Escribe tu website'" onblur="this.placeholder = 'Escribe tu website'" placeholder="por ejemplo, https://mensagency.com" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>¿Eres miembro de Casting Networks?</label>
                                        <select name="spotlight" id="spotlight" class="form-control" required>
                                            <option value="">seleccione</option>
                                            <option value="Sí" _istranslated="1">Sí</option>
                                            <option value="No" _istranslated="1">No</option>
                                        </select>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 heading-section text-center ftco-animate">
                                <h2 class="mb-4">Subir imágenes</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Imagen 1</label>
                                        <input type="file" id="image_1" name="image_1" class="uploadButton inputfile" onchange="loadImage(this,1,1)" data-max-size="3145728" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Imagen 2</label>
                                        <input type="file" id="image_2" name="image_2" class="uploadButton inputfile" onchange="loadImage(this,1,1)" data-max-size="3145728" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Imagen 3</label>
                                        <input type="file" id="image_3" name="image_3" class="uploadButton inputfile" onchange="loadImage(this,1,1)" data-max-size="3145728" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <label>Imagen 4</label>
                                        <input type="file" id="image_4" name="image_4" class="uploadButton inputfile" onchange="loadImage(this,1,1)" data-max-size="3145728" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 heading-section text-center ftco-animate">
                                <h2 class="mb-4">Información adicional</h2>
                                <p>Por favor, díganos sus habilidades, interés y cualquier experiencia relevante a continuación:*</p>
                            </div>
                            <div class="col-md-12">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <textarea name="message" id="message" rows="5" cols="80" required></textarea>
                                        <div class="help-block with-errors text-danger"></div>
                                        <div id="msgSubmitUnete" class="h5 text-center hidden"></div>
                                    </div>
                                </div>
                                <p class="text-white">*Campos obligatorios</p>
                            </div>
                            <div class="col-md-12">
                                <p class="text-center">Desafortunadamente, debido a un gran número de solicitudes, no podemos responder a todos los solicitantes.</p>
                                <p class="text-center">Si tiene éxito, recibirá una respuesta en un plazo de 14 días.</p>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="Enviar mensaje" class="btn btn-primary btn-lg btn-block py-3 px-5">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once 'includes/footer.php'; ?>