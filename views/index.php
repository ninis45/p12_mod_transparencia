
<div id="rt-main" class="mb9-sa3 block-transparencia">
    <div class="rt-flex-container">
        <div class="rt-mainbody-wrapper rt-grid-9 ">
            <div class="rt-component-block rt-block">
                <div id="rt-mainbody">
                    
                    <div class="component-content">
                        <article class="item-page">
                             <?php if($tipo=='comun'): ?>
                             <!--empieza comun-->
                             <div itemprop="articleBody">
	<p>&nbsp;</p>
<h1 style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; color: #000000;">Tabla de aplicabilidad de las Obligaciones de Transparencia comunes de la Secretaría de Seguridad Pública</span></h1>
<p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; color: #000000;">Constituyen la información que producen sólo determinados Sujetos Obligados a partir de su figura Legal, Atribuciones, Facultades y/o su Objeto Social. Además de lo señalado en el Articulo anterior de la presente Ley, los Sujetos Obligados del Poder Ejecutivo del Estado deberan poner a disposición del público y actualizar la siguiente información:</span></p>
<hr>
<table class="table table-hover" style="width: 100%; border: 1px solid #cecaca;" align="center">
    <thead>
    <tr style="border-width: 1px; border-color: #2f8374; background-color: #2f8374;">
    <td style="text-align: center;"><span style="color: #ffffff;"><strong>Artículo</strong></span></td>
    <td style="text-align: center;"><span style="color: #ffffff;"><strong>Fracción</strong></span></td>
    <td style="text-align: center;"><span style="color: #ffffff;"><strong>Obligación</strong></span></td>
    <td style="text-align: center;">&nbsp;<span style="color: #ffffff;"><strong>Aplicabilidad</strong></span></td>
    <td style="text-align: center;">&nbsp;<strong><span style="color: #ffffff;">Periodicidad</span></strong></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($fracciones as $index=>$fraccion):?>
        <?php if($index==0): ?>
        <tr style="border-color: #cecaca; border-width: 1px;" align="center">
            <td rowspan="<?=count($fracciones)?>" style="border: 1px solid #cecaca; text-align: center; vertical-align: middle;">
                <p><span style="font-family: helvetica; color: #000000;"><span style="text-align: center;">70.- En la Ley Federal <br>y de las Entidades federativas <br> se contemplará que los <br>sujetos obligados pongan a <br> disposición del Público y <br> mantengan actualizada, <br> en los respectivos medios <br> electronicos, de acuerdo <br> con sus facultades, <br> atribuciones, funciones u <br> objeto social, según <br> corresponda, la <br> informacion, por lo menos, <br> de los temas, documentos <br> y politicas que a <br> continuación se señalan:</span></span><span style="color: #000000;"><strong style="text-align: center;"><span style="font-family: helvetica;"><br></span></strong></span><span style="color: #000000;"><strong style="text-align: center;"><span style="font-family: helvetica;"><br></span></strong></span><span style="color: #000000;"><strong style="text-align: center;"><span style="font-family: helvetica;"><br></span></strong></span><span style="color: #000000;"><strong style="text-align: center;"><span style="font-family: helvetica;"><br></span></strong></span></p>
                <p><span style="font-family: helvetica; color: #000000;"><span style="text-align: center;"></span></span></p>
            </td>
            <td style="border: 1px solid #cecaca; text-align: center;"><span style="color: #333333;"><strong><?=$fraccion->numeral?></strong></span></td>
            <td style="border: 1px solid #cecaca; text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; color: #dca33f;">
                <a  data-toggle="modal"  data-target="#myModal" href="<?=base_url('transparencia/detalles/'.$fraccion->id)?>" target="_blank" class="jcepopup noicon" title="El Marco Normativo"  rel="noopener noreferrer"><?=$fraccion->nombre?></a><br></span></td>
            <td style="border: 1px solid #cecaca;" class="text-center">
                <div class="text-center">
                <?php if($fraccion->aplicable): ?>
                    {{theme:image file="icons/18check.png"}}
                
                <?php else:?>
                    {{theme:image file="icons/18denied.png"}}
                <?php endif;?>
                </div>
            </td>
            <td style="border: 1px solid #cecaca; text-align: center;" align="center" valign="middle"><span style="color: #808080;"><?=$periodos[$fraccion->periodicidad]?></span></td>
        </tr>
        <?php else: ?>
        <tr style="border-color: #cecaca; border-width: 1px;" align="center">
            <td style="border: 1px solid #cecaca; text-align: center;"><span style="color: #333333;"><strong><?=$fraccion->numeral?></strong></span></td>
            <td style="border: 1px solid #cecaca; text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; color: #dca33f;">
                <a data-toggle="modal"  data-target="#myModal" href="<?=base_url('transparencia/detalles/'.$fraccion->id)?>" target="_blank" class="jcepopup noicon" title="Estructura orgánica" data-mediabox-width="1300" data-mediabox-height="700" rel="noopener noreferrer"><?=$fraccion->nombre?></a></span></td>
            <td style="border: 1px solid #cecaca;" >
                <div class="text-center">
                <?php if($fraccion->aplicable): ?>
                    {{theme:image file="icons/18check.png"}}
                
                <?php else:?>
                    {{theme:image file="icons/18denied.png"}}
                <?php endif;?>
                </div>
            </td>
            <td style="border: 1px solid #cecaca; text-align: center;" align="center" valign="middle"><span style="text-align: center; color: #808080;"><?=$periodos[$fraccion->periodicidad]?></span></td>
        </tr>
        <?php endif;?>
     <?php endforeach;?>
    </tbody>
</table>
</div>
                             <!--termina comun-->
                       <?php else:?>
                           <p class="text-center"><strong>PORTAL DE TRANSPARENCIA<br />
SECRETARÍA DE SEGURIDAD PÚBLICA.</strong></p>
                            <p>Con fundamento en la <strong>Ley de Transparencia y Acceso a la Información Pública del Estado de Campeche</strong>, Titulo Primero, <strong>Capitulo 1</strong>, Disposiciones Generales. "Artículo 1. La presente Ley es de orden público, interés social y de observancia general en todo el territorio del Estado de Campeche y tiene por objeto establecer los principios, bases generales y procedimientos para garantizar el derecho de acceso a la información, así como la organización y funcionamiento del organismo garante señalado en el artículo 125 bis de la Constitución Política del Estado de Campeche.</p>
                            
                            <p>El derecho humano de acceso a la información comprende la facultad de las personas para solicitar, difundir, investigar, buscar y recibir información pública, así como la obligación de los sujetos obligados de difundir, de manera proactiva, la información pública de oficio, las obligaciones en materia de transparencia y en general, toda aquella información que se considere de interés público.</p>
                            <div class="row transparencia">
                                <div class="col-md-6">
                                    <figure class="imghvr-flip-diag-1">
                                        {{theme:image file="icon_especifica.png"}}
                                        <figcaption>
                                            {{theme:image file="icon_especifica.png"}}
                                            <div class="text-wrapper">
                                                <h2>					Tabla de obligaciones especificas del poder ejecutivo				</h2>
                                                <a href="<?=base_url('transparencia?tipo=especifica')?>" class="sprocket-grids-b-readon">Leer más</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <figure class="imghvr-flip-diag-1">
                                        {{theme:image file="icon_comun.png"}}
                                        <figcaption>
                                            {{theme:image file="icon_comun.png"}}
                                            <div class="text-wrapper">
                                                <h2>					Tabla de aplicabilidad de las obligaciones de transparencia comunes				</h2>
                                                <a href="<?=base_url('transparencia?tipo=comun')?>" class="sprocket-grids-b-readon">Leer más</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            
                            
                       
                       <?php endif;?>
                       
                       </article>
                   </div>
               </div>  
           </div>
                  
        </div>
        <div class="rt-sidebar-wrapper rt-grid-3 ">
            
            
            
            
        </div>
    </div>
    
</div>
