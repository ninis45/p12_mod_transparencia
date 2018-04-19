
<section>
    <div class="lead text-primary"><?=lang('obligaciones:title')?></div>
    <?php echo form_open('','id="frm" method="get"');?>
    <div class="form-group">
        <label>Fracciones</label>
        <?=form_dropdown('fr',array(''=>'Todos')+$fracciones,$this->input->get('fr'),'class="form-control" onchange="$(\'#frm\').submit();" ')?>
    </div>
    
    <?php  echo form_close();?>
    <?php if($obligaciones): ?>
    <table   class="table" summary="catalogos"  width="100%">
             <thead>
                 <tr>
                  
                   
                 
                   <th>Fracción</th>
                   <th>Obligacion</th>
                   
                   <th width="14%">Acciones</th>
                 </tr>
            </thead>
            <tbody>
                <?php foreach($obligaciones as $obligacion){?>
                    <tr>
                        
                        <td><?=$obligacion->numeral?>.- <?=$obligacion->nombre_fraccion?></td>
                        <td><?=$obligacion->nombre?></td>
                        
                        <td>
                            <?php echo anchor('admin/transparencia/obligaciones/edit/'.$obligacion->id, lang('buttons:edit'), 'class="button edit"') ?> 
                            
                            
                            </td>
                    </tr>
                <?php }?>
            </tbody>
    </table>
    <?php else:?>
    <div class="alert alert-info text-center"><?=lang('global:not_found')?></div>
    <?php endif;?>
</section>