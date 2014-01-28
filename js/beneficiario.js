var Beneficiario = function($)
{
    var campos = {},
        modelo = '',
        formID = '',
        formEnviarID = '',
        campoID = {};
    
    this.agregarFila = function(tableID){
        var fila = '',
            clase = this,
            etiqueta = '',
            texto = '',
            value = null,
            error = false,
            inputs = '',
            id = '';
        
        $.each(this.campos, function(index, element){
            etiqueta = $('#'+clase.modelo+'_'+element).get(0).tagName.toLowerCase();
            
            // si es una etiqueta input, obtener el type
            if(etiqueta == 'input')
                etiqueta = $('#'+clase.modelo+'_'+element).attr('type').toLowerCase();
            
            switch (etiqueta){
                case 'select':
                    texto = $('#'+clase.modelo+'_'+element+' option:selected').text();
                    break;
                case 'text':
                    texto = $('#'+clase.modelo+'_'+element).val();
                    break;
                case 'radio': // en el caso de radio y chechbox
                case 'checkbox': // obtener el texto del label
                    texto = $('label[for='+clase.modelo+'_'+element+']').text();
                    break;
                default:
                    texto = $('#'+clase.modelo+'_'+element).val();
            }
            
            $('#'+clase.modelo+'_'+element).removeClass('error');
            $('.alert').remove();
            
            value = $('#'+clase.modelo+'_'+element).val();
            
            if($('#'+clase.modelo+'_'+element).prop('required')) {
                if(value == '') {
                    error = true;
                    $('#'+clase.modelo+'_'+element).addClass('error');
                    
                    $('#beneficiario-form').prepend('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">x</button><h4>ERROR</h4>Debe completar los datos marcados</div>');
                    
                    return false;
                }
            }
            inputs += '<input name="'+clase.modelo+'[]['+element+']" type="text" value="'+value+'">';
            fila += '<td data-campo="'+element+'">'+texto+'</td>';
            
            if(jQuery.inArray(element, clase.campoID ) != -1) {
                id += value+'-';
            }
        });
        
        if(!error){
            id = id.substr(0, id.length-1);
            
            fila = '<tr id="'+id+'">'+fila+'</tr>';
            
            $('#'+tableID+' tbody').append(fila);
            
            $('#'+tableID+' tr').click(function(){
                console.log('click en la fila');
            });
            
            inputs = '<div id="'+id+'">'+inputs+'</div>';
            
            $('#'+this.formEnviarID).append(inputs);

            $('#'+this.formID).each (function(){
                this.reset();
            });
        }
    };
    
    this.guardar = function(){
        console.log('Guardar');
    };
    
    this.cargaFila = function(){
        
    };
    
    this.init = function(parametros) {
        this.campos = parametros.campos;
        this.modelo = parametros.modelo;
        this.formID = parametros.formID;
        this.campoID = parametros.campoID;
        this.formEnviarID = 'formEnviar';
        var clase = this;
        
        $('#'+parametros.botonAddID).click(function(){
            clase.agregarFila(parametros.tableID);
        });
        
        $('#'+parametros.botonSaveId).click(function(){
            clase.guardar();
        });
        
        $('#'+this.formID).after('<form id="'+this.formEnviarID+'" action="'+$('#'+this.formID).attr('action')+'" method="post" style="display:none">');

        $('#'+this.formEnviarID).append('<input type="hidden" value="'+$('input[name=YII_CSRF_TOKEN]').val()+'" name="YII_CSRF_TOKEN">');
    };
    
};

$(document).ready(function(){
    var objBeneficiario = new Beneficiario($);

    objBeneficiario.init({
        botonAddID: 'btnAgregarBeneficiario',
        botonSaveId: 'btnEnviarForm',
        formID: 'beneficiario-form',
        tableID: 'tblBeneficiarios',
        modelo: 'Beneficiario',
        campoID: ['id_unidad_beneficiario',
                  'genero'],
        campos: ['id_unidad_beneficiario',
                'genero',
                'total',
                'urbano',
                'rural',
                'mestizo',
                'indigena',
                'inmigrante',
                'otros',
                'marginacion_muy_alta',
                'marginacion_alta',
                'marginacion_media',
                'marginacion_baja',
                'marginacion_muy_baja']
    });
});