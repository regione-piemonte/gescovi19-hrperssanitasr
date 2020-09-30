
Runner.buttonEvents["Conferma"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Conferma';if(!pageObj.buttonEventBefore['Conferma']){pageObj.buttonEventBefore['Conferma']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['Conferma']){pageObj.buttonEventAfter['Conferma']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;if(result["err"]=='SI')
alert('La richiesta di fabbisogno risulta già inviata');else
alert('Fabbisogno inviato correttamente');location.reload();}}
$('a[id="Conferma"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Conferma"+"_"+Runner.genId();var button_Conferma=new Runner.form.Button({id:this.id,btnName:"Conferma"});button_Conferma.init({args:[pageObj,proxy,pageid]});});};