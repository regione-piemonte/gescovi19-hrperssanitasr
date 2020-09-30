
Runner.buttonEvents["Aggiungi"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Aggiungi';if(!pageObj.buttonEventBefore['Aggiungi']){pageObj.buttonEventBefore['Aggiungi']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['Aggiungi']){pageObj.buttonEventAfter['Aggiungi']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;message="Fabbisogno aggiunto correttamente";if(result["TOT"]>0)
message="La richiesta è già presente in stato BOZZA o INVIATA, non è possibile aggiungerne una nuova";alert(message);location.reload();}}
$('a[id="Aggiungi"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Aggiungi"+"_"+Runner.genId();var button_Aggiungi=new Runner.form.Button({id:this.id,btnName:"Aggiungi"});button_Aggiungi.init({args:[pageObj,proxy,pageid]});});};