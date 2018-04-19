<div class="component-body block-transparencia">
    <div class="component-content">
    <article class="item-page" itemscope="" itemtype="http://schema.org/Article">
    <meta itemprop="inLanguage" content="es-ES">
    
    	<ul class="actions">
    						<li class="print-icon">
    						<a href="/ssp/index.php/menutransparencia/obligacionescomunes/34-poasmetas/343-metas-objetiv18?tmpl=component&amp;print=1&amp;layout=default" title="Print article < IV. LAS METAS Y OBJETIVOS18 >" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow">	Imprimir</a>			</li>
    		
    					<li class="email-icon">
    						<a href="/ssp/index.php/component/mailto/?tmpl=component&amp;template=rt_nuance&amp;link=f1e4e3a351c1c96266cccf51923b48c67036c9a9" title="Email this link to a friend" onclick="window.open(this.href,'win2','width=400,height=350,menubar=yes,resizable=yes'); return false;" rel="nofollow">	Correo electrónico</a>			</li>
    						</ul>
    
    
    
    
    	<dl class="article-info">
    	<dt class="article-info-term">Detalles</dt>
    	<dd class="published">
    		<time datetime="2018-02-07T18:58:29+00:00" itemprop="datePublished">
    			Publicado: Miércoles, 07 Febrero 2018 18:58		</time>
    	</dd>
    	</dl>
    
    
    
    <div itemprop="articleBody">
    	<h1><span style="font-family: arial, helvetica, sans-serif; color: #000000;"><?=$fraccion->numeral?> .- <?=$fraccion->nombre?></span></h1>
    <p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; color: #333333;"><?=$fraccion->descripcion?></span></p>
    
    <?php if($fraccion->aplicable): ?>
        
        <p><span class="fa fa-th-list" style="font-family: arial, helvetica; color: #333333;"><span style="font-family: arial, helvetica, sans-serif; color: #dfca41;"><a href="/ssp/images/TRANSPARENCIA/frac2/Estructura-OrganicaSSPCAM.pdf" class="jcepopup noicon" data-mediabox-height="700" data-mediabox-width="1400" title="Copyright: Gobierno del Estado de Campeche" data-placement="top"></a><a href="/ssp/index.php/menutransparencia/obligacionescomunes/96-historicotransparencia/150-iv-metas-y-objetivos-de-conformidad-con-sus-programas-operativos" target="_blank" class="jcepopup noicon" title="Copyright: Gobierno del Estado de Campeche" data-mediabox-width="1400" data-mediabox-height="700"> Histórico de ejercicios anteriores</a></span></span></p>
        <!--PERIODO DE ACTUALIZACIO FECHA PUBLICACION UNIDADES ADMINISTRATIVAS-->
        
        
        <p><span class="fa fa-refresh" style="font-family: arial, helvetica, sans-serif; color: #333333;"> Periodo de actualización:&nbsp;<span style="color: #000000;"><strong><?=$periodos[$fraccion->periodicidad]?></strong></span></span><br><span class="fa fa-calendar" style="font-family: arial, helvetica, sans-serif; color: #333333;"> Fecha de actualización: <strong>Primer trimestre 2018</strong></span><br/>
        <?php if($fraccion->unidades):?>
        <span class="fa fa-pencil-square-o" style="font-family: arial, helvetica, sans-serif; color: #333333;"> Unidad(es) Administrativa(s) que genera(n) o posee(n) la información:&nbsp;</span><span style="color: #000000;"><strong><span style="font-family: arial, helvetica, sans-serif;"><?=$fraccion->unidades?></span></strong></span><span style="font-size: 8pt; line-height: 107%; font-family: 'Open Sans', serif;"></span></p>
        <!--Botones de EXCEL Y VER EN LINEA-->
        <?php endif;?>
        <hr/>
        
       
         <?php foreach($fraccion->obligaciones as $obligacion):?>
           <h2><?=$obligacion->nombre?></h2>
           <p>
           <?php if($obligacion->anexo_excel): ?>
                <a target="_blank" href="<?=base_url('files/download/'.$obligacion->anexo_excel)?>"><button type="button" class="btn btn-large btn-success"><em class="fa fa-file-excel-o"> Descargar Excel</em></button> </a> 
           <?php endif;?>
                <a target="_blank"> <button type="button" class="btn btn-large btn-danger"><em class="fa fa-eye"> Ver Online</em></button> </a> <span style="padding-left: 20px;"> <span class="fa fa-hand-o-left"></span> Descargue y/o visualice aquí</span></p>
           <hr/>
           <div class="table-responsive">
           <table class="table table-hover course-list-table tablesorter">
                            <thead>
                                <tr>
                                    
                                    <?php foreach($obligacion->campos as $campo):?>
                                     <th width="<?=(100/count($obligacion->campos)).'%'?>"><?=$campo->nombre?></th>
                                     <?php endforeach;?>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach(Transparencia::GetValues($obligacion->id_fraccion,$obligacion->id) AS $value):?>
                                <tr>
                                     <?php $campos = json_decode($value->campos);?>
                                     
                                     <?php foreach($obligacion->campos as $campo):?>
                                         <?php 
                                             $html = '';
                                             
                                             switch($campo->tipo){
                                                case 'anchor':
                                                    $html   = $campos->{$campo->slug}?'<a  href="http://'.$campos->{$campo->slug}.'" target="_blank">'.$campos->{$campo->slug}.'</a>':''; 
                                                break;
                                                case 'upload':
                                                    
                                                    $file   = Files::get_file($campos->{$campo->slug});
                                                    //print_r($file);
                                                    $html   = '<a  href="'.$file['data']->path.'" target="_blank">'.$file['data']->path.'</a>'; 
                                                break; 
                                                case 'input':
                                                case 'calendar':
                                                    $html = $campos->{$campo->slug};
                                                break;
                                                default:
                                                break;
                                             }
                                         ?>
                                             <td>
                                                <?php echo $html; ?>
                                             </td>
                                            
                                        <?php endforeach;?>
                                        
                                </tr>
                            <?php endforeach;?>
                            </tbody>
           </table>
           </div>
           <?php endforeach;?>
    </div>
    <?php else:?>
    <div class="no-aplica">
        <h2 class="text-center">NO APLICA</h2>
        <p><?=$fraccion->motivo?></p>
    </div>
    
    <?php endif;?>
    
    	</article>
    
    </div>
</div>

    