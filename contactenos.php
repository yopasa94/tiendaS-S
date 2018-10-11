<!DOCTYPE html>
<html lang="en">
    
	 <?php include("view/header.php"); ?>
    <body>
        <?php include("view/cabecera.php"); ?>	
        
        <!--    Mapa de Ubicacion-->
        <section class="google_map">
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15905.44068895046!2d-74.09480113114036!3d4.707343330711266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b2dd69e31e7%3A0x2ee6c2019c8e3c08!2zU3ViYSwgQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1539221253475" allowfullscreen></iframe>
        </section>
        
        <!--    Foto de Contactenos-->
        <section class="header_text">
            <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
            <h4><span>Contactenos</span></h4>
        </section>
	
        <!--    Seccion de Informacion-->
        <section class="main-content">				
            <div class="row">				
                    <div class="span5 center">
                            <div>
                                <h5 class="leftSpaceTittle">INFORMACION ADICIONAL</h5>
                                    
                                    <p class="leftSpaceP"><strong>Telefono:</strong>&nbsp;(123) 456-7890<br>
                                    <!--<strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>-->
                                    <strong>Email:</strong>&nbsp;<a href="#">sindy.aguilar@yahoo.com</a>								
                                    </p>
                                    <br/>
                                    <h5 class="leftSpaceTittle">INFORMACION CONTACTO ALTERNATIVO</h5>
                                    <p class="leftSpaceP"><strong>Phone:</strong>&nbsp;(113) 023-1125<br>
                                    <!--<strong>Fax:</strong>&nbsp;+04 (113) 023-1145<br>-->
                                    <strong>Email:</strong>&nbsp;<a href="#">silvio.yopasa@yahoo.com</a>					
                                    </p>
                            </div>
                    </div>
                    <div class="span7">
                            <p>Ingrese su informacion y lo contactaremos.</p>
                            <form  action="administrar_Cliente.php" method="post">
                                    <fieldset>
                                            <div class="clearfix">
                                                    <label ><span>Nombre:</span></label>
                                                    <div class="input">
                                                            <input tabindex="1" size="18"  name="nombre" type="text"  class="input-xlarge" placeholder="Nombre">
                                                    </div>
                                            </div>

                                            <div class="clearfix">
                                                    <label ><span>Apellidos:</span></label>
                                                    <div class="input">
                                                            <input tabindex="1" size="18"  name="apellidos" type="text"  class="input-xlarge" placeholder="Apellidos">
                                                    </div>
                                            </div>
                                        
                                            <div class="clearfix">
                                                    <label ><span>Telefono:</span></label>
                                                    <div class="input">
                                                        <input tabindex="1" size="18"  name="telefono" type="text"  class="input-xlarge" placeholder="Telefono">
                                                    </div>
                                            </div>


                                            <div class="clearfix">
                                                    <label ><span>Email:</span></label>
                                                    <div class="input">
                                                        <input tabindex="2" size="25"  name="email" type="text"  class="input-xlarge" placeholder="Email">
                                                    </div>
                                            </div>
                                            
                                            <div class="clearfix">
                                                    <label for="message"><span>Mensaje:</span></label>
                                                    <div class="input">
                                                        <textarea tabindex="3" class="input-xlarge" name="mensaje" type="text" accesskey=""rows="7" placeholder="Message"></textarea>
                                                    </div>
                                            </div>
                                        
                                        
                                            <input type='hidden' name='insertar' value='insertar'>
                                            <div class="actions">
                                                    <button tabindex="3" type="submit" value="Guardar" class="btn btn-inverse">Enviar</button>
                                            </div>
                                    </fieldset>
                            </form>
                    </div>				
            </div>
        </section>			
              <?php include("./view/footer.php"); ?>
			
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>